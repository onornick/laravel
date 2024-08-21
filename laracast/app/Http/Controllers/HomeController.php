<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This defines a single route

    public function __invoke() {
        return view('blog.home');
    }
}
