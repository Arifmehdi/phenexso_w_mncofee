

<?php $__env->startSection('title', 'Menu - '. ($ws->name ?? env('APP_NAME'))); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="Explore our menu and products at <?php echo e($ws->name ?? env('APP_NAME')); ?>.">
<meta name="keywords" content="Menu, Coffee, Food, Uttara">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .ad-menu-banner {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/menu-banner.png')); ?>") !important;
        background-size: cover;
        background-position: center;
    }
    .ad-menu-qr-code {
        background-image: url("<?php echo e(asset('mncofee/assets/img/aida-images/menu-qr-code-bg.png')); ?>") !important;
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
                <a class="selected-page" href="<?php echo e(route('shop')); ?>"> Menu</a>
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
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/menu-qr-code.png')); ?>" alt="QR Code" />
        </div>
    </div>
</section>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!----------------
    Category Section: <?php echo e($category->name_en); ?>

----------------->
<section data-aos="fade-up">
    <div class="ad-offer <?php echo e($loop->iteration % 2 == 0 ? 'ad-menu-lunch' : 'ad-menu-happy-ours'); ?>">
        <div class="ad-offer-title-container">
            <img src="<?php echo e(asset('mncofee/assets/img/aida-images/service-icon.png')); ?>" alt="" />
            <h4><?php echo e($category->name_en); ?></h4>
        </div>
        <div class="container ad-offer-container">
            <?php $__currentLoopData = $category->products->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ad-offer-single-card">
                <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                    <img src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $product->fi() ?? 'default.png'])); ?>" alt="<?php echo e($product->name_en); ?>" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                </a>
                <div>
                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>" class="ad-offer-card-text-container">
                        <h5><?php echo e(strtoupper($product->name_en)); ?></h5>
                        <div class="d-flex gap-2 align-items-center">
                            <span class="ad-offer-dotted">------------------------------</span>
                            <span class="ad-offer-responsive-dotted">-------------</span>
                            <span class="ad-offer-price"> ৳<?php echo e(number_format($product->final_price, 2)); ?></span>
                        </div>
                    </a>
                    <p><?php echo e(Str::limit(strip_tags($product->description_en), 100)); ?></p>
                    <a href="#" class="add-to-cart-btn" data-id="<?php echo e($product->id); ?>">Add To Cart</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <?php if($category->products->count() > 12): ?>
        <div class="text-center mt-4">
             <a href="<?php echo e(route('productCategory', $category->slug)); ?>" class="btn btn-outline-primary" style="color: #c59d5f; border-color: #c59d5f;">View All <?php echo e($category->name_en); ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).on('click', '.add-to-cart-btn', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: "<?php echo e(route('cart.quick.add')); ?>",
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.mncofee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/website/shop.blade.php ENDPATH**/ ?>