<style>
    .footer-gradient {
        position: relative; /* لازم برای لایه محو شونده */
        color: white;
        
        /* پس‌زمینه اصلی با گرادیانت آبی */
        background: linear-gradient(60deg, #3a7bd5, #00d2ff); 
        
        /* گرد کردن گوشه‌های بالا */
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        
        padding-top: 4rem; /* فاصله از بالا */
        padding-bottom: 2rem; /* فاصله از پایین */
        
        /* مهم: باعث می‌شود لایه محو شونده هم گوشه‌های گرد داشته باشد */
        overflow: hidden; 
    }

    /* ایجاد لایه محو شونده از سفید به شفاف در بالای فوتر */
    .footer-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 180px; /* ارتفاع ناحیه محو شونده را از اینجا تنظیم کنید */
        
        /* گرادیانت از سفید نیمه شفاف به کاملاً شفاف */
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.7), transparent);
        
        /* این خاصیت اجازه می‌دهد تا محتوای زیر این لایه قابل کلیک باشد */
        pointer-events: none; 
    }

    /* استایل‌های قبلی برای لینک‌ها و آیکون‌ها */
    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
        padding-right: 5px;
    }

    .footer-social .btn-floating {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .footer-social .btn-floating:hover {
        background-color: #ffffff;
        color: #3a7bd5; /* رنگ اصلی گرادیانت */
    }
</style>

<footer class="footer-gradient">
    <div class="container text-center text-md-start">
        <div class="row">

            <div class="col-md-4 col-lg-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Roshd CRM
                </h6>
                <p>
                    متنی کوتاه و جذاب درباره شرکت یا سرویس شما. این متن به کاربران کمک می‌کند تا به سرعت با هویت برند شما آشنا شوند.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">دسترسی سریع</h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="#">صفحه نخست</a></li>
                    <li class="mb-2"><a href="#">امکانات</a></li>
                    <li class="mb-2"><a href="#">سرویس‌ها</a></li>
                    <li class="mb-2"><a href="#">قیمت</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-lg-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">لینک‌های مفید</h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="#">بلاگ</a></li>
                    <li class="mb-2"><a href="#">قوانین و مقررات</a></li>
                    <li class="mb-2"><a href="#">سوالات متداول</a></li>
                    <li class="mb-2"><a href="#">تماس با ما</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">تماس با ما</h6>
                <p><i class="fas fa-home me-3"></i>آدرس شرکت شما، شهر، کشور</p>
                <p><i class="fas fa-envelope me-3"></i>info@example.com</p>
                <p><i class="fas fa-phone me-3"></i>+ 98 21 123 456 78</p>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="my-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 small">
                    &copy; <script>document.write(new Date().getFullYear())</script> Roshd CRM. تمامی حقوق محفوظ است.
                </p>
            </div>
            <div class="text-center text-md-end footer-social">
                <a href="#" class="btn btn-floating m-1" role="button"><i class="fab fa-telegram-plane"></i></a>
                <a href="#" class="btn btn-floating m-1" role="button"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-floating m-1" role="button"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="btn btn-floating m-1" role="button"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>