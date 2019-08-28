<?php

namespace App\Http\Controllers;

use App\student_model;
use Illuminate\Http\Request;

class lophocController extends Controller
{
    public function all()
    {
        $student = student_model::all();
        return view('list', compact(['student']));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new student_model();
        $student->tenlop = $request->tenlop;
        $student->chitiet = $request->chitiet;
        $student->save();
        return redirect('list');

    }

    public function edit($id)
    {
        $student = student_model::findOrFail($id);

        return view('update', compact(['student']));

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $student = student_model::findOrFail($id);
        $student->tenlop = $request->tenlop;
        $student->chitiet = $request->chitiet;
        $student->save();
        return redirect('list');
    }

    public function delete($id)
    {
        $student = student_model::find($id);
        $student->delete();
        return redirect('list');
    }
}
