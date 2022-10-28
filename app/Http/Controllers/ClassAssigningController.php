<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassAssigningRequest;
use App\Http\Requests\UpdateClassAssigningRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClassAssigningRepository;
use Illuminate\Http\Request;
use Flash;

class ClassAssigningController extends AppBaseController
{
    /** @var ClassAssigningRepository $classAssigningRepository*/
    private $classAssigningRepository;

    public function __construct(ClassAssigningRepository $classAssigningRepo)
    {
        $this->classAssigningRepository = $classAssigningRepo;
    }

    /**
     * Display a listing of the ClassAssigning.
     */
    public function index(Request $request)
    {
        $classAssignings = $this->classAssigningRepository->paginate(10);

        return view('class_assignings.index')
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new ClassAssigning.
     */
    public function create()
    {
        return view('class_assignings.create');
    }

    /**
     * Store a newly created ClassAssigning in storage.
     */
    public function store(CreateClassAssigningRequest $request)
    {
        $input = $request->all();

        $classAssigning = $this->classAssigningRepository->create($input);

        Flash::success('Class Assigning saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified ClassAssigning.
     */
    public function show($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssigning', $classAssigning);
    }

    /**
     * Show the form for editing the specified ClassAssigning.
     */
    public function edit($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssigning', $classAssigning);
    }

    /**
     * Update the specified ClassAssigning in storage.
     */
    public function update($id, UpdateClassAssigningRequest $request)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssigning = $this->classAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified ClassAssigning from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}
