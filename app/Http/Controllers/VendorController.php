<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendorRequest;
use App\Vendor;
use Illuminate\Http\Request;
use PDF;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::latest()->get();
        return view('pages.admin.vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorRequest $request)
    {
        $attr = $request->validated();

        $vendor = Vendor::create($attr);

        return redirect()->route('vendor.index')->with('success', "Vendor : <b>" . $vendor->name . "</b> successfully added!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('pages.admin.vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(VendorRequest $request, Vendor $vendor)
    {
        $attr = $request->validated();

        $vendor->update($attr);

        return redirect()->route('vendor.index')->with('success', "Vendor : <b>" . $vendor->name . "</b> successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $old_name = $vendor->name;
        $vendor->delete();

        return redirect()->route('vendor.index')->with('success', "Vendor : <b>" . $old_name . "</b> successfully deleted");
    }

    public function vendorPrint()
    {
        $vendors = Vendor::all();

        $pdf = PDF::loadView('pages.admin.vendor.print', [
            'vendors' => $vendors,
        ])->setPaper('a4', 'landscape');

        return $pdf->download('recap_vendors.pdf');
    }
}
