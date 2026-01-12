<div class="col-lg-2 col-md-4 col-6">
    <h3 class="text-white opacity-50 fs-6 fw-black pb-3 pt-5"><?php echo e($config['name']); ?></h3>
    <div class="d-flex flex-column align-items-start">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(($label = $item->label) && ($url = $item->url)): ?>
                <a href="<?php echo e(url($url)); ?>" class="hover-effect text-white mb-2 fw-medium fs-6" <?php echo $item->attributes ? BaseHelper::clean($item->attributes) : null; ?>>
                    <?php echo BaseHelper::clean($label); ?>

                </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/////widgets/core-simple-menu/templates/frontend.blade.php ENDPATH**/ ?>