<div class="text-center pb-1">
    <h2 class="mt-3 text-dark">RoshdCrm|سی ار ام رشد</h2>
    <p class="text-muted">لیست تعرفه ها</p>
</div>
<section class="section-margin pb-xl-5">
    <div class="container">


        @if($packages->count() > 0)
            <div class="row g-4">
                @foreach($packages as $package)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        @if($package->image)
                            {{-- حالت با تصویر --}}
                            <div class="tour-card h-100 rounded-4 overflow-hidden shadow-sm crm-card">
                                <img class="card-img-top"
                                     src="{{ asset('storage/'.$package->image) }}"
                                     alt="{{ $package->title }}">
                                <div class="p-3">
                                    <h5 class="fw-bold">{{ $package->title }}</h5>
                                    @if($package->duration)
                                        <small class="text-muted d-block">{{ $package->duration }}</small>
                                    @endif
                                    <p class="text-secondary small mt-2">{{ $package->description }}</p>
                                    <div class="text-end mt-3">
                                        <span class="badge bg-primary fs-6">
                                            {{ number_format($package->price) }} تومان
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @else
                            {{-- حالت بدون تصویر (کارت شیک) --}}
                            <div class="crm-card h-100 rounded-4 shadow-sm d-flex flex-column justify-content-between p-4 text-center">
                                <div>
                                    <h5 class="fw-bold">{{ $package->title }}</h5>
                                    @if($package->duration)
                                        <small class="text-muted d-block">{{ $package->duration }}</small>
                                    @endif
                                    <p class="text-secondary small mt-2">{{ $package->description }}</p>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-primary fs-6">
                                        {{ number_format($package->price) }} تومان
                                    </span>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center">هیچ پکیجی برای نمایش وجود ندارد.</div>
        @endif

    </div>
</section>

{{-- استایل اختصاصی --}}
<style>
    .crm-card {
        background: linear-gradient(135deg, #e3f2fd, #f9fbff);
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* انیمیشن بر روی حرکت و سایه */
        min-height: 300px; /* اندازه استاندارد برای کارت */
        margin-top: 20px; /* فاصله کارت از بالا */
        border-radius: 12px;
        opacity: 0;
        transform: translateY(20px); /* افکت اولیه: کارت پایین‌تر از حالت معمول شروع می‌شود */
    }

    /* انیمیشن در زمان بارگذاری صفحه */
    .crm-card.visible {
        opacity: 1;
        transform: translateY(0); /* افکت ورود کارت از پایین */
    }

    .crm-card:hover {
        transform: translateY(-10px); /* بالا بردن کارت در حالت hover */
        box-shadow: 0 20px 40px rgba(0,0,0,0.2); /* سایه زیبا */
    }

    .crm-card .card-img-top {
        border-bottom: 4px solid #1976d2; /* خط زیبای زیر تصویر */
    }

    /* برای کارت بدون تصویر */
    .crm-card .p-3 {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
</style>

{{-- اسکریپت برای انیمیشن ورود کارت‌ها --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.crm-card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add('visible');
            }, index * 100); /* افکت انیمیشن برای هر کارت به طور جداگانه */
        });
    });
</script>
