<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $title = __('Sing up');
        return view('front.auth.register.index', compact('title'));
    }
}
