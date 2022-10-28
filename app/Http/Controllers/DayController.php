<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDayRequest;
use App\Http\Requests\UpdateDayRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DayRepository;
use Illuminate\Http\Request;
use Flash;

class DayController extends AppBaseController
{
    /** @var DayRepository $dayRepository*/
    private $dayRepository;

    public function __construct(DayRepository $dayRepo)
    {
        $this->dayRepository = $dayRepo;
    }

    /**
     * Display a listing of the Day.
     */
    public function index(Request $request)
    {
        $days = $this->dayRepository->paginate(10);

        return view('days.index')
            ->with('days', $days);
    }

    /**
     * Show the form for creating a new Day.
     */
    public function create()
    {
        return view('days.create');
    }

    /**
     * Store a newly created Day in storage.
     */
    public function store(CreateDayRequest $request)
    {
        $input = $request->all();

        $day = $this->dayRepository->create($input);

        Flash::success('Day saved successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Display the specified Day.
     */
    public function show($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        return view('days.show')->with('day', $day);
    }

    /**
     * Show the form for editing the specified Day.
     */
    public function edit($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        return view('days.edit')->with('day', $day);
    }

    /**
     * Update the specified Day in storage.
     */
    public function update($id, UpdateDayRequest $request)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        $day = $this->dayRepository->update($request->all(), $id);

        Flash::success('Day updated successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Remove the specified Day from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        $this->dayRepository->delete($id);

        Flash::success('Day deleted successfully.');

        return redirect(route('days.index'));
    }
}
