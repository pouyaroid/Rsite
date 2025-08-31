<form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>عنوان</label>
    <input type="text" name="title" required>
    <label>توضیحات</label>
    <textarea name="description" required></textarea>
    <label>تصویر</label>
    <input type="file" name="image">
    <button type="submit">ثبت</button>
</form>
