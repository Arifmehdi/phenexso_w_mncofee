

<?php $__env->startSection('title', 'About Us - '. ($ws->name ?? env('APP_NAME'))); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="<?php echo e($ws->meta_description ?? 'Learn more about Uttara Coffee House.'); ?>">
<meta name="keywords" content="<?php echo e($ws->meta_keywords ?? 'About, Coffee, Uttara'); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .ad-menu-banner {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/menu-banner.png')); ?>") !important;
        background-size: cover;
        background-position: center;
    }
    .about-page-discount {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/about-page-discount-bg.png')); ?>") !important;
        background-size: cover;
        background-position: center;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!--------------- 
    Banner 
---------------->
<section>
    <div class="ad-menu-banner position-relative">
        <div class="ad-menu-banner-overlay">
            <div>
                <a href="<?php echo e(route('home')); ?>">Home /</a>
                <a class="selected-page" href="<?php echo e(route('about-us')); ?>"> About</a>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="ad-about-section ad-about-page-section">
    <div class="container ad-about-container about-page-container">
        <div class="ad-about-image-container position-relative">
            <div class="ad-about-person-image">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/about-picture1.png')); ?>" alt="">
            </div>
            <div class="mt-sm-5 ad-about-side-image-container">
                <img class="ad-about-side-tea about-page-cup" src="<?php echo e(asset('mncofee/assets/img/aida-images/about-page-cup.png')); ?>" alt="">
                <img class=" ad-about-bottom-image about-page-bottom-image" src="<?php echo e(asset('mncofee/assets/img/aida-images/about-page-image.png')); ?>" alt="">
                <div class="ad-about-rounded-text about-page-rounded-text">
                    <img src="<?php echo e(asset('mncofee/assets/img/aida-images/about-page-rounded-text.png')); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="ad-about-text-container">
            <h5>about us</h5>
            <h4><?php echo e($ws->name ?? 'Cafeu'); ?> restoracia online
                <br> awesome food for you
            </h4>
            <p>
                <?php echo $ws->about_us ?? 'Quis autem vel eum iure reprehenderit qui in evoluptate velit esse qua nihil molestiae consequatur, vel illum qui dolorem eum fugiat quvoluptas nulla pariatureaqua ipsa quae ab illo'; ?>

            </p>
            <div class="ad-about-list-container">
                <div class="d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-square-check"></i>
                    <p>Project Quality Management Plan</p>
                </div>
                <div class="d-flex gap-3 align-items-center mt-2">
                    <i class="fa-regular fa-square-check"></i>
                    <p>The Ability to Delegate Tasks</p>
                </div>
                <div class="d-flex gap-3 align-items-center mt-2">
                    <i class="fa-regular fa-square-check"></i>
                    <p>It might be a finished or unfinished</p>
                </div>
                <div class="d-flex gap-3 align-items-center mt-2">
                    <i class="fa-regular fa-square-check"></i>
                    <p>Project Quality Management Plan</p>
                </div>
            </div>
            <a href="<?php echo e(route('about-us')); ?>">Read More</a>
        </div>
    </div>
</section>

<!-- Our Customers -->
<section data-aos="fade-up">
    <div class="ad-reservation about-page-shop-details">
        <div class="container ad-reservation-container about-page-shop-details-container">
            <div class="ad-reservation-single-content">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/happy-face-reservation.png')); ?>" alt="">
                <div>
                    <p>5670</p>
                    <span>Happy Customers</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-line-shape.png')); ?>" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-chef.png')); ?>" alt="">
                <div>
                    <p>29</p>
                    <span>Pationate Chef's</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-line-shape.png')); ?>" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-rice.png')); ?>" alt="">
                <div>
                    <p>260</p>
                    <span>Favourite Dishes</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape d-xs-none">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-line-shape.png')); ?>" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-review.png')); ?>" alt="">
                <div>
                    <p>778</p>
                    <span>Customer Rating</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------
    Our Chef
----------------->
<section data-aos="fade-up">
    <div class="ad-chef">
        <div class="ad-chef-title-container">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/service-icon.png')); ?>" alt="">
            <h4>Group of professional chefs</h4>
            <p>
                Our team of dedicated professionals is here to serve you.
            </p>
        </div>
        <div class="container ad-chef-container">
            <div class="position-relative ad-chef-card">
                <div class="ad-chef-single-card">
                    <div class="ad-chef-image d-flex gap-3 align-items-end">
                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/chef1.png')); ?>" class="ad-chef-person" alt="">
                            </a>
                        </div>
                        <div class="ad-chef-icon-container">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </div>
                    <a href="#">
                        <h4>Alberto Da Silva</h4>
                    </a>
                    <p>Senior Chef</p>
                </div>
            </div>
            <div class="position-relative ad-chef-card">
                <div class="ad-chef-single-card">
                    <div class="ad-chef-image d-flex gap-3 align-items-end">
                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/chef2.png')); ?>" class="ad-chef-person" alt="">
                            </a>
                        </div>
                        <div class="ad-chef-icon-container">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </div>
                    <a href="#">
                        <h4>Rachael Haynes</h4>
                    </a>
                    <p>Chef De Partie</p>
                </div>
            </div>
            <div class="position-relative ad-chef-card">
                <div class="ad-chef-single-card">
                    <div class="ad-chef-image d-flex gap-3 align-items-end">
                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/chef3.png')); ?>" class="ad-chef-person" alt="">
                            </a>
                        </div>
                        <div class="ad-chef-icon-container">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </div>
                    <a href="#">
                        <h4>James Anderson</h4>
                    </a>
                    <p>Resta Marketing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Discount -->
<section data-aos="fade-up">
    <div class="about-page-discount">
        <div class="about-page-discount-text-container">
            <p>Happy Announcement</p>
            <h4>Get 60% Flat Off
                <br> On Your First Order
            </h4>
            <a href="<?php echo e(route('shop')); ?>">
                <button>Order Now</button>
            </a>
        </div>
        <div class="about-page-discount-image">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/about-page-discount-image.png')); ?>" class="about-page-discount-image-one" alt="">
            <div class="about-page-discount-percent">
                <p>60%
                    <span>OFF</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-----------------------
    Customer Review
---------------------->
<section data-aos="fade-up">
    <div class="ad-customer-review">
        <div class="ad-review-title-container">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/service-icon.png')); ?>" alt="">
            <h4>What Our Customer Says</h4>
            <p>
                Hear from our satisfied customers about their experience with us.
            </p>
        </div>
        <div class="container position-relative">
            <div class="ad-review-bg-container">
                <div>
                    <img src="<?php echo e(asset('mncofee/assets/img/aida-images/about-page-review-bg.png')); ?>" alt="">
                </div>
                <div class="d-flex gap-3">
                    <i class="fa-solid fa-chevron-left" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></i>
                    <i class="fa-solid fa-chevron-right" data-bs-target="#carouselExampleControls" data-bs-slide="next"></i>
                </div>
            </div>
            <div>
                <div id="carouselExampleControls" class="carousel slide ad-review-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?> ad-single-review">
                            <div class="d-flex gap-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>
                                <?php echo $testimonial->text_en; ?>

                            </p>
                            <div class="ad-review-person-container">
                                <img src="<?php echo e(asset('storage/testimonials/' . ($testimonial->image ?? 'default.png'))); ?>" alt="<?php echo e($testimonial->name); ?>" style="width: 60px; height: 60px; border-radius: 50%;">
                                <div>
                                    <h4><?php echo e($testimonial->name); ?></h4>
                                    <span><?php echo e($testimonial->designation); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
$(document).ready(function() {
    var reviewCarousel = document.querySelector('#carouselExampleControls');
    if (reviewCarousel) {
        new bootstrap.Carousel(reviewCarousel, {
            interval: 5000,
            ride: 'carousel'
        });
    }
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.mncofee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/website/about.blade.php ENDPATH**/ ?>