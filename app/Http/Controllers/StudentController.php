<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Student::create($data);
        return redirect()->route('student.index');
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }


    public function update(Student $student, UpdateRequest $request)
    {
        $data = $request->validated();
        $student->update($data);
        return redirect()->route('student.show', $student->id);
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
