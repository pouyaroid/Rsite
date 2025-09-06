<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد پنل ادمین</title>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09AyGasBodEqbWPlusYKZ5eeqypNomaU3de3dd5fIavUiC2N7SQ/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    
    <style>
        /* --- CSS Variables --- */
        :root {
            --primary-color: #4a69bd;
            --primary-hover-color: #6082d4;
            --sidebar-bg: #2c3e50;
            --sidebar-text-color: #ecf0f1;
            --sidebar-active-bg: #34495e;
            --main-bg: #f4f7fa;
            --card-bg: #ffffff;
            --text-color: #34495e;
            --shadow-color: rgba(0, 0, 0, 0.08);
            
            /* Bootstrap theme colors override */
            --bs-primary: var(--primary-color);
            --bs-success: #27ae60;
            --bs-warning: #f39c12;
            --bs-info: #3498db;
            --bs-danger: #e74c3c;
        }

        /* --- Global & Reset --- */
        body {
            font-family: 'Vazirmatn', sans-serif;
            direction: rtl;
            background-color: var(--main-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* --- Main Layout --- */
        .admin-panel {
            display: flex;
            min-height: 100vh;
        }

        /* --- Sidebar --- */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            color: var(--sidebar-text-color);
            flex-shrink: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }
        .sidebar-header { padding: 20px; text-align: center; border-bottom: 1px solid var(--sidebar-active-bg); }
        .sidebar-header h3 i { margin-left: 10px; }
        .sidebar-nav ul { list-style: none; padding: 20px 0; }
        .sidebar-nav a { display: flex; align-items: center; color: var(--sidebar-text-color); text-decoration: none; padding: 15px 25px; transition: background-color 0.2s; }
        .sidebar-nav a i { font-size: 18px; width: 25px; margin-left: 15px; text-align: center; }
        .sidebar-nav a:hover { background-color: var(--primary-hover-color); }
        .sidebar-nav a.active { background-color: var(--primary-color); border-right: 4px solid var(--sidebar-text-color); padding-right: 21px; }

        /* --- Content Wrapper --- */
        .content-wrapper {
            flex-grow: 1;
            margin-right: 260px;
            transition: margin-right 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
        }
        header { background-color: var(--card-bg); padding: 15px 30px; box-shadow: 0 2px 4px var(--shadow-color); position: sticky; top: 0; z-index: 900; display: flex; align-items: center; }
        .menu-toggle-btn { display: none; background: none; border: none; font-size: 24px; cursor: pointer; color: var(--text-color); }
        main { flex-grow: 1; } /* Main takes remaining space */

        /*
        ========================================
        >>>>> NEW STYLES FOR DASHBOARD CARDS <<<<<
        ========================================
        */
        .dashboard-card {
            overflow: hidden; /* Ensures rounded corners are applied correctly */
        }

        .bg-gradient-primary {
            background: linear-gradient(45deg, #4a69bd, #6082d4);
        }
        
        .card-header-overlay {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .z-index-1 {
            z-index: 1;
        }

        .dashboard-link-card {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            padding: 2.5rem 1.5rem;
            text-align: center;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .dashboard-link-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .dashboard-link-card .icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            margin-bottom: 1rem;
        }

        .dashboard-link-card .title {
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }

        .dashboard-link-card .description {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* --- Responsive for Mobile --- */
        @media (max-width: 768px) {
            .sidebar { transform: translateX(100%); }
            .content-wrapper { margin-right: 0; }
            .admin-panel.sidebar-open .sidebar { transform: translateX(0); }
            .menu-toggle-btn { display: block; }
        }
    </style>
</head>
<body>

    <div class="admin-panel">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h3><i class="fa-solid fa-shield-halved"></i> پنل مدیریت</h3>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#" class="active"><i class="fa-solid fa-gauge-high"></i><span>داشبورد</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i><span>کاربران</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-box-open"></i><span>محصولات</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-shopping-cart"></i><span>سفارشات</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-chart-pie"></i><span>گزارش‌ها</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-comments"></i><span>نظرات</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i><span>تنظیمات</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-sign-out-alt"></i><span>خروج</span></a></li>
                </ul>
            </nav>
        </aside>

        <div class="content-wrapper">
            <header>
                <button id="menu-toggle" class="menu-toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </header>

            <main>
                <div class="container py-5">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold"><i class="fa-solid fa-cogs text-primary me-2"></i> مدیریت بخش‌ها</h2>
                        <p class="text-muted">از اینجا می‌توانید محتوای بخش‌های مختلف سایت را مدیریت کنید</p>
                    </div>
                
                    <div class="row g-4">
                        <!-- کارت نمونه -->
                        <div class="col-lg-4 col-md-6">
                            <div class="dashboard-card p-4">
                                <div class="icon-wrapper">
                                    <i class="fas fa-image fa-2x text-primary"></i>
                                </div>
                                <h5>بنر هیرو 🖼️</h5>
                                <p class="text-muted small">مدیریت تصاویر و محتوای اصلی صفحه</p>
                                <div class="dashboard-actions d-flex justify-content-center gap-2 mt-3">
                                    <a href="{{ route('admin.mainpage.herobanner') }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i> مشاهده
                                    </a>
                                    <a href="{{ route('admin.hero-banner.create') }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i> ثبت
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                    
                        <!-- کارت دوم -->
                        <div class="col-lg-4 col-md-6">
                            <div class="dashboard-card p-4">
                                <div class="icon-wrapper">
                                    <i class="fas fa-box-open fa-2x text-success"></i>
                                </div>
                                <h5>پکیج‌ها 📦</h5>
                                <p class="text-muted small">افزودن، مدیریت و ویرایش پکیج‌ها</p>
                                <div class="dashboard-actions d-flex justify-content-center gap-2 mt-3">
                                    <a href="{{ route('packages.index') }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i> مشاهده
                                    </a>
                                    <a href="{{ route('packages.create') }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i> ثبت
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pen"></i> ویرایش
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                        <!-- کارت سوم -->
                        <div class="col-lg-4 col-md-6">
                            <div class="dashboard-card p-4">
                                <div class="icon-wrapper">
                                    <i class="fas fa-comments fa-2x text-warning"></i>
                                </div>
                                <h5>نظرات 💬</h5>
                                <p class="text-muted small">مدیریت بازخوردها و نظرات کاربران</p>
                                <div class="dashboard-actions d-flex justify-content-center gap-2 mt-3">
                                    <a href="{{ route('testimonials.index') }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i> مشاهده
                                    </a>
                                    <a href="{{ route('testimonials.create') }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i> ثبت
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pen"></i> ویرایش
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const adminPanel = document.querySelector('.admin-panel');

            menuToggle.addEventListener('click', function() {
                adminPanel.classList.toggle('sidebar-open');
            });
        });
    </script>
</body>
</html>