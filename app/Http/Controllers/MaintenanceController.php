<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Maintenance;
use App\Vendor;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenances = Maintenance::with(['asset', 'vendor'])->get();
        return view('pages.admin.maintenance.index', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        $assets = Asset::all();

        return view('pages.admin.maintenance.create', compact('vendors', 'assets'));
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
            'asset_id' => 'required|integer',
            'vendor_id' => 'required|integer',
            'problem' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);

         Maintenance::create($attr);

        return redirect()->route('maintenance.index')->with('success', "Data successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        return view('pages.admin.maintenance.edit', compact('maintenance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        $attr = $request->validate([
            'status' => 'required',
            'description' => 'required'
        ]);

        $maintenance->update($attr);

        return redirect()->route('maintenance.index')->with('success', "Data successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();

        return redirect()->route('maintenance.index')->with('success', "Data successfully deleted!");
    }
}
