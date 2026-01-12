<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-instruction-steps shortcode-instruction-steps-style-2 howitwork-2 section-padding position-relative fix">
    <div class="container position-relative z-1">
        <div class="text-center mb-8">
            <?php if($subtitle = $shortcode->subtitle): ?>
                <div class="d-flex align-items-center position-relative z-2 justify-content-center bg-primary-soft d-inline-flex rounded-pill border border-2 border-white px-3 py-1">
                    <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="infinia">
                    <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                </div>
            <?php endif; ?>

            <?php if($title = $shortcode->title): ?>
                <h3 class="ds-3 my-3 fw-black"><?php echo BaseHelper::clean($title); ?></h3>
            <?php endif; ?>

            <?php if($description = $shortcode->description): ?>
                <p class="fs-5 mb-0"><?php echo BaseHelper::clean($description); ?></p>
            <?php endif; ?>

        </div>
    </div>

    <?php if($backgroundImage = $shortcode->background_image): ?>
        <div class="position-absolute top-0 start-50 translate-middle-x z-0">
            <?php echo e(RvMedia::image($backgroundImage, __('Background image'))); ?>

        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row position-relative justify-content-center">
            <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $tabTitle = Arr::get($tab, 'title')) continue; ?>

                <?php
                    $iconImage = Arr::get($tab, 'icon_image');
                    $icon = Arr::get($tab, 'icon');
                ?>

                <div class="col-lg-4 text-center px-md-10">
                    <div class="card-service-4 text-center mt-2">
                        <?php if($iconImage || $icon): ?>
                            <div class="bg-white icon-flip position-relative icon-shape icon-xxl rounded-3">
                                <div class="icon">
                                    <?php if($iconImage): ?>
                                        <?php echo e(RvMedia::image($iconImage)); ?>

                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <h5 class="my-3"><?php echo BaseHelper::clean($tabTitle); ?></h5>
                        <?php if($tabDescription = Arr::get($tab, 'description')): ?>
                            <p class="mb-6"><?php echo BaseHelper::clean($tabDescription); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if(count($tabs) == 3): ?>
            <div class="navigation-arrow-1 d-none d-lg-block position-absolute top-50">
                <img src="<?php echo e(Theme::asset()->url('images/shapes/arrow-1.png')); ?>" alt="arrow">
            </div>

            <div class="navigation-arrow-2 d-none d-lg-block position-absolute">
                <img src="<?php echo e(Theme::asset()->url('images/shapes/arrow-2.png')); ?>" alt="arrow">
            </div>
        <?php elseif(count($tabs) < 3 && count($tabs) > 1): ?>
            <div class="navigation-arrow-1 d-none d-lg-block position-absolute top-50">
                <img src="<?php echo e(Theme::asset()->url('images/shapes/arrow-1.png')); ?>" alt="arrow">
            </div>
        <?php endif; ?>

        <?php
            $bottomDescription = $shortcode->bottom_description;
            $actionLabel = $shortcode->action_label;
            $actionUrl = $shortcode->action_url;
        ?>

        <?php if($bottomDescription || ($actionLabel && $actionUrl)): ?>
            <div class="row">
                <div class="text-center mt-6">
                    <?php if(($actionLabel && $actionUrl)): ?>
                        <p class="text-900 fw-bold">
                            <?php if($bottomDescription): ?> <?php echo BaseHelper::clean($bottomDescription); ?> <?php endif; ?>
                            <a href="<?php echo e($actionUrl); ?>" class="text-primary text-decoration-underline"><?php echo BaseHelper::clean($actionLabel); ?></a>
                        </p>
                    <?php else: ?>
                        <p class="text-900 fw-bold"><?php echo BaseHelper::clean($bottomDescription); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="bouncing-blobs-container">
            <div class="bouncing-blobs-glass"></div>
            <div class="bouncing-blobs">
                <div class="bouncing-blob bouncing-blob--green"></div>
                <div class="bouncing-blob bouncing-blob--primary"></div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/instruction-steps/styles/style-2.blade.php ENDPATH**/ ?>