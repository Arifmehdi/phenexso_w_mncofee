<footer data-aos="fade-up">
    <div class="ad-footer position-relative">
        <div class="container">
            <div class="ad-footer-subscribe">
                <h4>Our Newsletter Now</h4>
                <div class="position-relative">
                    <input type="text" placeholder="Your Email Address">
                    <a href="#">
                        <button>Subscribe</button>
                    </a>
                </div>
            </div>
            <div class="ad-footer-border"></div>
            <div class="ad-footer-list-container row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->logo()])); ?>" alt="<?php echo e($ws->name); ?>" style="max-height: 50px;">
                    </a>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            <?php echo e($ws->address ?? '4920 Trails End Road Ft United States, FL 33311'); ?>

                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <p>
                            <?php echo e($ws->email ?? 'info@example.com'); ?>

                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                            <a href="tel:<?php echo e($ws->phone ?? '+123 456 679 123'); ?>">
                                <?php echo e($ws->phone ?? '+123 456 679 123'); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <h5>Our Services</h5>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">Fast Delivery</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">Vegan Cuisine</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">Fresh Products</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">Skilled Chefs</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">Great Coffee</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <h5>Quick Links</h5>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('about-us')); ?>">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('testimonial')); ?>">Testimonials</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('shop')); ?>">Shop</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('news')); ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <h5>Opening Hours</h5>
                    <ul>
                        <li>
                            Mon -
                            <span class="ad-footer-list-opening-timer">from 8am to 9pm</span>
                        </li>
                        <li>
                            Saturday -
                            <span class="ad-footer-list-opening-timer">from 9am to 4pm</span>
                        </li>
                        <li>
                            Sunday -
                            <span class="ad-footer-list-opening-timer">from 8am to 9pm</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ad-footer-bottom">
            <p><?php echo e($ws->copyright ?? 'Codebasket © 2023. All Rights Reserved.'); ?></p>
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/payment.png')); ?>" alt="payment">
        </div>
    </div>
</footer>
<?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/website/layouts/mncofee_footer.blade.php ENDPATH**/ ?>