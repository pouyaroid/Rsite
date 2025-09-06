@include('layouts.app')

<header class="main-header shadow-sm rounded-4 my-2 mx-3">
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- لوگو -->
      <a class="navbar-brand fw-bold" href="{{ url('/') }}">
        <img src="{{ asset('pics/logo.png') }}" alt="لوگو" class="logo">
      </a>

      <!-- دکمه منوی موبایل -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
        <i class="bi bi-list fs-1"></i>
      </button>

      <!-- منو -->
      <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
        <ul class="navbar-nav text-center gap-lg-2">
          <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">صفحه نخست</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">درباره ما</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('packages') ? 'active' : '' }}" href="{{ url('/packages') }}">پکیج‌ها</a></li>

          <!-- dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              صفحات
            </a>
            <ul class="dropdown-menu text-end border-0 shadow-lg rounded-4" aria-labelledby="pagesDropdown">
              <li><a class="dropdown-item" href="{{ url('/amentities') }}">امکانات</a></li>
            </ul>
          </li>

          <!-- بلاگ -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              بلاگ
            </a>
            <ul class="dropdown-menu text-end border-0 shadow-lg rounded-4" aria-labelledby="blogDropdown">
              <li><a class="dropdown-item" href="{{ url('/blog') }}">تک صفحه</a></li>
              <li><a class="dropdown-item" href="{{ url('/blog-details') }}">با جزئیات</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">تماس با ما</a></li>
        </ul>
      </div>

      <!-- CTA -->
      <div class="d-none d-lg-block">
        <a href="#" class="btn btn-gradient rounded-pill px-4 py-2 fw-bold">شروع</a>
      </div>
    </div>
  </nav>
</header>
<style>
/* استایل لوگو */
.logo {
  max-height: 50px;
}

/* هدر شیشه‌ای */
.main-header {
  background: rgba(255, 255, 255, 0.55);
  backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  border-radius: 1.25rem; /* گردی گوشه‌ها */
  border: 1px solid rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 10px;
  z-index: 1030;
  transition: all 0.3s ease-in-out;
}

/* لینک‌ها */
.nav-link {
  color: #222 !important;
  font-weight: 500;
  transition: all 0.3s ease;
  padding: 10px 15px !important;
  border-radius: 8px;
}
.nav-link:hover, .nav-link.active {
  color: #1976D2 !important;
  background: rgba(25, 118, 210, 0.08);
}

/* دکمه CTA */
.btn-gradient {
  background: linear-gradient(135deg, #1976D2, #42A5F5);
  color: #fff;
  transition: all 0.3s ease;
  box-shadow: 0 6px 16px rgba(25,118,210,0.35);
}
.btn-gradient:hover {
  background: linear-gradient(135deg, #1565C0, #1E88E5);
  transform: translateY(-2px) scale(1.03);
  color: #fff;
}

/* Dropdown */
.dropdown-menu {
  animation: fadeIn .25s ease-in-out;
  border-radius: 1rem;
  background: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(12px);
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(8px); }
  to   { opacity: 1; transform: translateY(0); }
}
</style>
