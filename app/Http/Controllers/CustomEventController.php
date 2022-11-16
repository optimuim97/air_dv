<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomEventRequest;
use App\Http\Requests\UpdateCustomEventRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CustomEventRepository;
use Illuminate\Http\Request;
use Flash;

class CustomEventController extends AppBaseController
{
    /** @var CustomEventRepository $customEventRepository*/
    private $customEventRepository;

    public function __construct(CustomEventRepository $customEventRepo)
    {
        $this->customEventRepository = $customEventRepo;
    }

    /**
     * Display a listing of the CustomEvent.
     */
    public function index(Request $request)
    {
        $customEvents = $this->customEventRepository->paginate(10);

        return view('dashboard.custom_events.index')
            ->with('customEvents', $customEvents);
    }

    /**
     * Show the form for creating a new CustomEvent.
     */
    public function create()
    {
        return view('dashboard.custom_events.create');
    }

    /**
     * Store a newly created CustomEvent in storage.
     */
    public function store(CreateCustomEventRequest $request)
    {
        $input = $request->all();

        $customEvent = $this->customEventRepository->create($input);

        Flash::success('Custom Event saved successfully.');

        return redirect(route('dashboard.customEvents.index'));
    }

    /**
     * Display the specified CustomEvent.
     */
    public function show($id)
    {
        $customEvent = $this->customEventRepository->find($id);

        if (empty($customEvent)) {
            Flash::error('Custom Event not found');

            return redirect(route('dashboard.customEvents.index'));
        }

        return view('dashboard.custom_events.show')->with('customEvent', $customEvent);
    }

    /**
     * Show the form for editing the specified CustomEvent.
     */
    public function edit($id)
    {
        $customEvent = $this->customEventRepository->find($id);

        if (empty($customEvent)) {
            Flash::error('Custom Event not found');

            return redirect(route('dashboard.customEvents.index'));
        }

        return view('dashboard.custom_events.edit')->with('customEvent', $customEvent);
    }

    /**
     * Update the specified CustomEvent in storage.
     */
    public function update($id, UpdateCustomEventRequest $request)
    {
        $customEvent = $this->customEventRepository->find($id);

        if (empty($customEvent)) {
            Flash::error('Custom Event not found');

            return redirect(route('dashboard.customEvents.index'));
        }

        $customEvent = $this->customEventRepository->update($request->all(), $id);

        Flash::success('Custom Event updated successfully.');

        return redirect(route('dashboard.customEvents.index'));
    }

    /**
     * Remove the specified CustomEvent from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customEvent = $this->customEventRepository->find($id);

        if (empty($customEvent)) {
            Flash::error('Custom Event not found');

            return redirect(route('dashboard.customEvents.index'));
        }

        $this->customEventRepository->delete($id);

        Flash::success('Custom Event deleted successfully.');

        return redirect(route('dashboard.customEvents.index'));
    }
}
