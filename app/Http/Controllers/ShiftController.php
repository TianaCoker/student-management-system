<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShiftRequest;
use App\Http\Requests\UpdateShiftRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ShiftRepository;
use Illuminate\Http\Request;
use Flash;

class ShiftController extends AppBaseController
{
    /** @var ShiftRepository $shiftRepository*/
    private $shiftRepository;

    public function __construct(ShiftRepository $shiftRepo)
    {
        $this->shiftRepository = $shiftRepo;
    }

    /**
     * Display a listing of the Shift.
     */
    public function index(Request $request)
    {
        $shifts = $this->shiftRepository->paginate(10);

        return view('shifts.index')
            ->with('shifts', $shifts);
    }

    /**
     * Show the form for creating a new Shift.
     */
    public function create()
    {
        return view('shifts.create');
    }

    /**
     * Store a newly created Shift in storage.
     */
    public function store(CreateShiftRequest $request)
    {
        $input = $request->all();

        $shift = $this->shiftRepository->create($input);

        Flash::success('Shift saved successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Display the specified Shift.
     */
    public function show($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.show')->with('shift', $shift);
    }

    /**
     * Show the form for editing the specified Shift.
     */
    public function edit($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.edit')->with('shift', $shift);
    }

    /**
     * Update the specified Shift in storage.
     */
    public function update($id, UpdateShiftRequest $request)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        $shift = $this->shiftRepository->update($request->all(), $id);

        Flash::success('Shift updated successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Remove the specified Shift from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        $this->shiftRepository->delete($id);

        Flash::success('Shift deleted successfully.');

        return redirect(route('shifts.index'));
    }
}
