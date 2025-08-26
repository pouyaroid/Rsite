<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه هیرو سکشن</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <!-- نمایش داده‌ها از پایگاه داده -->
        <section class="hero-banner magic-ball">
            <div class="container">
                <div class="row align-items-center text-center text-md-right">
                    <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                        <!-- نمایش عنوان و توضیحات داینامیک -->
                        <h1>{{ $hero->title }}</h1>
                        <p class="text-justify">{{ $hero->description }}</p>
                        <a class="button button-hero mt-4" href="{{ $hero->button_url }}">{{ $hero->button_text }}</a>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                        <!-- اگر تصویری موجود باشد، آن را نمایش می‌دهیم -->
                        @if($hero->image)
                            <img class="img-fluid" src="{{ asset('storage/' . $hero->image) }}" alt="Hero Banner Image">
                        @else
                            <img class="img-fluid" src="pics/home/hero-img.png" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
