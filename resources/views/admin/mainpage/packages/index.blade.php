<section class="section-margin pb-xl-5">
    <div class="container">

        @if($packages->count() > 0)
            {{-- نمایش داده‌های داینامیک --}}
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-md-6 col-lg-6 mb-4">
                        <div class="tour-card">
                            <img class="card-img rounded-0"
                                 src="{{ $package->image ? asset('storage/'.$package->image) : 'pics/home/default.png' }}"
                                 alt="{{ $package->title }}">
                            <div class="tour-card-overlay">
                                <div class="media">
                                    <div class="media-body">
                                        <h4>{{ $package->title }}</h4>
                                        @if($package->duration)
                                            <small>{{ $package->duration }}</small>
                                        @endif
                                        <p>{{ $package->description }}</p>
                                    </div>
                                    <div class="media-price">
                                        <h4 class="text-primary">{{ number_format($package->price) }} تومان</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        @else
            {{-- نمایش نسخه استاتیک پیش‌فرض --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="tour-card">
                        <img class="card-img rounded-0" src="pics/home/tour1.png" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>تور پاریس</h4>
                                    <small>5 روز</small>
                                    <p>ما به درستی گردشگر خود را راهنمایی میکنیم</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">5 میلیون تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="tour-content">
                                <h2>ما به شما پیشنهاد جدیدترین تورمان را میدهیم</h2>
                                <p>مطمئن باشید سفری بی نظیر با اکتشافاتی جدید پیش روی شما خواهید بود</p>
                            </div>
                        </div>
                    </div>

                    <div class="tour-card">
                        <img class="card-img rounded-0" src="pics/home/tour2.png" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>تور هند</h4>
                                    <small>5 روز</small>
                                    <p>مطمئن باشید سفری بی نظیر با اکتشافاتی جدید پیش روی شما خواهید بود</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">3 میلیون تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 col-lg-7">
                    <div class="tour-card">
                        <img class="card-img rounded-0" src="pics/home/tour3.png" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>تور هلند</h4>
                                    <small>8 روز</small>
                                    <p>مطمئن باشید سفری بی نظیر با اکتشافاتی جدید پیش روی شما خواهید بود</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">10 میلیون تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="tour-card">
                        <img class="card-img rounded-0" src="pics/home/tour4.png" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>تور فرانسه</h4>
                                    <small>یک هفته</small>
                                    <p>مطمئن باشید سفری بی نظیر با اکتشافاتی جدید پیش روی شما خواهید بود</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">20 میلیون تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</section>
