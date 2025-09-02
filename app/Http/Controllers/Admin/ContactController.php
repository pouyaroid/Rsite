<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $info = ContactInfo::query()->latest('id')->first(); // تنها رکورد
        return view('contact', compact('info'));
    }
        // فرم ویرایش برای ادمین
        public function edit()
        {
            $info = ContactInfo::query()->latest('id')->first();
            // اگر برای هر دلیل رکورد حذف شده بود، یک رکورد خالی بساز
            if (!$info) {
                $info = ContactInfo::create(['phone'=>null,'email'=>null,'hours'=>null]);
            }
            return view('admin.contact.index', compact('info'));
        }
    
        // ذخیره/به‌روزرسانی
        public function update(Request $request)
        {
            $validated = $request->validate([
                'phone' => ['nullable','string','max:50'],
                'email' => ['nullable','email','max:190'],
                'hours' => ['nullable','string','max:190'],
            ],[
                'email.email' => 'ایمیل معتبر وارد کنید.',
            ]);
    
            $info = ContactInfo::query()->latest('id')->first();
            if (!$info) {
                $info = ContactInfo::create($validated);
            } else {
                $info->update($validated);
            }
    
            return redirect()
                ->route('admin.contact.edit')
                ->with('success', 'اطلاعات تماس با موفقیت ذخیره شد.');
        }
        public function store(Request $request)
{
    $validated = $request->validate([
        'phone' => ['nullable','string','max:50'],
        'email' => ['nullable','email','max:190'],
        'hours' => ['nullable','string','max:190'],
    ],[
        'email.email' => 'ایمیل معتبر وارد کنید.',
    ]);

    // اگر رکوردی هست، همان را آپدیت کن؛ وگرنه بساز (Singleton)
    $info = ContactInfo::query()->latest('id')->first();

    if ($info) {
        $info->update($validated);
        $msg = 'اطلاعات موجود به‌روزرسانی شد.';
    } else {
        $info = ContactInfo::create($validated);
        $msg = 'اطلاعات تماس ایجاد شد.';
    }

    return redirect()
        ->route('admin.contact.index')
        ->with('success', $msg);
}
public function create()
{
    // برای ساخت رکورد جدید (فرم خالی)
    // اگر قبلاً رکوردی ساخته شده، بهتر است به edit ریدایرکت کنیم تا دوگانه نشود
    $existing = ContactInfo::query()->latest('id')->first();
    if ($existing) {
        return redirect()->route('admin.contact.edit')
            ->with('success', 'اطلاعات قبلاً ایجاد شده؛ می‌توانید ویرایش کنید.');
    }

    return view('admin.contact.create');
}
}
