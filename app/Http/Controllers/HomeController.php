<?php

namespace App\Http\Controllers;

use App\Models\HeroBanner;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = HeroBanner::first();
        $services = Service::latest()->take(6)->get();
        $testimonials = Testimonial::latest()->get();

        return view('index',compact('hero','services','testimonials'));
    }
}
