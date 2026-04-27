<table class="table table-striped table-bordered table-hover table-md">
    <thead class="w3-small text-muted thead-light">
        <tr>
            <th scope="col" width="30">SL</th>
            <th scope="col" width="60">Action</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Company</th>
            <th scope="col">Testimomial Message</th>
            <th scope="col">Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = (($testimonials->currentPage() - 1) * $testimonials->perPage() + 1); ?>
        <?php $__empty_1 = true; $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td scope="row"><?php echo e($i++); ?></td>
                <td scope="row">
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="<?php echo e(route('testimonials.edit', $testimonial->id)); ?>" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                            <form action="<?php echo e(route('testimonials.destroy', $testimonial->id)); ?>" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <?php if($testimonial->image): ?>
                        <img src="<?php echo e(asset('storage/' . $testimonial->image)); ?>" alt="<?php echo e($testimonial->name); ?>" width="50">
                    <?php else: ?>
                        N/A
                    <?php endif; ?>
                </td>

                <td><?php echo e(Str::limit($testimonial->name, 50)); ?></td>
                <td><?php echo e($testimonial->designation); ?></td>
                <td><?php echo e(Str::limit($testimonial->company, 30)); ?></td>
                <td><?php echo Str::limit(strip_tags($testimonial->text_en), 30); ?></td>
                <td><?php echo e($testimonial->rating); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" class="text-danger h5 text-center">No Testimonial Found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/admin/testimonials/searchData.blade.php ENDPATH**/ ?>