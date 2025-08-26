

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">ساخت هیرو سکشن جدید</h1>

    <form action="{{ route('admin.hero-banner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="عنوان هیرو سکشن" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">توضیحات</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="توضیحات هیرو سکشن" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="button_text" class="form-label">متن دکمه</label>
                    <input type="text" name="button_text" id="button_text" class="form-control" placeholder="متن دکمه" required>
                </div>

                <div class="mb-3">
                    <label for="button_url" class="form-label">آدرس دکمه</label>
                    <input type="url" name="button_url" id="button_url" class="form-control" placeholder="آدرس دکمه" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">تصویر</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">ساخت هیرو سکشن</button>
                </div>
            </div>
        </div>
    </form>
</div>

