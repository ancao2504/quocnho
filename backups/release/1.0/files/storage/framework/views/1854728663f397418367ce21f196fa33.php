<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-our-history shortcode-our-history-style-3 section-cta-4 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="text-center rounded-4 position-relative d-inline-flex">
                    <div class="zoom-img rounded-4 position-relative z-1">
                        <?php if($image = $shortcode->image): ?>
                            <?php echo e(RvMedia::image($image, __('Image'), attributes: ['class' => 'rounded-4'])); ?>

                        <?php endif; ?>

                        <?php if(($floatingButtonLabel = $shortcode->floating_action_label) && ($floatingButtonUrl = $shortcode->floating_action_url)): ?>
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <a href="<?php echo e($floatingButtonUrl); ?>" class="d-inline-flex align-items-center rounded-4 text-nowrap backdrop-filter px-3 py-2 popup-video hover-up me-3 shadow-1">
                                    <?php if($floatingActionIcon = $shortcode->floating_action_icon): ?>
                                        <span class="backdrop-filter me-2 icon-shape icon-md rounded-circle">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $floatingActionIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                        </span>
                                    <?php endif; ?>

                                    <span class="fw-bold fs-7 text-900">
                                        <?php echo BaseHelper::clean($floatingButtonLabel); ?>

                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="position-absolute top-100 start-0 translate-middle z-0 pt-5">
                        <img class="alltuchtopdown" src="<?php echo e(Theme::asset()->url('images/shapes/vector-2.png')); ?>" alt="vector">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-8">
                <?php if($subtitle = $shortcode->subtitle): ?>
                    <strong class="d-block fs-6 text-primary"><?php echo BaseHelper::clean($subtitle); ?></strong>
                <?php endif; ?>

                <?php if($title = $shortcode->title): ?>
                    <h5 class="ds-5 my-3"><?php echo BaseHelper::clean($title); ?></h5>
                <?php endif; ?>

                <?php if($description = $shortcode->description): ?>
                    <p class="fs-5 text-500"><?php echo BaseHelper::clean($description); ?></p>
                <?php endif; ?>

                <?php if($features): ?>
                    <?php
                        $featuresChunk = array_chunk($features, ceil(count($features) / 2));
                    ?>
                    <div class="d-md-flex align-items-center mt-4 mb-5">
                        <?php $__currentLoopData = $featuresChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['list-unstyled phase-items mb-0', 'ms-md-5' => $loop->last]); ?>">
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(! $featureTitle = Arr::get($feature, 'title')) continue; ?>
                                    <li class="d-flex align-items-center mt-3">
                                        <img src="<?php echo e(Theme::asset()->url('images/icons/check.png')); ?>" alt="check">
                                        <span class="ms-2 text-900 fw-medium fs-6"><?php echo BaseHelper::clean($featureTitle); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php
                    $primaryButtonLabel = $shortcode->primary_action_label;
                    $primaryButtonUrl = $shortcode->primary_action_url;

                    $secondaryButtonLabel = $shortcode->secondary_action_label;
                    $secondaryButtonUrl = $shortcode->secondary_action_url;
                ?>

                <?php if(($primaryButtonLabel && $primaryButtonUrl) || ($secondaryButtonLabel && $secondaryButtonUrl)): ?>
                    <div class="row mt-8">
                        <div class="d-flex align-items-center">
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
                                <a href="<?php echo e($secondaryButtonUrl); ?>" class="ms-5 text-decoration-underline fw-bold">
                                    <?php echo BaseHelper::clean($secondaryButtonLabel); ?>

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
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/our-history/styles/style-3.blade.php ENDPATH**/ ?>