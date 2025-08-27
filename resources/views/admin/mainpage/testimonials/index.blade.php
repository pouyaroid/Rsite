<section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
        <div class="text-center pb-5">
            <img src="{{ asset('pics/home/section-icon.png') }}" alt="">
            <h2 class="mt-3">نظرات مشتریان ما</h2>
            <p class="text-muted">برترین مشتری ها از آن ماست . ما قدر دان شما و نظرات ارزشمندتان هستیم</p>
        </div>

        <div class="owl-carousel owl-theme owl-rtl testimonial pb-xl-5">
            @if($testimonials->count() > 0)
                @foreach($testimonials as $testimonial)
                <div class="testimonial__item">
                    <div class="row">
                        <div class="col-md-3 col-lg-2 align-self-center">
                            <div class="testimonial__img">
                                <img src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('pics/testimonial/t-slider1.png') }}" class="card-img rounded-0" alt="{{ $testimonial->name }}">
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-10">
                            <div class="testimonial__content mt-3 mt-sm-0">
                                <h3>{{ $testimonial->name }}</h3>
                                <p>{{ $testimonial->title }}{{ $testimonial->location ? ' ، ' . $testimonial->location : '' }}</p>
                                <p class="testimonial__i">{{ $testimonial->content }}</p>
                                <span class="testimonial__icon"><i class="ti-quote-left"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                {{-- نظرات پیش‌فرض وقتی دیتابیس خالی است --}}
                @for($i=1;$i<=3;$i++)
                <div class="testimonial__item">
                    <div class="row">
                        <div class="col-md-3 col-lg-2 align-self-center">
                            <div class="testimonial__img">
                                <img src="{{ asset('pics/testimonial/t-slider1.png') }}" class="card-img rounded-0" alt="مشتری پیش‌فرض">
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-10">
                            <div class="testimonial__content mt-3 mt-sm-0">
                                <h3>مشتری پیش‌فرض {{ $i }}</h3>
                                <p>عنوان ، شهر</p>
                                <p class="testimonial__i">لورم ایپسوم متن ساختگی برای نمایش پیش‌فرض نظر مشتری.</p>
                                <span class="testimonial__icon"><i class="ti-quote-left"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            @endif
        </div>
    </div>
</section>
