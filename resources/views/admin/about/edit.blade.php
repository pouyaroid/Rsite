<form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>عنوان</label>
    <input type="text" name="title" value="{{ $about->title }}" required>
    <label>توضیحات</label>
    <textarea name="description" required>{{ $about->description }}</textarea>
    <label>تصویر</label>
    <input type="file" name="image">
    <button type="submit">ویرایش</button>
</form>
