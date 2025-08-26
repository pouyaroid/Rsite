<?php

namespace App\Http\Controllers;

use App\Models\HeroBanner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = HeroBanner::first();
        $services = Service::latest()->take(6)->get();

        return view('index',compact('hero','services'));
    }
}
