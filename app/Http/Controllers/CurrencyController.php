<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CurrencyRepository;
use Illuminate\Http\Request;
use Flash;

class CurrencyController extends AppBaseController
{
    /** @var CurrencyRepository $currencyRepository*/
    private $currencyRepository;

    public function __construct(CurrencyRepository $currencyRepo)
    {
        $this->currencyRepository = $currencyRepo;
    }

    /**
     * Display a listing of the Currency.
     */
    public function index(Request $request)
    {
        $currencies = $this->currencyRepository->paginate(10);

        return view('dashboard.currencies.index')
            ->with('currencies', $currencies);
    }

    /**
     * Show the form for creating a new Currency.
     */
    public function create()
    {
        return view('dashboard.currencies.create');
    }

    /**
     * Store a newly created Currency in storage.
     */
    public function store(CreateCurrencyRequest $request)
    {
        $input = $request->all();

        $currency = $this->currencyRepository->create($input);

        Flash::success('Currency saved successfully.');

        return redirect(route('dashboard.currencies.index'));
    }

    /**
     * Display the specified Currency.
     */
    public function show($id)
    {
        $currency = $this->currencyRepository->find($id);

        if (empty($currency)) {
            Flash::error('Currency not found');

            return redirect(route('dashboard.currencies.index'));
        }

        return view('dashboard.currencies.show')->with('currency', $currency);
    }

    /**
     * Show the form for editing the specified Currency.
     */
    public function edit($id)
    {
        $currency = $this->currencyRepository->find($id);

        if (empty($currency)) {
            Flash::error('Currency not found');

            return redirect(route('dashboard.currencies.index'));
        }

        return view('dashboard.currencies.edit')->with('currency', $currency);
    }

    /**
     * Update the specified Currency in storage.
     */
    public function update($id, UpdateCurrencyRequest $request)
    {
        $currency = $this->currencyRepository->find($id);

        if (empty($currency)) {
            Flash::error('Currency not found');

            return redirect(route('dashboard.currencies.index'));
        }

        $currency = $this->currencyRepository->update($request->all(), $id);

        Flash::success('Currency updated successfully.');

        return redirect(route('dashboard.currencies.index'));
    }

    /**
     * Remove the specified Currency from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $currency = $this->currencyRepository->find($id);

        if (empty($currency)) {
            Flash::error('Currency not found');

            return redirect(route('dashboard.currencies.index'));
        }

        $this->currencyRepository->delete($id);

        Flash::success('Currency deleted successfully.');

        return redirect(route('dashboard.currencies.index'));
    }
}
