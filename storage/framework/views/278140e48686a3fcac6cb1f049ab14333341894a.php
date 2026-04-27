<table class="table table-borderd table-sm">
    <thead>
        <tr>
            <th>SL</th>
            <th>Action</th>
            <th>Department Name</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Active</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = (($departments->currentPage() - 1) * $departments->perPage() + 1); ?>
        <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($i++); ?></td>

                <td class="d-flex">
                <a href="<?php echo e(route('departments.edit',$category)); ?>" class="text-success mr-2"><i class="fas fa-edit"></i></a>

                    <form action="<?php echo e(route('departments.destroy', $category)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button href="<?php echo e(route('departments.destroy', $category)); ?>" class="text-danger" onclick="return confirm('Are you sure? you want to delete this gallery Item?')" style="all:unset; cursor: pointer;"><i class="fas fa-trash"></i></button>
                    </form>

                </td>
                <td><?php echo e($category->name_en); ?></td>
                <td>
                    <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $category->fi() ])); ?>" alt="">
                </td>
                <td>
                    <?php if($category->featured): ?>
                    <span class="badge badge-primary">Featured</span>
                    <?php endif; ?>

                </td>

                <td>
                    <input type="checkbox" name="toogle" data-url="<?php echo e(route('departments.active')); ?>" value="<?php echo e($category->id); ?>" data-toggle="toggle" data-size="sm" <?php echo e($category->active==1 ? 'checked' : ''); ?> data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
                </td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6" class="text-danger h5 text-center">No Department Found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php echo e($departments->links()); ?>

<?php /**PATH D:\laragon\laragon\www\mncofee\resources\views/admin/departments/search_data.blade.php ENDPATH**/ ?>