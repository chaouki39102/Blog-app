<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $faq = Faq::get();
        $posts = Post::get();
        return view('front.home.index', compact('faq','posts'));
    }
}
