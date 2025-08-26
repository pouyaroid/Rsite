<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن سرویس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">افزودن سرویس جدید</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-12">
            <label class="form-label">عنوان سرویس</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="col-12">
            <label class="form-label">توضیحات</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        
        <div class="col-12">
            <label class="form-label">تصویر</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary px-4">ذخیره</button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">بازگشت</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
