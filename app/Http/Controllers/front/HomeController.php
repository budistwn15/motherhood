<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('front.home');
    }
}
