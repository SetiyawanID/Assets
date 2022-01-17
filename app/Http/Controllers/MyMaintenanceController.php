<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Http\Request;
use App\Asset;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MyMaintenanceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        // $maintenances = Maintenance::where('asset_id', $id)->get();

        // $maintenances = Maintenance::with(['asset', 'vendor'])->get();

        $maintenances = DB::table('maintenances')
            ->join('assets', 'assets.id', '=', 'maintenances.asset_id')
            ->join('users', 'users.id', '=', 'assets.user_id')
            ->select('assets.*')->where('user_id', Auth::user()->id)
            ->get();

        return view('pages.admin.my-maintenance.index', compact('maintenances'));
    }
}
