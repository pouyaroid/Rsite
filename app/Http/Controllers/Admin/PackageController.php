<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->take(4)->get(); // چهار پکیج آخر
        return view('admin.mainpage.packages.index', compact('packages'));
    }
    public function create()
    {
        return view('admin.mainpage.packages.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('packages', 'public');
        }

        Package::create($data);

        return redirect()->route('packages.index')->with('success', 'پکیج با موفقیت ایجاد شد.');
    }

    // فرم ویرایش پکیج
    public function edit(Package $package)
    {
        return view('admin.mainpage.packages.edit', compact('package'));
    }

    // آپدیت پکیج
    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('packages', 'public');
        }

        $package->update($data);

        return redirect()->route('packages.index')->with('success', 'پکیج با موفقیت ویرایش شد.');
    }

    // حذف پکیج
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'پکیج حذف شد.');
    }

}
