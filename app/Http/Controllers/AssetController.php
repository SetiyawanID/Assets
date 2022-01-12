<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Brand;
use App\Exports\AssetsExportMapping;
use App\Location;
use App\Type;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::with(['user', 'brand', 'location', 'typeAsset'])->get();  
        return view('pages.admin.asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $locations = Location::all();
        $users = User::all();
        $types = Type::all();

        return view('pages.admin.asset.create', [
            'brands' => $brands,
            'locations' => $locations,
            'users' => $users,
            'types' => $types
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
            'location_id' => 'required',
            'serial_number' => 'required|unique:assets',
            'type_id' => 'required',
            'cost' => 'required',
            'purchase_date' => 'required',
            'warranty' => 'required',
            'description' => 'required',
        ]);

        $attr['asset_tag'] = "TTN/ASSETS/" . strtoupper(\Str::random(5));

        $asset = Asset::create($attr);

        return redirect()->route('asset.index')->with('success', "Data <b>" . $asset->name . "</b> successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        return view('pages.admin.asset.show',compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $brands = Brand::all();
        $locations = Location::all();
        $users = User::all();
        $types = Type::all();

        return view('pages.admin.asset.edit', [
            'brands' => $brands,
            'locations' => $locations,
            'users' => $users,
            'types' => $types,
            'asset' => $asset,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        $attr = $request->validate([
            'name' => 'required|min:5|max:50',
            'user_id' => 'required',
            'brand_id' => 'required',
            'location_id' => 'required',
            'serial_number' => 'required',
            'type_id' => 'required',
            'cost' => 'required',
            'purchase_date' => 'required',
            'warranty' => 'required',
            'description' => 'required',
        ]);

        $asset->update($attr);

        return redirect()->route('asset.index')->with('success', "Data <b>" . $asset->name . "</b> successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $old_name = $asset->name;
        $asset->delete();

        return redirect()->route('asset.index')->with('success', "Data <b>" . $old_name . "</b> successfully deleted");
    }

    public function assetPrint(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $assets = Asset::whereBetween('purchase_date', [$start_date, $end_date])->get();

        $pdf = PDF::loadView('pages.admin.asset.print', [
            'assets' => $assets,
            'start_date' => $start_date,
            'end_date' => $end_date
        ])->setPaper('a4', 'landscape');

        return $pdf->download('recap_assets.pdf');
    }

    public function export_mapping()
    {
        return Excel::download(new AssetsExportMapping(), 'assets_mapping.xlsx');
    }
}
