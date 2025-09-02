<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ایجاد اطلاعات تماس</title>

  {{-- Bootstrap 5 RTL --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  {{-- Bootstrap Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { background:#f7f7f9 }
    .card-soft { border:0; border-radius:1rem; box-shadow:0 10px 25px rgba(0,0,0,.06) }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card card-soft p-4">
        <h2 class="mb-4 text-end">ایجاد اطلاعات تماس</h2>

        {{-- نمایش پیام موفقیت --}}
        @if(session('success'))
          <div class="alert alert-success text-end">{{ session('success') }}</div>
        @endif

        {{-- نمایش خطاها --}}
        @if ($errors->any())
          <div class="alert alert-danger text-end">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li class="mb-1">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        {{-- فرم ایجاد --}}
        <form method="post" action="{{ route('admin.contact.store') }}">
          @csrf

          <div class="mb-3">
            <label for="phone" class="form-label">شماره تماس</label>
            <input type="text"
                   name="phone"
                   id="phone"
                   class="form-control text-end"
                   placeholder="مثلاً 09032309534"
                   value="{{ old('phone') }}">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email"
                   name="email"
                   id="email"
                   class="form-control text-end"
                   placeholder="مثلاً info@example.com"
                   value="{{ old('email') }}">
          </div>

          <div class="mb-3">
            <label for="hours" class="form-label">ساعات کاری</label>
            <input type="text"
                   name="hours"
                   id="hours"
                   class="form-control text-end"
                   placeholder="مثلاً همه‌روزه از 9 صبح تا 7 شب"
                   value="{{ old('hours') }}">
          </div>

          <div class="d-flex justify-content-end gap-2">
            <a href="{{ route('contact.public') }}" class="btn btn-light">مشاهده صفحه عمومی</a>
            <button class="btn btn-primary">ایجاد اطلاعات</button>
          </div>
        </form>

        <hr class="my-4">

        <div class="text-end">
          <small class="text-muted">
            نکته: اگر قبلاً اطلاعات تماس ایجاد شده، از
            <a href="{{ route('admin.contact.edit') }}">فرم ویرایش</a>
            استفاده کنید.
          </small>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
