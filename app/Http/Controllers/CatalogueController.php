<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatalogueRequest;
use App\Http\Requests\UpdateCatalogueRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CatalogueRepository;
use Illuminate\Http\Request;
use Flash;

class CatalogueController extends AppBaseController
{
    /** @var CatalogueRepository $catalogueRepository*/
    private $catalogueRepository;

    public function __construct(CatalogueRepository $catalogueRepo)
    {
        $this->catalogueRepository = $catalogueRepo;
    }

    /**
     * Display a listing of the Catalogue.
     */
    public function index(Request $request)
    {
        $catalogues = $this->catalogueRepository->paginate(10);

        return view('catalogues.index')
            ->with('catalogues', $catalogues);
    }

    /**
     * Show the form for creating a new Catalogue.
     */
    public function create()
    {
        return view('catalogues.create');
    }

    /**
     * Store a newly created Catalogue in storage.
     */
    public function store(CreateCatalogueRequest $request)
    {
        $input = $request->all();

        $catalogue = $this->catalogueRepository->create($input);

        Flash::success('Catalogue saved successfully.');

        return redirect(route('catalogues.index'));
    }

    /**
     * Display the specified Catalogue.
     */
    public function show($id)
    {
        $catalogue = $this->catalogueRepository->find($id);

        if (empty($catalogue)) {
            Flash::error('Catalogue not found');

            return redirect(route('catalogues.index'));
        }

        return view('catalogues.show')->with('catalogue', $catalogue);
    }

    /**
     * Show the form for editing the specified Catalogue.
     */
    public function edit($id)
    {
        $catalogue = $this->catalogueRepository->find($id);

        if (empty($catalogue)) {
            Flash::error('Catalogue not found');

            return redirect(route('catalogues.index'));
        }

        return view('catalogues.edit')->with('catalogue', $catalogue);
    }

    /**
     * Update the specified Catalogue in storage.
     */
    public function update($id, UpdateCatalogueRequest $request)
    {
        $catalogue = $this->catalogueRepository->find($id);

        if (empty($catalogue)) {
            Flash::error('Catalogue not found');

            return redirect(route('catalogues.index'));
        }

        $catalogue = $this->catalogueRepository->update($request->all(), $id);

        Flash::success('Catalogue updated successfully.');

        return redirect(route('catalogues.index'));
    }

    /**
     * Remove the specified Catalogue from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catalogue = $this->catalogueRepository->find($id);

        if (empty($catalogue)) {
            Flash::error('Catalogue not found');

            return redirect(route('catalogues.index'));
        }

        $this->catalogueRepository->delete($id);

        Flash::success('Catalogue deleted successfully.');

        return redirect(route('catalogues.index'));
    }
}
