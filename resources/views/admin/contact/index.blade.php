
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fb, #e9eef5);
      font-family: "Vazirmatn", sans-serif;
    }

    .contact-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.08);
      transition: all .3s ease-in-out;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(0,0,0,0.12);
    }

    .contact-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 56px;
      height: 56px;
      border-radius: 16px;
      background: linear-gradient(135deg, #1976D2, #42A5F5);
      color: #fff;
      font-size: 1.4rem;
      margin-left: 12px;
      flex-shrink: 0;
      transition: all .3s ease;
    }

    .contact-card:hover .contact-icon {
      background: linear-gradient(135deg, #1565C0, #1E88E5);
      transform: rotate(-5deg) scale(1.1);
    }

    .contact-card h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: .3rem;
      color: #212529;
    }

    .contact-card p, .contact-card a {
      font-size: .95rem;
      color: #6c757d;
      text-decoration: none;
    }

    .contact-card a:hover {
      color: #1565C0;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">

      <!-- آدرس -->
      <div class="d-flex align-items-start contact-card">
        <span class="contact-icon"><i class="bi bi-house"></i></span>
        <div class="text-end">
          <h3>شیراز | ایران</h3>
          <p>کد پستی : 1111111</p>
        </div>
      </div>

      <!-- شماره تلفن -->
      <div class="d-flex align-items-start contact-card">
        <span class="contact-icon"><i class="bi bi-telephone"></i></span>
        <div class="text-end">
          <h3>
            <a href="tel:{{ $info?->phone ?? '09032309534' }}">
              {{ $info?->phone ?? '09032309534' }}
            </a>
          </h3>
          <p>{{ $info?->hours ?? 'همه روزه از 9 صبح تا 7 شب' }}</p>
        </div>
      </div>

      <!-- ایمیل -->
      <div class="d-flex align-items-start contact-card">
        <span class="contact-icon"><i class="bi bi-envelope"></i></span>
        <div class="text-end">
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
