<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class DownloadController extends Controller
{
    public function downloadRequest()
    {
        $filepath = public_path('download/request.pdf');
        return Response::download($filepath); 
    }
}
