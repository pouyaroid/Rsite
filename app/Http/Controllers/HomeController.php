<?php

namespace App\Http\Controllers;

use App\Models\HeroBanner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = HeroBanner::first();

        return view('index',compact('hero'));
    }
}
