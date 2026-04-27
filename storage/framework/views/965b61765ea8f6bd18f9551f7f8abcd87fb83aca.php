<style>
/* ===============================
   HEADER FIX STYLES
================================*/
#header {
    position: relative;
    overflow: visible !important;
}
.header-body {
    position: relative;
}
.header-body::after {
    content: "";
    position: absolute;
    bottom: -54px;
    left: 0;
    right: 0;
    height: 100px;
    background-image: url('<?php echo e(asset('frontend/assets/img/header.webp')); ?>');
    background-repeat: repeat-x;
    background-size: 400px 100%;
    background-position: bottom;
    pointer-events: none;
    z-index: -1;
}

/* ---- Logo ---- */
.logo-img {
    height: 100px;
    width: auto;
    transition: all 0.3s ease;
}
.logo-text {
    font-size: clamp(16px, 1.2vw, 24px);
    font-weight: bold;
    color: #0A53A3;
    margin-left: 10px;
    white-space: nowrap;
}

/* ---- Header layout ---- */
.header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
}

/* ---- Navigation ---- */
.header-nav-main nav ul {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    gap: 10px;
    transition: all 0.3s ease;
}
.nav-link {
    font-size: clamp(14px, 1vw, 18px);
    font-weight: 500;
    color: #333;
    white-space: nowrap;
    padding: 8px 12px !important;
}
.nav-link:hover,
.nav-link.active {
    color: #007bff;
}

/* ---- Responsive adjustments ---- */
@media (max-width: 1320px) {
    .logo-img {
        height: 85px;
    }
    .logo-text {
        font-size: 18px;
    }
    .nav-link {
        font-size: 15px;
        padding: 8px 10px !important;
    }
    .header-nav-main nav ul {
        gap: 8px;
    }
}

/* Special fix for 992px-1008px range */
@media (max-width: 1272px) and (min-width: 993px) {
    .logo-img {
        height: 80px;
    }
    .logo-text {
        font-size: 18px;
    }
    .nav-link {
        font-size: 13px;
        padding: 6px 8px !important;
    }
    .header-nav-main nav ul {
        gap: 5px;
    }
    .header-container {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
}

/* ===============================
   MOBILE MENU FIXES
================================*/
@media (max-width: 992px) {
    .header-nav-main nav {
        width: 100%;
    }
    .logo-img {
        height: 60px;
    }
    .logo-text {
        font-size: 15px;
    }
    .header-row {
        flex-wrap: wrap;
    }
    .header-btn-collapse-nav {
        display: block;
    }
    
    /* Mobile menu alignment fix */
    .header-nav-main nav ul {
        text-align: left !important;
        justify-content: flex-start !important;
        align-items: flex-start !important;
        padding-left: 0;
        flex-direction: column;
        gap: 0;
    }
    
    .header-nav-main nav ul li {
        width: 100%;
        text-align: left;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }
    
    .header-nav-main nav ul li a {
        justify-content: flex-start !important;
        padding-left: 0 !important;
        padding: 12px 15px !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    /* Mobile dropdown specific styles */
    .header-nav-main .dropdown {
        position: relative;
    }
    
    .header-nav-main .dropdown-menu {
        position: static !important;
        width: 100% !important;
        transform: none !important;
        margin-top: 0 !important;
        border: none !important;
        box-shadow: none !important;
        background-color: #f8f9fa;
        padding: 0 !important;
        transition: all 0.3s ease-in-out;
        display: block !important;
        opacity: 0;
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }
    
    .header-nav-main .dropdown.show .dropdown-menu {
        opacity: 1;
        visibility: visible;
        height: auto;
        padding: 0.5rem 0 !important;
        border-top: 1px solid rgba(0,0,0,0.1) !important;
    }
    
    .header-nav-main .dropdown-item {
        padding: 10px 30px !important;
        width: 100%;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .header-nav-main .dropdown-item:last-child {
        border-bottom: none;
    }
    
    /* Mobile dropdown toggle arrow */
    .header-nav-main .dropdown-toggle::after {
        float: right;
        margin-top: 5px;
        transition: transform 0.3s ease;
    }
    
    .header-nav-main .dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg);
    }
    
    /* Language dropdown specific fixes */
    .header-nav-main .dropdown .dropdown-menu.dropdown-menu-end {
        left: 0 !important;
        right: auto !important;
    }
}

/* ===============================
   DROPDOWN SMOOTH ANIMATION FOR ALL SCREENS
================================*/
.header-nav-main .dropdown-menu {
    transition: all 0.3s ease-in-out;
}

/* Prevent Bootstrap's default toggle */
.header-nav-main .collapse:not(.show) {
    display: none;
}

.header-nav-main .collapsing {
    transition: height 0.35s ease;
}
</style>

<header id="header" class="header-effect-shrink position-relative"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 120}">

    <div class="header-body border-top-0"
        style="background-color: #ffffff; background-image: url('<?php echo e(asset('frontend/assets/img/milk-drop-pattern.webp')); ?>'); background-repeat: repeat-x; background-size: 400px 100%; background-position: bottom;">

        <div class="header-container container-row px-3 px-md-4 px-lg-5" style="height:175px !important;">
            <div class="header-row align-items-center justify-content-between flex-nowrap">

                <!-- Left: Logo & Text -->
                <div class="header-column flex-grow-1 flex-shrink-1">
                    <div class="header-row">
                        <div class="header-logo d-flex align-items-center flex-nowrap">
                            <a href="<?php echo e(route('home')); ?>" class="d-flex align-items-center text-decoration-none">
                                <img alt="<?php echo e($ws->website_title ?? ''); ?>"
                                    src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()])); ?>"
                                    class="logo-img">
                                <span class="logo-text ms-2"><?php echo e(__('general.logo_name')); ?></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Navigation -->
                <div class="header-column justify-content-end flex-shrink-0">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse navbar-collapse">
                                    <ul class="nav nav-pills d-flex align-items-center flex-nowrap mb-0" id="mainNav">
                                        <li><a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
                                        <li><a class="nav-link <?php echo e(request()->routeIs('shop.shasthoseba') ? 'active' : ''); ?>" href="<?php echo e(route('shop.shasthoseba')); ?>"><?php echo e(__('Products')); ?></a></li>
                                        <!-- About US -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo e(__('About Us')); ?></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo e(route('mdMessage')); ?>"><?php echo e(__('MD Message')); ?></a></li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('testimonial')); ?>"><?php echo e(__('Testimonial')); ?></a></li>
                                            </ul>
                                        </li>

                                        <!-- Gallery -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo e(__('Gallery')); ?></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo e(route('image.galleries')); ?>"><?php echo e(__('Photo Gallery')); ?></a></li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('video.galleries')); ?>"><?php echo e(__('Video Gallery')); ?></a></li>
                                            </ul>
                                        </li>

                                        <!-- Qurbani -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo e(__('Qurbani')); ?></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo e(route('qurbani.occation')); ?>"><?php echo e(__('Personal Qurbani')); ?></a></li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('qurbani.regular')); ?>"><?php echo e(__('Shared Qurbani')); ?></a></li>
                                            </ul>
                                        </li>

                                        <li><a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a></li>

                                        <!-- Auth -->
                                        <?php if(Auth::check()): ?>
                                            <?php $user = auth()->user(); ?>
                                            <li class="dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e($user->name); ?></a>
                                                <ul class="dropdown-menu">
                                                    <?php if($user->hasRole('admin')): ?>
                                                        <li><a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Admin Dashboard')); ?></a></li>
                                                    <?php endif; ?>
                                                    <li><a class="dropdown-item" href="<?php echo e(route('user.dashboard')); ?>"><?php echo e(__('Member Dashboard')); ?></a></li>
                                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><?php echo e(__('Logout')); ?></a></li>
                                                </ul>
                                            </li>
                                        <?php else: ?>
                                            <li><a class="nav-link <?php echo e(request()->routeIs('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                                        <?php endif; ?>

                                        <!-- Language -->
                                        <li class="dropdown">
                                            <?php $locale = app()->getLocale() ?? 'bn'; ?>
                                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-globe"></i> <span><?php echo e(__('Language')); ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 <?php echo e($locale === 'en' ? 'active' : ''); ?>" href="<?php echo e(route('welcome.changeLanguage', ['lang' => 'en'])); ?>"><img src="https://flagcdn.com/w20/gb.png" width="20"> English</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 <?php echo e($locale === 'bn' ? 'active' : ''); ?>" href="<?php echo e(route('welcome.changeLanguage', ['lang' => 'bn'])); ?>"><img src="https://flagcdn.com/w20/bd.png" width="20"> বাংলা</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Collapse Button -->
                            <button class="btn header-btn-collapse-nav d-lg-none ms-2" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu dropdown functionality
    const dropdownToggles = document.querySelectorAll('.header-nav-main .dropdown-toggle');
    const isMobile = window.innerWidth <= 992;
    
    if (isMobile) {
        dropdownToggles.forEach(toggle => {
            // Remove Bootstrap's default behavior on mobile
            toggle.setAttribute('data-bs-toggle', '');
            
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                
                const parent = this.closest('.dropdown');
                const menu = parent.querySelector('.dropdown-menu');
                
                // Toggle the dropdown
                parent.classList.toggle('show');
                menu.classList.toggle('show');
                
                // Close other dropdowns
                document.querySelectorAll('.header-nav-main .dropdown.show').forEach(open => {
                    if (open !== parent) {
                        open.classList.remove('show');
                        open.querySelector('.dropdown-menu').classList.remove('show');
                    }
                });
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.header-nav-main .dropdown')) {
                document.querySelectorAll('.header-nav-main .dropdown.show').forEach(open => {
                    open.classList.remove('show');
                    open.querySelector('.dropdown-menu').classList.remove('show');
                });
            }
        });
    }
});
</script><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/frontend/layouts/ecommerceheader.blade.php ENDPATH**/ ?>