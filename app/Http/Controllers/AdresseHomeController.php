<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdresseHomeRequest;
use App\Http\Requests\UpdateAdresseHomeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdresseHomeRepository;
use Illuminate\Http\Request;
use Flash;

class AdresseHomeController extends AppBaseController
{
    /** @var AdresseHomeRepository $adresseHomeRepository*/
    private $adresseHomeRepository;

    public function __construct(AdresseHomeRepository $adresseHomeRepo)
    {
        $this->adresseHomeRepository = $adresseHomeRepo;
    }

    /**
     * Display a listing of the AdresseHome.
     */
    public function index(Request $request)
    {
        $adresseHomes = $this->adresseHomeRepository->paginate(10);

        return view('dashboard.adresse_homes.index')
            ->with('adresseHomes', $adresseHomes);
    }

    /**
     * Show the form for creating a new AdresseHome.
     */
    public function create()
    {
        return view('dashboard.adresse_homes.create');
    }

    /**
     * Store a newly created AdresseHome in storage.
     */
    public function store(CreateAdresseHomeRequest $request)
    {
        $input = $request->all();

        $adresseHome = $this->adresseHomeRepository->create($input);

        Flash::success('Adresse Home saved successfully.');

        return redirect(route('dashboard.adresseHomes.index'));
    }

    /**
     * Display the specified AdresseHome.
     */
    public function show($id)
    {
        $adresseHome = $this->adresseHomeRepository->find($id);

        if (empty($adresseHome)) {
            Flash::error('Adresse Home not found');

            return redirect(route('dashboard.adresseHomes.index'));
        }

        return view('dashboard.adresse_homes.show')->with('adresseHome', $adresseHome);
    }

    /**
     * Show the form for editing the specified AdresseHome.
     */
    public function edit($id)
    {
        $adresseHome = $this->adresseHomeRepository->find($id);

        if (empty($adresseHome)) {
            Flash::error('Adresse Home not found');

            return redirect(route('dashboard.adresseHomes.index'));
        }

        return view('dashboard.adresse_homes.edit')->with('adresseHome', $adresseHome);
    }

    /**
     * Update the specified AdresseHome in storage.
     */
    public function update($id, UpdateAdresseHomeRequest $request)
    {
        $adresseHome = $this->adresseHomeRepository->find($id);

        if (empty($adresseHome)) {
            Flash::error('Adresse Home not found');

            return redirect(route('dashboard.adresseHomes.index'));
        }

        $adresseHome = $this->adresseHomeRepository->update($request->all(), $id);

        Flash::success('Adresse Home updated successfully.');

        return redirect(route('dashboard.adresseHomes.index'));
    }

    /**
     * Remove the specified AdresseHome from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $adresseHome = $this->adresseHomeRepository->find($id);

        if (empty($adresseHome)) {
            Flash::error('Adresse Home not found');

            return redirect(route('dashboard.adresseHomes.index'));
        }

        $this->adresseHomeRepository->delete($id);

        Flash::success('Adresse Home deleted successfully.');

        return redirect(route('dashboard.adresseHomes.index'));
    }
}
