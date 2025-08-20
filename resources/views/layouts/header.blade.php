<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- لوگو -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="لوگو شرکت" height="50">
        </a>

        <!-- دکمه هامبرگر موبایل -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- منو -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">صفحه اصلی</a></li>

                <!-- زیرمنو درباره ما -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        درباره ما
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="#">تاریخچه</a></li>
                        <li><a class="dropdown-item" href="#">ماموریت و چشم‌انداز</a></li>
                        <li><a class="dropdown-item" href="#">تیم ما</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">خدمات</a></li>
                <li class="nav-item"><a class="nav-link" href="#">نمونه کارها</a></li>
                <li class="nav-item"><a class="nav-link" href="#">تماس با ما</a></li>
            </ul>

            <!-- دکمه ورود/ثبت‌نام -->
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">داشبورد</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">ورود</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-success text-white ms-2" href="{{ route('register') }}">ثبت‌نام</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
