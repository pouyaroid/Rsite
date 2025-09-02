<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه هیرو سکشن</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-dpuaG1suU0eT09BZpE7gpZNMiZlUG3DDZaUnAPkSEFUUVMASUhgmdtFISpIvcS+a" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />

    <style>
      body {
        font-family: 'Vazirmatn', sans-serif !important;
        background-color: #f9f9fb;
      }
      .hero-banner {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(135deg, #e3f2fd, #f9f9fb);
        overflow: hidden;
        border-radius: 1.5rem;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
      }
      .hero-banner h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: #0d47a1;
        line-height: 1.6;
      }
      .hero-banner p {
        color: #444;
        font-size: 1.1rem;
        line-height: 2;
        margin-top: 1rem;
      }
      /* کلاس برای ترازبندی متن پاراگراف */
      .text-justify {
        text-align: justify;
      }
      .btn-hero {
        background: linear-gradient(135deg, #1976D2, #42A5F5);
        color: #fff;
        padding: 12px 32px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        box-shadow: 0 6px 20px rgba(25, 118, 210, 0.35);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }
      .btn-hero:hover {
        background: linear-gradient(135deg, #1565C0, #1E88E5);
        transform: translateY(-3px) scale(1.03);
        color: #fff;
      }
      .hero-img {
        position: relative;
        animation: float 4s ease-in-out infinite;
        max-width: 100%;
        border-radius: 1rem;
      }
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
      }
      .fade-in-right { animation: fadeInRight 1s ease forwards; opacity: 0; }
      .fade-in-left { animation: fadeInLeft 1s ease forwards; opacity: 0; }
      @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(40px); }
        to   { opacity: 1; transform: translateX(0); }
      }
      @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to   { opacity: 1; transform: translateX(0); }
      }
    </style>
</head>
<body>

  <div class="container my-5">
    <section class="hero-banner">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-6 text-center fade-in-right">
            <h1>رشد قهرمان فروش تو</h1>
            <p class="text-justify">{{ $hero->description ?? 'این یک متن توضیحی برای معرفی خدمات یا محصولات شماست که می‌تواند مخاطب را جذب کند. خطوط این متن از هر دو طرف تراز شده‌اند تا ظاهری مرتب داشته باشند.' }}</p>
            <a class="btn btn-hero mt-4" href="{{ $hero->button_url ?? '#' }}">
              {{ $hero->button_text ?? 'شروع کنید' }}
              <i class="bi bi-arrow-left"></i>
            </a>
          </div>

          <div class="col-lg-6 text-center mt-5 mt-lg-0 fade-in-left">
            @if(isset($hero) && $hero->image)
              <img class="hero-img img-fluid" src="{{ asset('storage/' . $hero->image) }}" alt="Hero Banner Image">
            @else
              <img class="hero-img img-fluid" src="https://via.placeholder.com/500x400.png?text=Hero+Image" alt="Hero Image Placeholder">
            @endif
          </div>
          
        </div>
      </div>
    </section>
  </div>

</body>
</html>