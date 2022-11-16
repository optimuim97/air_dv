<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatalogRequest;
use App\Http\Requests\UpdateCatalogRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CatalogRepository;
use Illuminate\Http\Request;
use Flash;

class CatalogController extends AppBaseController
{
    /** @var CatalogRepository $catalogRepository*/
    private $catalogRepository;

    public function __construct(CatalogRepository $catalogRepo)
    {
        $this->catalogRepository = $catalogRepo;
    }

    /**
     * Display a listing of the Catalog.
     */
    public function index(Request $request)
    {
        $catalogs = $this->catalogRepository->paginate(10);

        return view('dashboard.catalogs.index')
            ->with('catalogs', $catalogs);
    }

    /**
     * Show the form for creating a new Catalog.
     */
    public function create()
    {
        return view('dashboard.catalogs.create');
    }

    /**
     * Store a newly created Catalog in storage.
     */
    public function store(CreateCatalogRequest $request)
    {
        $input = $request->all();

        $catalog = $this->catalogRepository->create($input);

        Flash::success('Catalog saved successfully.');

        return redirect(route('dashboard.catalogs.index'));
    }

    /**
     * Display the specified Catalog.
     */
    public function show($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('dashboard.catalogs.index'));
        }

        return view('dashboard.catalogs.show')->with('catalog', $catalog);
    }

    /**
     * Show the form for editing the specified Catalog.
     */
    public function edit($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('dashboard.catalogs.index'));
        }

        return view('dashboard.catalogs.edit')->with('catalog', $catalog);
    }

    /**
     * Update the specified Catalog in storage.
     */
    public function update($id, UpdateCatalogRequest $request)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('dashboard.catalogs.index'));
        }

        $catalog = $this->catalogRepository->update($request->all(), $id);

        Flash::success('Catalog updated successfully.');

        return redirect(route('dashboard.catalogs.index'));
    }

    /**
     * Remove the specified Catalog from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('dashboard.catalogs.index'));
        }

        $this->catalogRepository->delete($id);

        Flash::success('Catalog deleted successfully.');

        return redirect(route('dashboard.catalogs.index'));
    }
}
