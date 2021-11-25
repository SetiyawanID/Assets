<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::latest()->get();
        return view('pages.admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|min:5|max:25',
            'description' => 'required|min:5'
        ]);

        $department = Department::create($attr);

        return redirect()->route('department.index')->with('success', "Data <b>" . $department->name . "</b> successfully added!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('pages.admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $attr = $request->validate([
            'name' => 'required|min:5|max:25',
            'description' => 'required|min:5'
        ]);

        $department->update($attr);

        return redirect()->route('department.index')->with('success', "Data <b>" . $department->name . "</b> successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $old_name = $department->name;
        $department->delete();

        return redirect()->route('department.index')->with('success', "Data <b>" . $old_name . "</b> berhasil di hapus");

    }
}
