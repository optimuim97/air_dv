<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAddressDeskRequest;
use App\Http\Requests\UpdateAddressDeskRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AddressDeskRepository;
use Illuminate\Http\Request;
use Flash;

class AddressDeskController extends AppBaseController
{
    /** @var AddressDeskRepository $addressDeskRepository*/
    private $addressDeskRepository;

    public function __construct(AddressDeskRepository $addressDeskRepo)
    {
        $this->addressDeskRepository = $addressDeskRepo;
    }

    /**
     * Display a listing of the AddressDesk.
     */
    public function index(Request $request)
    {
        $addressDesks = $this->addressDeskRepository->paginate(10);

        return view('dashboard.address_desks.index')
            ->with('addressDesks', $addressDesks);
    }

    /**
     * Show the form for creating a new AddressDesk.
     */
    public function create()
    {
        return view('dashboard.address_desks.create');
    }

    /**
     * Store a newly created AddressDesk in storage.
     */
    public function store(CreateAddressDeskRequest $request)
    {
        $input = $request->all();

        $addressDesk = $this->addressDeskRepository->create($input);

        Flash::success('Address Desk saved successfully.');

        return redirect(route('dashboard.addressDesks.index'));
    }

    /**
     * Display the specified AddressDesk.
     */
    public function show($id)
    {
        $addressDesk = $this->addressDeskRepository->find($id);

        if (empty($addressDesk)) {
            Flash::error('Address Desk not found');

            return redirect(route('dashboard.addressDesks.index'));
        }

        return view('dashboard.address_desks.show')->with('addressDesk', $addressDesk);
    }

    /**
     * Show the form for editing the specified AddressDesk.
     */
    public function edit($id)
    {
        $addressDesk = $this->addressDeskRepository->find($id);

        if (empty($addressDesk)) {
            Flash::error('Address Desk not found');

            return redirect(route('dashboard.addressDesks.index'));
        }

        return view('dashboard.address_desks.edit')->with('addressDesk', $addressDesk);
    }

    /**
     * Update the specified AddressDesk in storage.
     */
    public function update($id, UpdateAddressDeskRequest $request)
    {
        $addressDesk = $this->addressDeskRepository->find($id);

        if (empty($addressDesk)) {
            Flash::error('Address Desk not found');

            return redirect(route('dashboard.addressDesks.index'));
        }

        $addressDesk = $this->addressDeskRepository->update($request->all(), $id);

        Flash::success('Address Desk updated successfully.');

        return redirect(route('dashboard.addressDesks.index'));
    }

    /**
     * Remove the specified AddressDesk from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addressDesk = $this->addressDeskRepository->find($id);

        if (empty($addressDesk)) {
            Flash::error('Address Desk not found');

            return redirect(route('dashboard.addressDesks.index'));
        }

        $this->addressDeskRepository->delete($id);

        Flash::success('Address Desk deleted successfully.');

        return redirect(route('dashboard.addressDesks.index'));
    }
}
