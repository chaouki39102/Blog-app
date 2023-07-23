<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GetFileController extends Controller
{
    function __invoke(Request $request)
    {
        // return = Storage::response($request->query());
    }
}
