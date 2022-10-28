<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassRequest;
use App\Http\Requests\UpdateClassRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClassRepository;
use Illuminate\Http\Request;
use Flash;

class ClassController extends AppBaseController
{
    /** @var ClassRepository $classRepository*/
    private $classRepository;

    public function __construct(ClassRepository $classRepo)
    {
        $this->classRepository = $classRepo;
    }

    /**
     * Display a listing of the Class.
     */
    public function index(Request $request)
    {
        $classes = $this->classRepository->paginate(10);

        return view('classes.index')
            ->with('classes', $classes);
    }

    /**
     * Show the form for creating a new Class.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created Class in storage.
     */
    public function store(CreateClassRequest $request)
    {
        $input = $request->all();

        $class = $this->classRepository->create($input);

        session()->Flash::success('Class saved successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified Class.
     */
    public function show($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            session()->Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('class', $class);
    }

    /**
     * Show the form for editing the specified Class.
     */
    public function edit($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            session()->Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('class', $class);
    }

    /**
     * Update the specified Class in storage.
     */
    public function update($id, UpdateClassRequest $request)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            session()-> Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        $class = $this->classRepository->update($request->all(), $id);

        session()->Flash::success('Class updated successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified Class from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            session()->Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        $this->classRepository->delete($id);

        session()->Flash::success('Class deleted successfully.');

        return redirect(route('classes.index'));
    }
}
