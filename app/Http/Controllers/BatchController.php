<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BatchRepository;
use Illuminate\Http\Request;
use Flash;

class BatchController extends AppBaseController
{
    /** @var BatchRepository $batchRepository*/
    private $batchRepository;

    public function __construct(BatchRepository $batchRepo)
    {
        $this->batchRepository = $batchRepo;
    }

    /**
     * Display a listing of the Batch.
     */
    public function index(Request $request)
    {
        $batches = $this->batchRepository->paginate(10);

        return view('batches.index')
            ->with('batches', $batches);
    }

    /**
     * Show the form for creating a new Batch.
     */
    public function create()
    {
        return view('batches.create');
    }

    /**
     * Store a newly created Batch in storage.
     */
    public function store(CreateBatchRequest $request)
    {
        $input = $request->all();

        $batch = $this->batchRepository->create($input);

        Flash::success('Batch saved successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Display the specified Batch.
     */
    public function show($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        return view('batches.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified Batch.
     */
    public function edit($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        return view('batches.edit')->with('batch', $batch);
    }

    /**
     * Update the specified Batch in storage.
     */
    public function update($id, UpdateBatchRequest $request)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        $batch = $this->batchRepository->update($request->all(), $id);

        Flash::success('Batch updated successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Remove the specified Batch from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        $this->batchRepository->delete($id);

        Flash::success('Batch deleted successfully.');

        return redirect(route('batches.index'));
    }
}
