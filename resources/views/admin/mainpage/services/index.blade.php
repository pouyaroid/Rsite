{{-- <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سرویس‌ها</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body>
<section class="section-margin generic-margin py-5">
    <div class="container">
        <div class="text-center mb-5">
            <img src="{{ asset('pics/home/section-icon.png') }}" alt="">
            <h2 class="mt-3">محبوب ترین سرویس های ما</h2>
            <p class="text-muted">محبوب ترین سرویس های ما که ما را از دیگران متمایز کرده است</p>
        </div>

        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 text-center shadow-sm border-0">
                    <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
