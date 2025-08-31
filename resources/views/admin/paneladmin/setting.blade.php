

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded-5 dashboard-card">
                    <div class="card-header bg-gradient-primary text-white text-center py-5 rounded-top-5 position-relative">
                        <div class="card-header-overlay position-absolute top-0 start-0 w-100 h-100 rounded-top-5"></div>
                        <h2 class="card-title fw-bold mb-0 position-relative z-index-1">
                            <i class="fas fa-cogs me-2"></i> تنظیمات صفحه اصلی
                        </h2>
                        <p class="text-white-50 mb-0 mt-2 position-relative z-index-1">
                            با کلیک روی کارت‌های زیر، به بخش‌های مختلف وب‌سایت دسترسی پیدا کنید.
                        </p>
                    </div>

                    <div class="card-body p-5">
                        <div class="row g-4 d-flex justify-content-center flex-wrap">
                            
                            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                <a href="{{ route('admin.hero-banner.create') }}" class="dashboard-link-card text-decoration-none">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-image fa-3x text-primary"></i>
                                    </div>
                                    <h5 class="title mt-4">بنر هیرو 🖼️</h5>
                                    <p class="description">
                                        مدیریت تصاویر و محتوای اصلی صفحه.
                                    </p>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                <a href="{{ route('services.create') }}" class="dashboard-link-card text-decoration-none">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-handshake fa-3x text-success"></i>
                                    </div>
                                    <h5 class="title mt-4">خدمات 🤝</h5>
                                    <p class="description">
                                        افزودن، ویرایش و حذف خدمات ارائه شده.
                                    </p>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                <a href="{{ route('testimonials.create') }}" class="dashboard-link-card text-decoration-none">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-comments fa-3x text-warning"></i>
                                    </div>
                                    <h5 class="title mt-4">نظرات مشتریان 💬</h5>
                                    <p class="description">
                                        مدیریت بازخوردها و نظرات کاربران.
                                    </p>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                <a href="#" class="dashboard-link-card text-decoration-none">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-chart-bar fa-3x text-info"></i>
                                    </div>
                                    <h5 class="title mt-4">آمار و گزارشات 📈</h5>
                                    <p class="description">
                                        مشاهده آمار بازدید و گزارشات وب‌سایت.
                                    </p>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                <a href="#" class="dashboard-link-card text-decoration-none">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-bell fa-3x text-danger"></i>
                                    </div>
                                    <h5 class="title mt-4">اعلان‌ها 🔔</h5>
                                    <p class="description">
                                        مدیریت اعلان‌ها و پیام‌های سیستمی.
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@push('styles')
    <style>
        :root {
            --primary-color: #4c66f7;
            --primary-gradient: linear-gradient(135deg, #4c66f7, #2d4586);
            --card-bg-color: #ffffff;
            --card-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            --card-hover-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
            --icon-bg-color: #e3f2fd;
            --text-color: #2c3e50;
            --description-color: #7f8c8d;
        }

        body {
            background-color: #f5f7fa !important;
            font-family: 'Vazirmatn', sans-serif;
            text-align: right;
            direction: rtl;
        }

        .dashboard-card {
            background-color: var(--card-bg-color);
            border-radius: 1.5rem !important;
            box-shadow: var(--card-shadow);
        }

        .bg-gradient-primary {
            background: var(--primary-gradient) !important;
        }
        
        .card-header-overlay {
            background: rgba(0, 0, 0, 0.2);
        }

        /* --- Card Styles --- */
        .dashboard-link-card {
            background-color: var(--card-bg-color);
            border: 2px solid #e9ecef;
            border-radius: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-align: center;
            padding: 3rem 2rem;
            text-decoration: none;
            color: var(--text-color);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .dashboard-link-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
            border-color: var(--primary-color);
        }
        
        .dashboard-link-card .icon-wrapper {
            background-color: var(--icon-bg-color);
            border-radius: 50%;
            display: inline-flex;
            width: 90px;
            height: 90px;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            position: relative;
            z-index: 2;
        }
        
        .dashboard-link-card:hover .icon-wrapper {
            background-color: var(--primary-color);
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 5px 20px rgba(76, 102, 247, 0.4);
        }
        
        .dashboard-link-card:hover .icon-wrapper i {
            color: #fff !important;
        }
        
        .dashboard-link-card .title {
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .dashboard-link-card:hover .title {
            color: var(--primary-color);
        }

        .dashboard-link-card .description {
            font-size: 0.9rem;
            color: var(--description-color);
            line-height: 1.6;
        }
    </style>
@endpush