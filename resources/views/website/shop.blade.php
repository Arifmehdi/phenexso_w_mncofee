@extends('website.layouts.mncofee')

@section('title', 'Menu - '. ($ws->name ?? env('APP_NAME')))

@section('meta')
<meta name="description" content="Explore our menu and products at {{ $ws->name ?? env('APP_NAME') }}.">
<meta name="keywords" content="Menu, Coffee, Food, Uttara">
@endsection

@push('css')
<style>
    .ad-menu-banner {
        background-image: url("{{ asset('mncofee/assets/img/aida-images/menu-banner.png') }}") !important;
        background-size: cover;
        background-position: center;
    }
    .ad-menu-qr-code {
        background-image: url("{{ asset('mncofee/assets/img/aida-images/menu-qr-code-bg.png') }}") !important;
        background-size: cover;
        background-position: center;
    }
</style>
@endpush

@section('content')
<!--------------- 
    Banner 
---------------->
<section>
    <div class="ad-menu-banner position-relative">
        <div class="ad-menu-banner-overlay">
            <div>
                <a href="{{ route('home') }}">Home /</a>
                <a class="selected-page" href="{{ route('shop') }}"> Menu</a>
            </div>
        </div>
    </div>
</section>

<!-------------------
    Scan Qr Code
------------------->
<section data-aos="fade-up">
    <div class="ad-menu-qr-code">
        <div class="ad-menu-qr-code-container">
            <p>
                Scan the QR Code<br class="d-none d-lg-block" />
                to View Full Menu
            </p>
            <img src="{{ asset('mncofee/assets/img/aida-images/menu-qr-code.png') }}" alt="QR Code" />
        </div>
    </div>
</section>

@foreach($categories as $category)
<!----------------
    Category Section: {{ $category->name_en }}
----------------->
<section data-aos="fade-up">
    <div class="ad-offer {{ $loop->iteration % 2 == 0 ? 'ad-menu-lunch' : 'ad-menu-happy-ours' }}">
        <div class="ad-offer-title-container">
            <img src="{{ asset('mncofee/assets/img/aida-images/service-icon.png') }}" alt="" />
            <h4>{{ $category->name_en }}</h4>
        </div>
        <div class="container ad-offer-container">
            @foreach($category->products->take(12) as $product)
            <div class="ad-offer-single-card">
                <a href="{{ route('productDetails', $product->slug) }}">
                    <img src="{{ route('imagecache', ['template'=>'original','filename' => $product->fi() ?? 'default.png']) }}" alt="{{ $product->name_en }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                </a>
                <div>
                    <a href="{{ route('productDetails', $product->slug) }}" class="ad-offer-card-text-container">
                        <h5>{{ strtoupper($product->name_en) }}</h5>
                        <div class="d-flex gap-2 align-items-center">
                            <span class="ad-offer-dotted">------------------------------</span>
                            <span class="ad-offer-responsive-dotted">-------------</span>
                            <span class="ad-offer-price"> ৳{{ number_format($product->final_price, 2) }}</span>
                        </div>
                    </a>
                    <p>{{ Str::limit(strip_tags($product->description_en), 100) }}</p>
                    <a href="#" class="add-to-cart-btn" data-id="{{ $product->id }}">Add To Cart</a>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($category->products->count() > 12)
        <div class="text-center mt-4">
             <a href="{{ route('productCategory', $category->slug) }}" class="btn btn-outline-primary" style="color: #c59d5f; border-color: #c59d5f;">View All {{ $category->name_en }}</a>
        </div>
        @endif
    </div>
</section>
@endforeach

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).on('click', '.add-to-cart-btn', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: "{{ route('cart.quick.add') }}",
        type: "GET",
        data: {
            id: id
        },
        success: function(res) {
            if(res.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: res.message,
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    location.reload();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: res.message,
                });
            }
        }
    });
});
</script>
@endpush
