<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;

class MyLicenseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $licenses = License::where('user_id', $id)->get();
        return view('pages.admin.my-license.index', compact('licenses'));
    }
}
