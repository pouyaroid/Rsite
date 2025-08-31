<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // چون یک بخش درباره ما بیشتر نداریم
        return view('about', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($data);

        return redirect()->route('about.index')->with('success', 'درباره ما ایجاد شد');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'درباره ما بروزرسانی شد');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return back()->with('success', 'درباره ما حذف شد');
    }
}
