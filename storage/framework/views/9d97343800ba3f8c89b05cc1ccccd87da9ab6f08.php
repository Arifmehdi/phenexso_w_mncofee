
<?php $__env->startSection('title',"Admin Dashboard | Edit How Works"); ?>

<?php $__env->startSection('body'); ?>
    <section class="pt-5">
        <div class="card">
            <div class="card-header bg-info">
                <div class="card-title">Edit How Works </div>
            </div>
            <div class="card-body w3-light-gray">
                <form action="<?php echo e(route('departments.update',$department->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="row py-2">
                        <div class="col-12 col-md-9 m-auto card p-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">How Works Title </label>
                                <input type="text" class="form-control <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="" placeholder="Department Name (English)" name="name_en" value="<?php echo e($department->name_en); ?>">
                                <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea name="excerpt_en" id="" cols="30" rows="5" class="form-control" placeholder="Description"><?php echo e($department->excerpt_en); ?></textarea>
                            </div>

                            <div class="form-group">
                               <label for="featured_image">Image</label>
                               <input type="file" name="image" class="form-control"> <br>
                               <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $department->fi() ])); ?>" alt="">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="featured" name="featured" <?php echo e($department->featured ? "checked" : ""); ?>>
                                <label class="form-check-label" for="exampleCheck1">Featured</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="featured" name="active" <?php echo e($department->active ? "checked" : ""); ?>>
                                <label class="form-check-label" for="exampleCheck1">Active</label>
                            </div>

                            <input type="submit" class="btn btn-success mt-2">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/admin/departments/edit.blade.php ENDPATH**/ ?>