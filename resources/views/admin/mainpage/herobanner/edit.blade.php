<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش هیرو سکشن</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">ویرایش هیرو سکشن</h1>

        <form action="{{ route('admin.hero-banner.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $hero->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">توضیحات</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $hero->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="button_text" class="form-label">متن دکمه</label>
                        <input type="text" name="button_text" id="button_text" class="form-control" value="{{ old('button_text', $hero->button_text) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="button_url" class="form-label">آدرس دکمه</label>
                        <input type="url" name="button_url" id="button_url" class="form-control" value="{{ old('button_url', $hero->button_url) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">تصویر</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if($hero->image)
                        <img src="{{ asset('storage/' . $hero->image) }}" class="img-fluid mt-2" alt="Hero Banner Image" style="max-height: 200px;">
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">ویرایش هیرو سکشن</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
