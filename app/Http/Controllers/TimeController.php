<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTimeRequest;
use App\Http\Requests\UpdateTimeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TimeRepository;
use Illuminate\Http\Request;
use Flash;

class TimeController extends AppBaseController
{
    /** @var TimeRepository $timeRepository*/
    private $timeRepository;

    public function __construct(TimeRepository $timeRepo)
    {
        $this->timeRepository = $timeRepo;
    }

    /**
     * Display a listing of the Time.
     */
    public function index(Request $request)
    {
        $times = $this->timeRepository->paginate(10);

        return view('times.index')
            ->with('times', $times);
    }

    /**
     * Show the form for creating a new Time.
     */
    public function create()
    {
        return view('times.create');
    }

    /**
     * Store a newly created Time in storage.
     */
    public function store(CreateTimeRequest $request)
    {
        $input = $request->all();

        $time = $this->timeRepository->create($input);

        Flash::success('Time saved successfully.');

        return redirect(route('times.index'));
    }

    /**
     * Display the specified Time.
     */
    public function show($id)
    {
        $time = $this->timeRepository->find($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        return view('times.show')->with('time', $time);
    }

    /**
     * Show the form for editing the specified Time.
     */
    public function edit($id)
    {
        $time = $this->timeRepository->find($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        return view('times.edit')->with('time', $time);
    }

    /**
     * Update the specified Time in storage.
     */
    public function update($id, UpdateTimeRequest $request)
    {
        $time = $this->timeRepository->find($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        $time = $this->timeRepository->update($request->all(), $id);

        Flash::success('Time updated successfully.');

        return redirect(route('times.index'));
    }

    /**
     * Remove the specified Time from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $time = $this->timeRepository->find($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        $this->timeRepository->delete($id);

        Flash::success('Time deleted successfully.');

        return redirect(route('times.index'));
    }
}
