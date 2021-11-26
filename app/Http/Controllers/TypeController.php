<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::latest()->get();
        return view('pages.admin.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        $attr = $request->validated();

        $type = Type::create($attr);

        return redirect()->route('type.index')->with('success', "Data <b>" . $type->name . "</b> successfully added!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('pages.admin.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(TypeRequest $request, Type $type)
    {
        $attr = $request->validated();

        $type->update($attr);

        return redirect()->route('type.index')->with('success', "Data <b>" . $type->name . "</b> successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $old_name = $type->name;
        $type->delete();

        return redirect()->route('type.index')->with('success', "Data <b>" . $old_name . "</b> successfully deleted");
    }
}
