@extends('website.layouts.mncofee')

@section('title', 'Home - '. ($ws->name ?? env('APP_NAME')))

@section('meta')
<meta name="description" content="{{ $ws->meta_description ?? 'Uttara Coffee House offers premium coffee and world-class services.' }}">
<meta name="keywords" content="{{ $ws->meta_keywords ?? 'Coffee, Uttara, quality coffee' }}">
<meta property="og:title" content="Home - {{ $ws->name ?? env('APP_NAME') }}">
<meta property="og:description" content="{{ $ws->meta_description ?? 'Discover quality coffee at Uttara Coffee House.' }}">
<meta property="og:image" content="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo()]) }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@push('css')
<style>
    .ad-banner-content {
        background-image: url("{{ asset('mncofee/assets/img/aida-images/banner-shape.png') }}") !important;
    }
</style>
@endpush

@section('content')
        <!---------------
            Banner 
        -------------->
<section>
    <div>
        <div id="carouselExample" class="carousel slide">
            
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} position-relative">
                    
                    <div class="text-end">
                        <img
                            class="ad-banner-img"
                            src="{{ asset('mncofee/assets/img/aida-images/banner.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="ad-banner-content">
                        <div class="ad-banner-text-container">
                            
                            <p>{{ $slider->sub_title ?? 'Uttara Coffee House' }}</p>

                            <h1>{{ $slider->title }}</h1>

                            <a href="{{ $slider->link ?? '#' }}">
                                <button>Read More</button>
                            </a>

                        </div>

                        <div class="ad-banner-person-container">
                            <div class="ad-banner-person">
                                <img src="{{ asset('mncofee/assets/img/aida-images/banner-person1.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</section>
{{--<section>
    <div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} position-relative">
                    <div class="text-end">
                        <img
                            class="ad-banner-img"
                            src="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}"
                            alt="{{ $slider->title }}"
                        >
                    </div>
                    <div class="ad-banner-content">
                        <div class="ad-banner-text-container">
                            <div class="ad-banner-text-effect">
                                <p>{{ $ws->name ?? 'Uttara Coffee House' }}</p>
                                <h1>{!! $slider->title !!}</h1>
                                @if($slider->link)
                                <a href="{{ $slider->link }}">
                                    <button>Read More</button>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="ad-banner-person-container">
                            <div class="ad-banner-person">
                                <img src="{{ asset('mncofee/assets/img/aida-images/banner-person1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>
                <button
                    class="carousel-control-prev ad-carousel-prev-btn"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="prev"
                >
                    <div class="ad-carousel-arrow">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </div>
                </button>
            </div>
            <div>
                <button
                    class="carousel-control-next ad-carousel-next-btn"
                    type="button"
                    data-bs-target="#carouselExample"
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
</section>--}}

<!---------------
    About Us 
-------------->
<section class="ad-about-section">
    <div class="container ad-about-container">
        <div class="ad-about-image-container position-relative">
            <div class="ad-about-person-image">
                <img src="{{ asset('mncofee/assets/img/aida-images/about-picture1.png') }}" alt="">
            </div>
            <div class="mt-md-5 mt-4 ad-about-side-image-container">
                <img class="ad-about-side-tea" src="{{ asset('mncofee/assets/img/aida-images/about-picture2.png') }}" alt="">
                <img class=" ad-about-bottom-image" src="{{ asset('mncofee/assets/img/aida-images/about-picture3.png') }}" alt="">
                <div class="ad-about-rounded-text">
                    <img src="{{ asset('mncofee/assets/img/aida-images/about-rounded-shape.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="ad-about-text-container">
            <h5>about us</h5>
            <h4>
                MN Coffee
                <br class="d-none d-xxl-block">
                Local Beans, Global Taste.
            </h4>
            <p>
                MN Coffee is a Bangladesh-based specialty coffee venture connecting hill farmers with urban cafés through a direct farm-to-market supply chain. We focus on improving quality, traceability, and farmer income by developing local Arabica production and better post-harvest practices.
            </p>
            <div class="ad-about-list-container">
                <div class="d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-square-check"></i>
                    <p>B2B supply of roasted coffee beans (Arabica & Robusta)</p>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-square-check"></i>
                    <p>Direct sourcing from Bandarban hill farmers</p>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-square-check"></i>
                    <p>Custom roast profiles for cafés</p>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-square-check"></i>
                    <p>Quality-controlled and traceable coffee supply</p>
                </div>
            </div>
            <a href="{{ route('about-us') }}">Read More</a>
        </div>
    </div>
</section>

<!---------------
    Video Section
-------------->
<section>
    <div class="ad-video-container position-relative">
        <img src="{{ asset('mncofee/assets/img/aida-images/video-shape.png') }}" alt="">
        <div class="ad-video-icon">
            <a class="text-decoration-none" href="https://youtu.be/Z6Dx-o3vfJY?si=_7CxQt0bH6A0VuJL" data-fslightbox>
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</section>

<!-------------------
    Quality Service (Departments/Services)
----------------->
<section data-aos="fade-up">
    <div class="ad-service">
        <div class="ad-service-title-container">
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
            <h4>Our Specialty Process</h4>
            <p>
                From direct farm sourcing to custom roasting, discover how we bring the best coffee to your cup.
            </p>
        </div>
        <div class="container ad-service-container">
            @foreach($departments->take(3) as $dept)
            <div class="ad-single-service position-relative">
                <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $dept->image ?? 'default.png']) }}" alt="{{ $dept->name_en }}" style="max-height: 100px; width: auto; margin-bottom: 20px;">
                <h5>{{ $dept->name_en }}</h5>
                <p>
                    {{ Str::limit($dept->excerpt_en, 100) }}
                </p>
                <a href="{{ route('service') }}" class="ad-service-btn">Read More</a>
                <img class="w-100 ad-service-image" src="{{ asset('mncofee/assets/img/aida-images/service-image1.png') }}" alt="">
                <div class="ad-single-service-overlay">
                    <div>
                        <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $dept->image ?? 'default.png']) }}" alt="{{ $dept->name_en }}" style="max-height: 80px; width: auto; margin-bottom: 10px;">
                        <h5>{{ $dept->name_en }}</h5>
                        <p>
                            {{ Str::limit($dept->excerpt_en, 150) }}
                        </p>
                        <a href="{{ route('service') }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-------------------
    Special Offer (Products by Category)
----------------->
<section data-aos="fade-up">
    <div class="ad-offer">
        <div class="ad-offer-title-container">
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
            <h4>Try Our Special Offers</h4>
            <p>
                Check out our featured products and special deals.
            </p>
        </div>
        <ul class="nav ad-offer-tab-container" id="myTab" role="tablist">
            @foreach($categories->take(6) as $key => $category)
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link {{ $key == 0 ? 'active' : '' }}"
                    id="cat-{{ $category->id }}-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#cat-{{ $category->id }}-tab-pane"
                    type="button"
                    role="tab"
                    aria-controls="cat-{{ $category->id }}-tab-pane"
                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}"
                >
                    {{ strtoupper($category->name_en) }}
                </button>
            </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach($categories->take(6) as $key => $category)
            <div
                class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                id="cat-{{ $category->id }}-tab-pane"
                role="tabpanel"
                aria-labelledby="cat-{{ $category->id }}-tab"
                tabindex="0"
            >
                <div class="container ad-offer-container">
                    @foreach($category->products->where('feature', 1)->take(6) as $product)
                    <div class="ad-offer-single-card h-auto py-3">
                        <div class="">
                            <a href="{{ route('productDetails', $product->slug) }}">
                                <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}" alt="{{ $product->name_en }}" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%;">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-baseline gap-2">
                                <div class="ad-offer-card-text-container flex-grow-1">
                                    <div class="d-flex flex-column">
                                        <small class="text-uppercase text-muted" style="font-size: 10px;">
                                            @foreach ($product->categories as $cat)
                                                {{ $cat->name_en }}@if(!$loop->last), @endif
                                            @endforeach
                                        </small>
                                        <h5 class="mb-0" style="width: auto; max-width: 260px;">{{ strtoupper($product->name_en) }}</h5>
                                    </div>
                                    <div class="d-none d-md-flex flex-grow-1 align-items-center">
                                        <span class="ad-offer-dotted w-100" style="border-bottom: 2px dotted #A45517; height: 1px; margin-bottom: 8px;"></span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="d-flex flex-column">
                                       {{-- @if($product->discount > 0)
                                            <span class="text-muted text-decoration-line-through small" style="font-size: 12px;">
                                                ৳{{ number_format($product->price, 2) }}
                                            </span>
                                        @endif--}}
                                        <span class="ad-offer-price" style="font-size: 24px;"> ৳{{ number_format($product->selling_price, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-2">{{ Str::limit(strip_tags($product->description_en), 80) }}</p>
                            <div class="mt-2 productCartItem" data-product="{{ $product->id }}" style="max-width: 220px;">
                                @include('frontend.home.includes.productCartItem')
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="ad-offer-bottom-container">
            <div class="ad-offer-bottom-text-container">
                <div class="grad-border">
                    <div class="left-border"></div>
                    <div class="right-border"></div>
                </div>
                <h5>During winter daily from 7:30 am to 9.30 pm</h5>
                <div class="grad-border">
                    <div class="left-border"></div>
                    <div class="right-border"></div>
                </div>
            </div>
            <a href="{{ route('shop') }}">
                <button>
                    Order Online
                </button>
            </a>
        </div>
    </div>
</section>

<!-------------------
    Our Chef (Placeholder or Team)
----------------->
{{-- <section data-aos="fade-up">
    <div class="ad-chef">
        <div class="ad-chef-title-container">
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
            <h4>Specialty Coffee Experts</h4>
            <p>
                Our team of dedicated coffee professionals ensures the highest quality in every bean.
            </p>
        </div>
        <div class="container ad-chef-container">
            <div class="position-relative ad-chef-card">
                <div class="ad-chef-single-card">
                    <div class="ad-chef-image d-flex gap-3 align-items-end">
                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="{{ asset('mncofee/assets/img/aida-images/chef1.png') }}" class="ad-chef-person" alt="">
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
                                <img src="{{ asset('mncofee/assets/img/aida-images/chef2.png') }}" class="ad-chef-person" alt="">
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
                                <img src="{{ asset('mncofee/assets/img/aida-images/chef3.png') }}" class="ad-chef-person" alt="">
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
</section>--}}

<!-----------------------
    Online Reservation
---------------------->
<section data-aos="fade-up">
    <div class="ad-reservation position-relative">
        <div class="d-flex justify-content-center">
            <div class="ad-reservation-form-container">
                <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
                <h4>Online Reservation</h4>
                <div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row ad-reservation-form">
                            <div class="col-12 col-sm-6 position-relative">
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Name"
                                    required
                                >
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="col-12 col-sm-6 position-relative">
                                <input
                                    type="text"
                                    name="phone"
                                    placeholder="Phone"
                                    required
                                >
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div class="row ad-reservation-form">
                            <div class="col-12 col-sm-6 position-relative">
                                <select name="persons" id="">
                                    <option value="" selected disabled hidden>Persons</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4+">5+</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 position-relative">
                                <select name="location" id="">
                                    <option value="" selected disabled hidden>Location</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Uttara">Uttara</option>
                                    <option value="Nikunjo">Nikunjo</option>
                                    <option value="Khilkhet">Khilkhet</option>
                                </select>
                            </div>
                        </div>
                        <div class="row ad-reservation-form">
                            <div class="col-sm-6 col-12 position-relative">
                                <input
                                    type="date"
                                    name="date"
                                    placeholder="Date"
                                >
                            </div>
                            <div class="col-12 col-sm-6 position-relative">
                                <input
                                    type="time"
                                    name="time"
                                    placeholder="Time"
                                >
                            </div>
                        </div>
                        <button type="submit">Book A Table</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container ad-reservation-container">
            <div class="ad-reservation-single-content">
                <img src="{{ asset('mncofee/assets/img/aida-images/happy-face-reservation.png') }}" alt="">
                <div>
                    <p>5670</p>
                    <span>Happy Customers</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-line-shape.png') }}" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-chef.png') }}" alt="">
                <div>
                    <p>29</p>
                    <span>Pationate Chef's</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-line-shape.png') }}" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-rice.png') }}" alt="">
                <div>
                    <p>260</p>
                    <span>Favourite Dishes</span>
                </div>
            </div>
            <div class="ad-reservation-line-shape d-xs-none">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-line-shape.png') }}" alt="">
            </div>
            <div class="ad-reservation-single-content">
                <img src="{{ asset('mncofee/assets/img/aida-images/reservation-review.png') }}" alt="">
                <div>
                    <p>778</p>
                    <span>Customer Rating</span>
                </div>
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
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
            <h4>What Our Customer Says</h4>
            <p>
                Hear from our satisfied customers about their experience with us.
            </p>
        </div>
        <div class="container position-relative">
            <div class="ad-review-bg-container">
                <div class="overflow-hidden">
                    <img src="{{ asset('mncofee/assets/img/aida-images/review-bg-person.png') }}" alt="">
                </div>
                <div class="d-flex gap-3">
                    <i class="fa-solid fa-chevron-left" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></i>
                    <i class="fa-solid fa-chevron-right" data-bs-target="#carouselExampleControls" data-bs-slide="next"></i>
                </div>
            </div>
            <div>
                <div id="carouselExampleControls" class="carousel slide ad-review-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($testimonials as $key => $testimonial)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ad-single-review">
                            <div class="d-flex gap-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>
                                {!! $testimonial->text_en !!}
                            </p>
                            <div class="ad-review-person-container">
                                <img src="{{ asset('storage/' . ($testimonial->image ?? 'default.png')) }}" alt="{{ $testimonial->name }}" style="width: 60px; height: 60px; border-radius: 50%;">
                                <div>
                                    <h4>{{ $testimonial->name }}</h4>
                                    <span>{{ $testimonial->designation }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----------------------
    Blog & Article 
---------------------->
<section data-aos="fade-up">
    <div class="ad-article">
        <div class="ad-article-title-container">
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="">
            <h4>Blog & Articles</h4>
            <p>
                Stay updated with our latest news and recipes.
            </p>
        </div>
        <div class="container ad-article-container">
            @foreach($newses as $news)
            <div class="ad-single-card">
                <a href="{{ route('singleNews', $news->id) }}">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <div class="overflow-hidden">
                    <a href="{{ route('singleNews', $news->id) }}">
                        <img src="{{ route('imagecache', ['template'=>'original','filename' => $news->fi() ?? 'default.png']) }}" class="ad-blog-image" alt="{{ $news->title }}">
                    </a>
                </div>
                <p>NEWS . {{ $news->created_at->format('M d, Y') }}</p>
                <a href="{{ route('singleNews', $news->id) }}">
                    <h4>{{ $news->title }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    // Explicitly initialize Bootstrap Carousels
    var myCarousel = document.querySelector('#carouselExample');
    if (myCarousel) {
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            ride: 'carousel'
        });
    }

    var reviewCarousel = document.querySelector('#carouselExampleControls');
    if (reviewCarousel) {
        var rCarousel = new bootstrap.Carousel(reviewCarousel, {
            interval: 5000,
            ride: 'carousel'
        });
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// Add to Cart
$(document).on("click", ".addToCart", function () {
    let btn = $(this);
    let url = btn.data("url");
    let product_id = btn.data("product");
    let qty = parseInt(btn.closest(".cart-action-wrapper").find(".product_qty").val()) || 1;

    $.post(url, { product: product_id, qty: qty }, function (res) {
        if (res.status) {
            // Find the specific container for this product to update its HTML
            $(`.productCartItem[data-product="${product_id}"]`).html(res.productCartItem);
            
            $(".cartCount").text(res.cartCount);
            $(".cartItemsCount").text(res.cartItemsCount);
            if(res.cartTotal) {
                $(".cartTotalPrice").text(parseFloat(res.cartTotal).toFixed(2) + " tk");
            }

            Swal.fire({
                toast: true, 
                icon: "success", 
                title: res.message,
                position: "top-end", 
                timer: 2000, 
                showConfirmButton: false
            });
        }
    }).fail(() => {
        Swal.fire("Error", "Could not add to cart.", "error");
    });
});

// Update Cart Item
$(document).on('click', '.updateCartItem', function (e) {
    e.preventDefault();

    let $btn = $(this);
    let cartId = $btn.data('cart');
    let url = $btn.data('url');
    let $wrapper = $btn.closest('.cart-action-wrapper');
    let product_id = $wrapper.data('product');
    let qty = parseInt($wrapper.find('.cartQtyDisplay').text()) || 0;

    if ($btn.hasClass('plus')) {
        qty++;
    } else if ($btn.hasClass('minus')) {
        qty--;
        if (qty < 0) qty = 0;
    }

    $btn.prop('disabled', true);

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            cart: cartId,
            new_qty: qty
        },
        success: function (res) {
            if (res.status) {
                if (qty === 0) {
                    $wrapper.closest(".productCartItem").html(`
                        <div class="cart-action-wrapper" data-product="${product_id}">
                            <div class="add-to-cart-initial-btn">
                                <button class="btn btn-primary btn-sm rounded-pill w-100 addToCart" 
                                        data-url="${res.add_to_cart_url}"
                                        data-product="${product_id}"
                                        style="height: 38px; background-color: #A45517; border-color: #A45517;">
                                    Add to Cart
                                </button>
                                <input type="hidden" name="product_qty" value="1" class="product_qty">
                            </div>
                        </div>
                    `);
                } else {
                    $wrapper.find('.cartQtyDisplay').text(qty);
                }

                $('.cartCount').text(res.cartCount);
                $('.cartItemsCount').text(res.cartItemsCount);
                if(res.cartTotal) {
                    $(".cartTotalPrice").text(parseFloat(res.cartTotal).toFixed(2) + " tk");
                }
            }
        },
        error: function () {
            alert('Something went wrong! Please try again.');
        },
        complete: function () {
            $btn.prop('disabled', false);
        }
    });
});
</script>
@endpush
