<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use Illuminate\Http\Request;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();
        return view('pages.admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create', [
            'departments' => Department::get(),
        ]);
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
            'name' => 'required|min:5|max:50|string',
            'password' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|unique:users',
            'job_title' => 'required',
            'department_id' => 'required',
            'role' => 'required'
        ]);

        $attr['password'] = bcrypt($request->password);

        $user = User::create($attr);

        return redirect()->route('user.index')->with('success', "User <b>" . $user->name . "</b> successfully added!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $old_name = $user->name;
        $user->delete();

        return redirect()->route('user.index')->with('success', "User <b>" . $old_name . "</b> successfully deleted");
    }

    public function userPrint()
    {
        $users = User::all();

        $pdf = PDF::loadView('pages.admin.user.print', [
            'users' => $users,
        ])->setPaper('a4', 'landscape');

        return $pdf->download('recap_users.pdf');
    }
}
