<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroBannerController extends Controller
{
    public function index()
    {
        $hero = HeroBanner::first(); // گرفتن تمام رکوردها از دیتابیس
        return view('admin.mainpage.herobanner.index', compact('hero'));
    }

    // نمایش فرم ایجاد هیرو سکشن
    public function create()
    {
        return view('admin.mainpage.herobanner.create');
    }

    // ذخیره داده‌های جدید هیرو سکشن
    public function store(Request $request)
    {
        // اعتبارسنجی داده‌های ورودی
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_url' => 'required|url',
            'image' => 'required|image', // تصویر الزامی است
        ]);

        // ذخیره تصویر
        $imagePath = $request->file('image')->store('hero-images', 'public');

        // ایجاد رکورد جدید
        HeroBanner::create([
            'title' => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.hero-banner.index')->with('success', 'Hero banner created successfully.');
    }

    // نمایش فرم ویرایش هیرو سکشن
    public function edit($id)
    {
        $hero = HeroBanner::findOrFail($id); // پیدا کردن رکورد براساس آی‌دی
        return view('admin.hero-banner.edit', compact('hero'));
    }

    // آپدیت داده‌های هیرو سکشن
    public function update(Request $request, $id)
    {
        // اعتبارسنجی داده‌ها
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_url' => 'required|url',
            'image' => 'nullable|image', // تصویر اختیاری است
        ]);

        // پیدا کردن رکورد مربوطه
        $hero = HeroBanner::findOrFail($id);

        // اگر تصویری ارسال شده باشد، آن را ذخیره می‌کنیم
        if ($request->hasFile('image')) {
            // حذف تصویر قبلی اگر وجود داشت
            if ($hero->image) {
                Storage::delete('public/' . $hero->image);
            }

            // ذخیره تصویر جدید
            $imagePath = $request->file('image')->store('hero-images', 'public');
            $hero->image = $imagePath;
        }

        // به‌روزرسانی سایر داده‌ها
        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->button_text = $request->button_text;
        $hero->button_url = $request->button_url;

        // ذخیره تغییرات
        $hero->save();

        return redirect()->route('admin.hero-banner.index')->with('success', 'Hero banner updated successfully.');
    }

    // حذف هیرو سکشن
    public function destroy($id)
    {
        // پیدا کردن رکورد
        $hero = HeroBanner::findOrFail($id);

        // حذف تصویر از فضای ذخیره‌سازی
        if ($hero->image) {
            Storage::delete('public/' . $hero->image);
        }

        // حذف رکورد از پایگاه داده
        $hero->delete();

        return redirect()->route('admin.hero-banner.index')->with('success', 'Hero banner deleted successfully.');
    }
}
