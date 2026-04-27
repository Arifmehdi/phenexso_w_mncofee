

<?php $__env->startSection('title', 'Our Process - '. ($ws->name ?? env('APP_NAME'))); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="Learn about our process and how we serve you better at <?php echo e($ws->name ?? env('APP_NAME')); ?>.">
<meta name="keywords" content="Process, Service, Reservation, Coffee, Uttara">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .ad-menu-banner {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/menu-banner.png')); ?>") !important;
        background-size: cover;
        background-position: center;
    }
    .reservation-page-subscribe {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/reservation-page-subscribe-bg.png')); ?>") !important;
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
                <a class="selected-page" href="<?php echo e(route('service')); ?>"> Our Process</a>
            </div>
        </div>
    </div>
</section>

<!-- Reservation / Process Section -->
<section class="position-relative" data-aos="fade-up">
    <div class="reservation-page">
        <div class="reservation-page-title-container">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/service-icon.png')); ?>" alt="" />
            <h4>How We Work</h4>
            <p>
                Discover our step-by-step process of delivering quality service to our customers.
                From selection to your doorstep, we ensure excellence.
            </p>
        </div>

        <div class="reservation-page-direction-container">
            <div class="reservation-page-single-direction">
                <p>01</p>
                <h6>Quality Check</h6>
            </div>
            <div class="reservation-page-direction">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-page-direction-image1.png')); ?>" alt="" />
            </div>
            <div class="reservation-page-single-direction reservation-page-single-middle-direction">
                <p>02</p>
                <h6>Preparation</h6>
            </div>
            <div class="reservation-page-right-direction">
                <img src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-page-direction-image2.png')); ?>" alt="" />
            </div>
            <div class="reservation-page-single-direction">
                <p>03</p>
                <h6>Delivery</h6>
            </div>
        </div>
    </div>

    <!-- Booking Form Integrated into Process -->
    <form class="reservation-page-form" action="<?php echo e(route('contact.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="reservation-page-form-container">
            <select name="location" id="" class="reservation-page-select-field" required>
                <option value="" selected disabled hidden>
                    Which Branch?
                </option>
                <option value="Mirpur">Mirpur</option>
                <option value="Uttara">Uttara</option>
                <option value="Nikunja">Nikunja</option>
                <option value="Khilkhet">Khilkhet</option>
            </select>
            <input
                name="date"
                placeholder="Select Date*"
                class="textbox-n"
                type="date"
                required
            />
            <input name="time" placeholder="Start Time *" type="time" required />
            <select
                name="persons"
                id=""
                class="reservation-page-select-field"
                required
            >
                <option value="" selected disabled hidden>
                    How many people? *
                </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
            </select>
        </div>
        <div class="text-center mt-3">
            <button type="submit">Book Now</button>
        </div>
    </form>
</section>

<!-- Subscribe -->
<section data-aos="fade-up">
    <div class="reservation-page-subscribe">
        <div class="reservation-page-subscribe-container">
            <div class="w-xxl-50 w-75">
                <h5>Never Miss An Update</h5>
                <p>
                    Subscribe to our newsletter to receive the latest updates, news, and special offers directly in your inbox.
                </p>
            </div>
            <div class="w-xxl-50 w-75 d-flex align-items-center">
                <input type="email" placeholder="Enter Email" required />
                <button type="submit" style="background: transparent; border: none; color: white;">Subscribe</button>
            </div>
        </div>
    </div>
</section>

<!-- Video / Private Events -->
<section data-aos="fade-up">
    <div class="reservation-page-video">
        <div class="reservation-page-title-container">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/service-icon.png')); ?>" alt="" />
            <h4>Book For Private Events</h4>
        </div>
        <div id="videoCarousel" class="carousel slide reservation-page-video-slider" data-bs-ride="carousel">
            <div class="carousel-inner reservation-page-video-container">
                <div class="carousel-item active position-relative">
                    <div class="text-center">
                        <img
                            class="ad-banner-img"
                            src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-page-video-image.png')); ?>"
                            alt="Private Events"
                        />
                    </div>
                    <div class="ad-video-icon reservation-page-video-icon">
                        <a
                            class="text-decoration-none"
                            href="https://youtu.be/Z6Dx-o3vfJY?si=_7CxQt0bH6A0VuJL"
                            data-fslightbox
                        >
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
                <!-- Duplicate items as per template -->
                <div class="carousel-item position-relative">
                    <div class="text-center">
                        <img
                            class="ad-banner-img"
                            src="<?php echo e(asset('mncofee/assets/img/aida-images/reservation-page-video-image.png')); ?>"
                            alt="Private Events"
                        />
                    </div>
                    <div class="ad-video-icon reservation-page-video-icon">
                        <a
                            class="text-decoration-none"
                            href="https://youtu.be/Z6Dx-o3vfJY?si=_7CxQt0bH6A0VuJL"
                            data-fslightbox
                        >
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="reservation-page-video-btn-container">
                <button
                    class="carousel-control-prev reservation-page-video-prev-btn"
                    type="button"
                    data-bs-target="#videoCarousel"
                    data-bs-slide="prev"
                >
                    <div class="ad-carousel-arrow">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </div>
                </button>
                <button
                    class="carousel-control-next reservation-page-video-next-btn"
                    type="button"
                    data-bs-target="#videoCarousel"
                    data-bs-slide="next"
                >
                    <div class="ad-carousel-arrow">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('mncofee/assets/js/fslightbox/fslightbox.js')); ?>"></script>
<script>
$(document).ready(function() {
    var videoCarousel = document.querySelector('#videoCarousel');
    if (videoCarousel) {
        new bootstrap.Carousel(videoCarousel, {
            interval: 5000,
            ride: 'carousel'
        });
    }
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.mncofee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/website/process.blade.php ENDPATH**/ ?>