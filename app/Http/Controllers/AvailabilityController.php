<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvailabilityRequest;
use App\Http\Requests\UpdateAvailabilityRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AvailabilityRepository;
use Illuminate\Http\Request;
use Flash;

class AvailabilityController extends AppBaseController
{
    /** @var AvailabilityRepository $availabilityRepository*/
    private $availabilityRepository;

    public function __construct(AvailabilityRepository $availabilityRepo)
    {
        $this->availabilityRepository = $availabilityRepo;
    }

    /**
     * Display a listing of the Availability.
     */
    public function index(Request $request)
    {
        $availabilities = $this->availabilityRepository->paginate(10);

        return view('availabilities.index')
            ->with('availabilities', $availabilities);
    }

    /**
     * Show the form for creating a new Availability.
     */
    public function create()
    {
        return view('availabilities.create');
    }

    /**
     * Store a newly created Availability in storage.
     */
    public function store(CreateAvailabilityRequest $request)
    {
        $input = $request->all();

        $availability = $this->availabilityRepository->create($input);

        Flash::success('Availability saved successfully.');

        return redirect(route('availabilities.index'));
    }

    /**
     * Display the specified Availability.
     */
    public function show($id)
    {
        $availability = $this->availabilityRepository->find($id);

        if (empty($availability)) {
            Flash::error('Availability not found');

            return redirect(route('availabilities.index'));
        }

        return view('availabilities.show')->with('availability', $availability);
    }

    /**
     * Show the form for editing the specified Availability.
     */
    public function edit($id)
    {
        $availability = $this->availabilityRepository->find($id);

        if (empty($availability)) {
            Flash::error('Availability not found');

            return redirect(route('availabilities.index'));
        }

        return view('availabilities.edit')->with('availability', $availability);
    }

    /**
     * Update the specified Availability in storage.
     */
    public function update($id, UpdateAvailabilityRequest $request)
    {
        $availability = $this->availabilityRepository->find($id);

        if (empty($availability)) {
            Flash::error('Availability not found');

            return redirect(route('availabilities.index'));
        }

        $availability = $this->availabilityRepository->update($request->all(), $id);

        Flash::success('Availability updated successfully.');

        return redirect(route('availabilities.index'));
    }

    /**
     * Remove the specified Availability from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $availability = $this->availabilityRepository->find($id);

        if (empty($availability)) {
            Flash::error('Availability not found');

            return redirect(route('availabilities.index'));
        }

        $this->availabilityRepository->delete($id);

        Flash::success('Availability deleted successfully.');

        return redirect(route('availabilities.index'));
    }
}
