<section <?php echo $shortcode->htmlAttributes(); ?> class="section-cta-6 position-relative section-padding fix shortcode-features shortcode-features-style-7">
    <div class="container">
        <div class="row">
            <?php if($image = $shortcode->image): ?>
                <div class="col-lg-6 pe-lg-0">
                    <div class="zoom-img rounded-end-lg-0 rounded-4">
                        <?php echo e(RvMedia::image($image, __('Image'), attributes: ['class' => 'rounded-end-lg-0 rounded-4'])); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="col-12 col-lg-6 ps-lg-0 align-self-stretch">
                <div class="bg-white p-md-8 p-5 rounded-start-lg-0 h-100 rounded-4 mt-lg-0 mt-5 border border-start-lg-0 shadow-1">
                    <?php if($subtitle = $shortcode->subtitle): ?>
                        <div class="d-flex align-items-center justify-content-center bg-primary-soft border border-2 border-white d-inline-flex rounded-pill mb-2 px-4 py-2">
                            <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="dots">
                            <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if($title = $shortcode->title): ?>
                        <h1 class="fs-1"><?php echo BaseHelper::clean($title); ?></h1>
                    <?php endif; ?>

                    <?php if($description = $shortcode->description): ?>
                        <p class="mb-9"><?php echo BaseHelper::clean($description); ?></p>
                    <?php endif; ?>

                    <?php
                        $primaryButtonLabel = $shortcode->primary_action_label;
                        $primaryButtonUrl = $shortcode->primary_action_url;

                        $secondaryButtonLabel = $shortcode->secondary_action_label;
                        $secondaryButtonUrl = $shortcode->secondary_action_url;
                    ?>

                    <?php if(($primaryButtonLabel && $primaryButtonUrl) || ($secondaryButtonUrl && $secondaryButtonLabel)): ?>
                        <div class="d-flex flex-md-row flex-column align-items-center justify-content-start">
                            <?php if($primaryButtonLabel && $primaryButtonUrl): ?>
                                <a href="<?php echo e($primaryButtonUrl); ?>" class="btn btn-gradient">
                                    <?php echo BaseHelper::clean($primaryButtonLabel); ?>

                                    <?php if($shortcode->primary_action_icon): ?>
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $shortcode->primary_action_icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-2']); ?>
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
                                </a>
                            <?php endif; ?>

                            <?php if($secondaryButtonUrl && $secondaryButtonLabel): ?>
                                <a href="<?php echo e($secondaryButtonUrl); ?>" class="ms-md-5 mt-md-0 mt-5 text-decoration-underline fw-bold">
                                    <?php if($shortcode->secondary_action_icon): ?>
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $shortcode->secondary_action_icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                                    <?php echo BaseHelper::clean($secondaryButtonLabel); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/features/styles/style-7.blade.php ENDPATH**/ ?>