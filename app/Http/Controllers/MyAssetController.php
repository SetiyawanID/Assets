<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;

class MyAssetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $assets = Asset::where('user_id', $id)->get();
        return view('pages.admin.my-asset.index', compact('assets'));
        
    }
}
