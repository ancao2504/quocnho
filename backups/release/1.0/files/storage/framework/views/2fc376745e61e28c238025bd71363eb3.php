<?php $__env->startSection('content'); ?>
    <?php echo Theme::get('beforeContent'); ?>


    <?php echo Theme::content(); ?>


    <?php echo Theme::get('afterContent'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Theme::getThemeNamespace('layouts.base'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Projects\quocnho\platform\themes/infinia/layouts/full-width.blade.php ENDPATH**/ ?>