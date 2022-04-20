<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookingsRequest;
use App\Http\Requests\UpdateBookingsRequest;
use App\Repositories\BookingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BookingsController extends AppBaseController
{
    /** @var BookingsRepository $bookingsRepository*/
    private $bookingsRepository;

    public function __construct(BookingsRepository $bookingsRepo)
    {
        $this->bookingsRepository = $bookingsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Bookings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bookings = $this->bookingsRepository->all();

        return view('bookings.index')
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new Bookings.
     *
     * @return Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created Bookings in storage.
     *
     * @param CreateBookingsRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingsRequest $request)
    {
        $input = $request->all();

        $bookings = $this->bookingsRepository->create($input);

        Flash::success('Bookings saved successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified Bookings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bookings = $this->bookingsRepository->find($id);

        if (empty($bookings)) {
            Flash::error('Bookings not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.show')->with('bookings', $bookings);
    }

    /**
     * Show the form for editing the specified Bookings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bookings = $this->bookingsRepository->find($id);

        if (empty($bookings)) {
            Flash::error('Bookings not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.edit')->with('bookings', $bookings);
    }

    /**
     * Update the specified Bookings in storage.
     *
     * @param int $id
     * @param UpdateBookingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingsRequest $request)
    {
        $bookings = $this->bookingsRepository->find($id);

        if (empty($bookings)) {
            Flash::error('Bookings not found');

            return redirect(route('bookings.index'));
        }

        $bookings = $this->bookingsRepository->update($request->all(), $id);

        Flash::success('Bookings updated successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified Bookings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bookings = $this->bookingsRepository->find($id);

        if (empty($bookings)) {
            Flash::error('Bookings not found');

            return redirect(route('bookings.index'));
        }

        $this->bookingsRepository->delete($id);

        Flash::success('Bookings deleted successfully.');

        return redirect(route('bookings.index'));
    }
}
