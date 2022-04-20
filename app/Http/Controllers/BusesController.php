<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusesRequest;
use App\Http\Requests\UpdateBusesRequest;
use App\Repositories\BusesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BusesController extends AppBaseController
{
    /** @var BusesRepository $busesRepository*/
    private $busesRepository;

    public function __construct(BusesRepository $busesRepo)
    {
        $this->busesRepository = $busesRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Buses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $buses = $this->busesRepository->all();

        return view('buses.index')
            ->with('buses', $buses);
    }

    /**
     * Show the form for creating a new Buses.
     *
     * @return Response
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created Buses in storage.
     *
     * @param CreateBusesRequest $request
     *
     * @return Response
     */
    public function store(CreateBusesRequest $request)
    {
        $input = $request->all();

        $buses = $this->busesRepository->create($input);

        Flash::success('Buses saved successfully.');

        return redirect(route('buses.index'));
    }

    /**
     * Display the specified Buses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buses = $this->busesRepository->find($id);

        if (empty($buses)) {
            Flash::error('Buses not found');

            return redirect(route('buses.index'));
        }

        return view('buses.show')->with('buses', $buses);
    }

    /**
     * Show the form for editing the specified Buses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buses = $this->busesRepository->find($id);

        if (empty($buses)) {
            Flash::error('Buses not found');

            return redirect(route('buses.index'));
        }

        return view('buses.edit')->with('buses', $buses);
    }

    /**
     * Update the specified Buses in storage.
     *
     * @param int $id
     * @param UpdateBusesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusesRequest $request)
    {
        $buses = $this->busesRepository->find($id);

        if (empty($buses)) {
            Flash::error('Buses not found');

            return redirect(route('buses.index'));
        }

        $buses = $this->busesRepository->update($request->all(), $id);

        Flash::success('Buses updated successfully.');

        return redirect(route('buses.index'));
    }

    /**
     * Remove the specified Buses from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buses = $this->busesRepository->find($id);

        if (empty($buses)) {
            Flash::error('Buses not found');

            return redirect(route('buses.index'));
        }

        $this->busesRepository->delete($id);

        Flash::success('Buses deleted successfully.');

        return redirect(route('buses.index'));
    }
}
