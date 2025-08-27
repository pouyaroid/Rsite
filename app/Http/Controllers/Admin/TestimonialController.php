<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.mainpage.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.mainpage.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('testimonials', 'public') : null;

        Testimonial::create([
            'name' => $request->name,
            'title' => $request->title,
            'location' => $request->location,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'نظر مشتری با موفقیت ثبت شد.');
    }
}
