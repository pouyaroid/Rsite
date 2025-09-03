<section class="section-padding pb-xl-5 testimonial-section">
    <div class="container">
        <div class="text-center pb-5">
            <img src="{{ asset('pics/logo.png') }}" alt="آیکون بخش">
            <h2 class="mt-3 text-dark">نظرات مشتریان ما</h2>
            <p class="text-muted">برترین مشتری ها از آن ماست. ما قدر دان شما و نظرات ارزشمندتان هستیم</p>
        </div>

        <div class="owl-carousel owl-theme owl-rtl testimonial pb-xl-5">
            @forelse($testimonials as $testimonial)
                <div class="testimonial__item card-custom mx-auto">
                    <div class="testimonial-avatar-wrapper">
                        <img src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('pics/testimonial/t-slider1.png') }}"
                             class="testimonial-img"
                             alt="{{ $testimonial->name }}">
                    </div>
                    
                    <div class="card-content-wrapper">
                        <h3 class="customer-name">{{ $testimonial->name }}</h3>
                        <p class="customer-title">{{ $testimonial->title }}{{ $testimonial->location ? ' ، ' . $testimonial->location : '' }}</p>
                        <p class="testimonial-text">{{ $testimonial->content }}</p>
                        <span class="testimonial-quote-icon"><i class="ti-quote-left"></i></span>
                    </div>
                </div>
            @empty
                @for($i=1;$i<=3;$i++)
                    <div class="testimonial__item card-custom mx-auto">
                        <div class="testimonial-avatar-wrapper">
                            <img src="{{ asset('pics/testimonial/t-slider1.png') }}" class="testimonial-img" alt="مشتری پیش‌فرض">
                        </div>
                        <div class="card-content-wrapper">
                            <h3 class="customer-name">مشتری پیش‌فرض {{ $i }}</h3>
                            <p class="customer-title">عنوان ، شهر</p>
                            <p class="testimonial-text">لورم ایپسوم متن ساختگی برای نمایش پیش‌فرض نظر مشتری.</p>
                            <span class="testimonial-quote-icon"><i class="ti-quote-left"></i></span>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
</section>
<style>
    /* --- بخش کلی نظرات --- */
    .testimonial-section {
        background-color: #f7fbff;
        padding: 80px 0;
    }
    .testimonial-section h2 {
        color: #1a3a5d;
        font-weight: 700;
    }
    .testimonial-section .text-muted {
        font-size: 1.1rem;
        color: #6a7c92 !important;
    }

    /* --- کارت اصلی نظر --- */
    .card-custom {
        background: #ffffff;
        border-radius: 20px;
        /* Padding اصلی کارت حذف می‌شود و به wrapper داخلی منتقل می‌شود */
        padding: 0;
        border: 1px solid #eaf2f9;
        box-shadow: 0 10px 40px rgba(82, 128, 178, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: visible; /* آواتار باید بیرون بزند */
        max-width: 400px;
        margin-top: 60px; /* فضای لازم برای آواتار */
        text-align: center;
    }
    .card-custom:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 50px rgba(82, 128, 178, 0.15);
    }
    
    /* --- پوشش محتوای متنی داخل کارت (اصلاح کلیدی) --- */
    .card-content-wrapper {
        padding: 70px 30px 30px 30px; /* <<--- مهم: 70px فاصله از بالا برای ایجاد فضا برای آواتار */
    }

    /* --- ظرف آواتار دایره‌ای --- */
    .testimonial-avatar-wrapper {
        position: absolute;
        top: -60px; /* نیمی از ارتفاع آواتار (120px) */
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 120px;
        background-color: #f0f8ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        border: 5px solid #fff;
    }

    /* --- تصویر مشتری --- */
    .testimonial-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #0d6efd;
    }

    /* --- استایل متن‌ها (با نام کلاس جدید برای خوانایی بهتر) --- */
    .customer-name {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a3a5d !important;
        /* margin-top دیگر لازم نیست چون padding والد فضا را ایجاد می‌کند */
    }

    .customer-title {
        color: #0d6efd !important;
        font-weight: 500;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .testimonial-text {
        font-size: 1rem;
        line-height: 1.8;
        color: #55677d !important;
        font-style: italic;
    }

    /* --- آیکون نقل قول --- */
    .testimonial-quote-icon {
        display: block;
        margin-top: 20px;
        font-size: 2.5rem;
        opacity: 0.2;
        color: #0d6efd !important;
    }

    /* --- استایل Owl Carousel --- */
    .testimonial .owl-dots {
        margin-top: 50px;
        text-align: center;
    }
    .testimonial .owl-dot span {
        background: #cce0ff !important;
        width: 12px;
        height: 12px;
        transition: all 0.3s ease;
        border-radius: 50%;
    }
    .testimonial .owl-dot.active span,
    .testimonial .owl-dot:hover span {
        background: #0d6efd !important;
        width: 25px;
        border-radius: 10px;
    }
</style>