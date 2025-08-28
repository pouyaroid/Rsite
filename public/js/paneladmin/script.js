class ModernAdminPanel {
    constructor() {
        this.sidebar = document.getElementById('sidebar');
        this.mainContent = document.getElementById('mainContent');
        this.toggleBtn = document.getElementById('toggleBtn');
        this.currentSection = 'dashboard';
        
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.initCharts();
        this.animateCounters();
        this.setupResponsive();
    }

    setupEventListeners() {
        // Toggle sidebar
        this.toggleBtn.addEventListener('click', () => {
            this.toggleSidebar();
        });

        // Navigation
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const section = item.getAttribute('data-section');
                if (section) {
                    this.switchSection(section);
                    this.setActiveNav(item);
                }
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                this.handleSearch(e.target.value);
            });
        }
    }

    toggleSidebar() {
        if (window.innerWidth > 1024) {
            this.sidebar.classList.toggle('collapsed');
            this.mainContent.classList.toggle('expanded');
        } else {
            this.sidebar.classList.toggle('show');
        }
    }

    switchSection(sectionId) {
        // Hide all sections
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.remove('active');
        });

        // Show target section
        const targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.classList.add('active');
            this.currentSection = sectionId;
        }
    }

    setActiveNav(activeItem) {
        document.querySelectorAll('.nav-item').forEach(item => {
            item.classList.remove('active');
        });
        activeItem.classList.add('active');
    }

    animateCounters() {
        const counters = document.querySelectorAll('.stat-value[data-target]');
        
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * (end - start) + start);
                
                if (end > 1000000) {
                    element.textContent = (current / 1000000).toFixed(1) + 'M';
                } else if (end > 1000) {
                    element.textContent = (current / 1000).toFixed(1) + 'K';
                } else {
                    element.textContent = current.toLocaleString('fa-IR');
                }
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-target'));
                    animateValue(entry.target, 0, target, 2000);
                    observer.unobserve(entry.target);
                }
            });
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    }

    initCharts() {
        // Sales Chart
        const salesCtx = document.getElementById('salesChart');
        if (salesCtx) {
            new Chart(salesCtx.getContext('2d'), {
                type: 'line',
                data: {
                    labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور'],
                    datasets: [{
                        label: 'فروش (میلیون تومان)',
                        data: [120, 190, 300, 500, 200, 300],
                        borderColor: '#A53860',
                        backgroundColor: 'rgba(165, 56, 96, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#A53860',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(165, 56, 96, 0.1)'
                            },
                            ticks: {
                                color: '#6b7280'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#6b7280'
                            }
                        }
                    }
                }
            });
        }

        // Analytics Chart
        const analyticsCtx = document.getElementById('analyticsChart');
        if (analyticsCtx) {
            new Chart(analyticsCtx.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['دسکتاپ', 'موبایل', 'تبلت'],
                    datasets: [{
                        data: [55, 35, 10],
                        backgroundColor: [
                            '#3A0519',
                            '#A53860',
                            '#EF88AD'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    }
                }
            });
        }
    }

    setupResponsive() {
        window.addEventListener('resize', () => {
            if (window.innerWidth <= 1024) {
                this.sidebar.classList.remove('collapsed');
                this.mainContent.classList.remove('expanded');
            }
        });

        // Close sidebar on mobile when clicking outside
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024 && 
                !this.sidebar.contains(e.target) && 
                !this.toggleBtn.contains(e.target) &&
                this.sidebar.classList.contains('show')) {
                this.sidebar.classList.remove('show');
            }
        });
    }

    handleSearch(query) {
        console.log('جستجو برای:', query);
        // Implement search functionality
    }

    showNotification(message, type = 'success') {
        // Create and show notification
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            left: 20px;
            background: ${type === 'success' ? '#A53860' : '#dc2626'};
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            font-weight: 500;
            z-index: 9999;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            box-shadow: 0 10px 25px rgba(58, 5, 25, 0.3);
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(-100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
}

// Initialize admin panel
document.addEventListener('DOMContentLoaded', () => {
    new ModernAdminPanel();
});