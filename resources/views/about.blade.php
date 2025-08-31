@include('layouts.app')
@include('layouts.header')

<section class="hero-banner-sm magic-ball magic-ball-banner">
    <div class="container">
        <div class="hero-banner-sm-content">
            <h1>{{ $about->title ?? 'درباره ما' }}</h1>
            <p>{{ $about->description ?? 'متنی برای معرفی اینجا قرار می‌گیرد.' }}</p>
        </div>
    </div>
</section>

<section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
                <div class="about-img">
                    @if($about && $about->image)
                        <img class="img-fluid" src="{{ asset('storage/' . $about->image) }}" alt="">
                    @else
                        <img class="img-fluid" src="pics/home/about-img.png" alt="">
                    @endif
                </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center about-content">
                <h2>{{ $about->title ?? 'عنوان پیش‌فرض' }}</h2>
                <p>{{ $about->description ?? 'توضیحات پیش‌فرض درباره ما' }}</p>
                <a class="button" href="#">بیشتر بدانید</a>
            </div>
        </div>
    </div>
</section>

