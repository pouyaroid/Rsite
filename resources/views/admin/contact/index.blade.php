<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تماس با ما</title>

  {{-- Bootstrap 5 RTL --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  {{-- آیکن‌ها (Bootstrap Icons یا ti) --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { background:#f7f7f9 }
    .contact-info__icon {
      display:inline-flex; align-items:center; justify-content:center;
      width:48px; height:48px; border-radius:12px; background:#eef1f4; font-size:1.3rem;
      margin-left:12px;
    }
    .contact-info { margin-bottom:1.5rem; }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row">
    <div class="col-lg-4">

      {{-- آدرس ثابت (در صورت نیاز هم میشه داینامیکش کرد) --}}
      <div class="media contact-info d-flex">
        <span class="contact-info__icon"><i class="bi bi-house"></i></span>
        <div class="media-body text-end">
          <h3>شیراز | ایران</h3>
          <p>کد پستی : 1111111</p>
        </div>
      </div>

      {{-- شماره تلفن --}}
      <div class="media contact-info d-flex">
        <span class="contact-info__icon"><i class="bi bi-telephone"></i></span>
        <div class="media-body text-end">
          <h3>
            <a href="tel:{{ $info?->phone ?? '09032309534' }}">
              {{ $info?->phone ?? '09032309534' }}
            </a>
          </h3>
          <p>{{ $info?->hours ?? 'همه روزه از 9 صبح تا 7 شب' }}</p>
        </div>
      </div>

      {{-- ایمیل --}}
      <div class="media contact-info d-flex">
        <span class="contact-info__icon"><i class="bi bi-envelope"></i></span>
        <div class="media-body text-end">
          <h3>
            <a href="mailto:{{ $info?->email ?? 'info@example.com' }}">
              {{ $info?->email ?? 'info@example.com' }}
            </a>
          </h3>
          <p>برای ما پیام بگذارید</p>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
