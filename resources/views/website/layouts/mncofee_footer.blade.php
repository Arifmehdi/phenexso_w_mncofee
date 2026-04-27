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
                    <a href="{{ route('home') }}">
                        <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo()]) }}" alt="{{ $ws->name }}" style="max-height: 50px;">
                    </a>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            {{ $ws->address ?? '4920 Trails End Road Ft United States, FL 33311' }}
                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <p>
                            {{ $ws->email ?? 'info@example.com' }}
                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                            <a href="tel:{{ $ws->phone ?? '+123 456 679 123' }}">
                                {{ $ws->phone ?? '+123 456 679 123' }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <h5>Our Services</h5>
                    <ul>
                        <li>
                            <a href="{{ route('about-us') }}">Fast Delivery</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">Vegan Cuisine</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">Fresh Products</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">Skilled Chefs</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">Great Coffee</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ad-footer-list">
                    <h5>Quick Links</h5>
                    <ul>
                        <li>
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('testimonial') }}">Testimonials</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact Us</a>
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
            <p>{{ $ws->copyright ?? 'Codebasket © 2023. All Rights Reserved.' }}</p>
            <img src="{{ asset('mncofee/assets/img/aida-images/payment.png') }}" alt="payment">
        </div>
    </div>
</footer>
