<div class="container py-5">
    <h2 class="mb-4">ثبت نظر مشتری</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-12 col-md-6">
            <label class="form-label">نام مشتری</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">عنوان / شغل</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">محل</label>
            <input type="text" name="location" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">متن نظر</label>
            <textarea name="content" class="form-control" rows="4" required></textarea>
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">تصویر مشتری</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary px-4">ذخیره</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">بازگشت</a>
        </div>
    </form>
</div>
