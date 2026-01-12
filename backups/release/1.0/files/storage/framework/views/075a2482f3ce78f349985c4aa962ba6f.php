<?php
    $breadcrumbEnabled = Theme::breadcrumb()->enabled();

    if ($breadcrumbEnabled) {
        $breadcrumbEnabled = match (Theme::get('breadcrumbEnabled')) {
            '1' => true,
            '0' => false,
            default => Theme::breadcrumb()->enabled(),
        };
    }
?>

<?php if($breadcrumbEnabled): ?>
    <section class="section-page-header py-8 fix position-relative" <?php if(($backgroundColor = theme_option('breadcrumb_background_color')) && $backgroundColor !== 'transparent'): ?> style="background-color: <?php echo e($backgroundColor); ?> !important;" <?php endif; ?>>
        <div class="container position-relative z-1">
            <div class="text-start">
                <h3><?php echo e(SeoHelper::getTitleOnly()); ?></h3>
                <ol class="ps-0 d-flex list-unstyled">
                    <?php $__currentLoopData = Theme::breadcrumb()->getCrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->last): ?>
                            <li class="d-flex align-items-center">
                                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                    <path class="stroke-dark" d="M1 1.5L6.5 6.75L1 12" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p class="mb-0 text-900"><?php echo e($crumb['label']); ?></p>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e($crumb['url']); ?>" class="d-flex align-items-center">
                                    <?php if(! $loop->first): ?>
                                        <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                            <path class="stroke-dark" d="M1 1.5L6.5 6.75L1 12" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    <?php endif; ?>

                                    <p class="mb-0 text-primary"><?php echo e($crumb['label']); ?></p>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </div>
        </div>
        <?php if($backgroundImage = theme_option('breadcrumb_background_image')): ?>
            <?php echo e(RvMedia::image($backgroundImage, __('Background image'), attributes: ['class' => 'position-absolute bottom-0 start-0 end-0 top-0 z-0 h-100'])); ?>

        <?php endif; ?>
        <?php if(! $backgroundColor || $backgroundColor === 'transparent'): ?>
            <div class="bouncing-blobs-container">
                <div class="bouncing-blobs-glass"></div>
                <div class="bouncing-blobs">
                    <div class="position-absolute top-0 start-0 translate-middle-y bouncing-blob--green"></div>
                    <div class="position-absolute top-0 end-0 bouncing-blob--primary"></div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/breadcrumb.blade.php ENDPATH**/ ?>