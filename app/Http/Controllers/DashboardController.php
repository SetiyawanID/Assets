<?php

namespace App\Http\Controllers;

use App\Asset;
use App\License;
use App\Maintenance;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $employee = User::all()->count();
        $maintenance = Maintenance::all()->count();
        $license = License::all()->count(); 
        $asset = Asset::all()->count();

        $myAsset = Asset::where('user_id', Auth::user()->id)->count();
        $myLicense = License::where('user_id', Auth::user()->id)->count();
        $myMaintenance = DB::table('maintenances')
            ->join('assets', 'assets.id', '=', 'maintenances.asset_id')
            ->join('users', 'users.id', '=', 'assets.user_id')
            ->select('assets.*')->where('user_id', Auth::user()->id)
            ->count();

        return view('pages.admin.dashboard.index', [
            'employee' => $employee,
            'license' => $license,
            'maintenance' => $maintenance,
            'asset' => $asset,
            'myAsset' => $myAsset,
            'myLicense' => $myLicense,
            'myMaintenance' => $myMaintenance
        ]);
    }
}
