<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ایجاد پکیج جدید</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">ایجاد پکیج جدید</h5>
        </div>
        <div class="card-body">

            {{-- پیام موفقیت یا خطا --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">عنوان پکیج *</label>
                    <input type="text" name="title" id="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="duration" class="form-label">مدت زمان</label>
                    <input type="text" name="duration" id="duration"
                           class="form-control @error('duration') is-invalid @enderror"
                           value="{{ old('duration') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">توضیحات</label>
                    <textarea name="description" id="description" rows="4"
                              class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">قیمت *</label>
                    <input type="number" name="price" id="price"
                           class="form-control @error('price') is-invalid @enderror"
                           value="{{ old('price') }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">تصویر</label>
                    <input type="file" name="image" id="image"
                           class="form-control @error('image') is-invalid @enderror">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('packages.index') }}" class="btn btn-secondary">بازگشت</a>
                    <button type="submit" class="btn btn-success">ثبت پکیج</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
