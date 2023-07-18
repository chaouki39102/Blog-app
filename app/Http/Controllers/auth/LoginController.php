<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        $title = __('Login');
        return view('front.auth.login.index', compact('title'));
    }

    public function store(StoreLoginRequest $request)
    {
      Auth::attempt($request->only(['email','password'], $request->get('remeber',false)));
      return redirect()->intended();
    }
}
