<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRateRequest;
use App\Http\Requests\UpdateRateRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RateRepository;
use Illuminate\Http\Request;
use Flash;

class RateController extends AppBaseController
{
    /** @var RateRepository $rateRepository*/
    private $rateRepository;

    public function __construct(RateRepository $rateRepo)
    {
        $this->rateRepository = $rateRepo;
    }

    /**
     * Display a listing of the Rate.
     */
    public function index(Request $request)
    {
        $rates = $this->rateRepository->paginate(10);

        return view('dashboard.rates.index')
            ->with('rates', $rates);
    }

    /**
     * Show the form for creating a new Rate.
     */
    public function create()
    {
        return view('dashboard.rates.create');
    }

    /**
     * Store a newly created Rate in storage.
     */
    public function store(CreateRateRequest $request)
    {
        $input = $request->all();

        $rate = $this->rateRepository->create($input);

        Flash::success('Rate saved successfully.');

        return redirect(route('dashboard.rates.index'));
    }

    /**
     * Display the specified Rate.
     */
    public function show($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('dashboard.rates.index'));
        }

        return view('dashboard.rates.show')->with('rate', $rate);
    }

    /**
     * Show the form for editing the specified Rate.
     */
    public function edit($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('dashboard.rates.index'));
        }

        return view('dashboard.rates.edit')->with('rate', $rate);
    }

    /**
     * Update the specified Rate in storage.
     */
    public function update($id, UpdateRateRequest $request)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('dashboard.rates.index'));
        }

        $rate = $this->rateRepository->update($request->all(), $id);

        Flash::success('Rate updated successfully.');

        return redirect(route('dashboard.rates.index'));
    }

    /**
     * Remove the specified Rate from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('dashboard.rates.index'));
        }

        $this->rateRepository->delete($id);

        Flash::success('Rate deleted successfully.');

        return redirect(route('dashboard.rates.index'));
    }
}
