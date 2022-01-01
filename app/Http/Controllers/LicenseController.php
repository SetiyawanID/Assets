<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Exports\LicenseExportMapping;
use App\License;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = License::with(['user', 'brand'])->get();  
        return view('pages.admin.license.index', compact('licenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $users = User::all();

        return view('pages.admin.license.create', [
            'brands' => $brands,
            'users' => $users,
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
            'name' => 'required|min:5|max:50',
            'user_id' => 'required',
            'brand_id' => 'required',
            'license_number' => 'required|min:16|max:36',
            'purchase_date' => 'required',
            'description' => 'required',
        ]);

        $license = License::create($attr);

        return redirect()->route('license.index')->with('success', "Data <b>" . $license->name . "</b> successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function show(License $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        $brands = Brand::all();
        $users = User::all();

        return view('pages.admin.license.edit', [
            'brands' => $brands,
            'users' => $users,
            'license' => $license
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {
        $attr = $request->validate([
            'name' => 'required|min:5|max:50',
            'user_id' => 'required',
            'brand_id' => 'required',
            'license_number' => 'required|min:16|max:36',
            'purchase_date' => 'required',
            'description' => 'required',
        ]);

        $license->update($attr);

        return redirect()->route('license.index')->with('success', "Data <b>" . $license->name . "</b> successfully added!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
        $old_name = $license->name;
        $license->delete();

        return redirect()->route('license.index')->with('success', "Data <b>" . $old_name . "</b> successfully deleted");
    }

    public function licensePrint(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $licenses = License::whereBetween('purchase_date', [$start_date, $end_date])->get();

        $pdf = PDF::loadView('pages.admin.license.print', [
            'licenses' => $licenses,
            'start_date' => $start_date,
            'end_date' => $end_date
        ])->setPaper('a4', 'landscape');

        return $pdf->download('recap_licenses.pdf');
    }

    public function export_mapping()
    {
        return Excel::download(new LicenseExportMapping, 'license_mapping.xlsx');
    }
}
