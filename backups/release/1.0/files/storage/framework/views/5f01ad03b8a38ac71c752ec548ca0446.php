<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-our-mission shortcode-our-mission-style-3 section-hero-4 position-relative fix pt-150">
    <div class="container">
        <div class="row position-relative z-1">
            <div class="col-lg-6 text-center text-lg-start">
                <div class="position-relative d-inline-block">
                    <?php if($image = $shortcode->image): ?>
                        <?php echo e(RvMedia::image($image, __('Image'), attributes: ['class' => 'rounded-5 border border-5 border-white'])); ?>

                    <?php endif; ?>


                    <?php
                        $floatingDataCountTitle = $shortcode->floating_data_count_title;
                        $floatingDataCount = $shortcode->floating_data_count;

                        $floatingButtonLabel = $shortcode->floating_button_label;
                        $floatingButtonUrl = $shortcode->floating_button_url;
                    ?>

                    <?php if($floatingDataCountTitle && $floatingDataCount): ?>
                        <div class="alltuchtopdown backdrop-filter rounded-4 text-center d-inline-block px-6 py-4 m-5 position-absolute bottom-0 end-0">
                            <h2 class="count text-900 fw-black">
                                <span class="odometer" data-count="<?php echo e($floatingDataCount); ?>"></span>
                                <?php if($floatingDataUnit = $shortcode->floating_data_count_unit): ?>
                                    <span><?php echo BaseHelper::clean($floatingDataUnit); ?></span>
                                <?php endif; ?>
                            </h2>
                            <strong class="d-block fs-6 text-500"><?php echo BaseHelper::clean($floatingDataCountTitle); ?></strong>

                            <?php if($floatingDataCountSubtitle = $shortcode->floating_data_count_subtitle): ?>
                                <p class="text-500 fs-7"><?php echo BaseHelper::clean($floatingDataCountSubtitle); ?></p>
                            <?php endif; ?>

                            <?php if($floatingButtonLabel && $floatingButtonUrl): ?>
                                <a href="<?php echo e($floatingButtonUrl); ?>" class="shadow-sm d-flex align-items-center bg-white d-inline-flex rounded-pill px-2 py-1 mb-3">
                                    <?php if($charHighlight = $shortcode->floating_button_characters_highlight): ?>
                                        <span class="bg-primary fs-9 fw-bold rounded-pill px-2 py-1 text-white"><?php echo BaseHelper::clean($charHighlight); ?></span>
                                    <?php endif; ?>

                                    <span class="fs-7 fw-medium text-primary mx-2"><?php echo BaseHelper::clean($floatingButtonLabel); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="position-absolute start-0 bottom-50 translate-middle-x">
                        <div class="alltuchtopdown">
                            <img src="<?php echo e(Theme::asset()->url('images/shapes/vector-1.png')); ?>" alt="arrow" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative align-self-end mt-10">
                    <?php if($title = $shortcode->title): ?>
                        <h3 class="ds-3 fw-regular"><?php echo BaseHelper::clean($title); ?></h3>
                    <?php endif; ?>

                    <?php if($description = $shortcode->description): ?>
                        <p class="fs-5 text-500 py-3"><?php echo BaseHelper::clean($description); ?></p>
                    <?php endif; ?>

                    <?php if(($buttonLabel = $shortcode->primary_action_label) && ($buttonUrl = $shortcode->primary_action_url)): ?>
                        <a href="<?php echo e($buttonUrl); ?>" class="fw-bold btn bg-neutral-100 d-inline-flex align-items-center text-900 hover-up">
                            <span class="me-10"><?php echo BaseHelper::clean($buttonLabel); ?></span>

                            <?php if($primaryIcon = $shortcode->primary_action_icon): ?>
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $primaryIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        </a>

                    <?php endif; ?>

                    <?php if($bottomDescription = $shortcode->bottom_description): ?>
                        <p class="text-500 fs-8 pt-3 pb-8"><?php echo BaseHelper::clean($bottomDescription); ?></p>
                    <?php endif; ?>
                    <div class="row">
                        <?php if(count($tabs) > 0): ?>
                            <div class="row position-relative align-items-center justify-content-between">
                                <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $itemTitle = Arr::get($tab, 'title');
                                        $itemData = Arr::get($tab, 'data');
                                    ?>

                                    <?php if(!$itemTitle || !$itemData) continue; ?>

                                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col d-flex align-items-center', 'pe-lg-8' => $loop->last]); ?>">
                                        <?php if($loop->last): ?>
                                            <span class="line-verticarl border-start h-50 ms-4 position-absolute top-50 start-50 translate-middle d-none d-md-block"></span>
                                        <?php endif; ?>

                                        <div class="counter-item-cover counter-item">
                                            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['content text-center', 'ms-md-auto' => $loop->last, 'mx-auto' => $loop->first]); ?>">
                                                <h2 class="count fw-black text-900 text-nowrap"><span class="odometer" data-count="<?php echo e($itemData); ?>"></span>
                                                    <?php echo BaseHelper::clean(Arr::get($tab, 'unit')); ?>

                                                </h2>
                                            </div>
                                        </div>
                                        <p class="ms-3 fs-5"><?php echo BaseHelper::clean($itemTitle); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <?php if(is_plugin_active('testimonial') && $testimonials->isNotEmpty()): ?>
                            <div class="row mt-8 mb-10">
                            <div class="swiper slider-two pb-5 mt-lg-0 mt-5">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="d-flex">
                                                <div class="img align-self-start flex-shrink-0">
                                                    <?php echo e(RvMedia::image($testimonial->image, $testimonial->name, attributes: ['class' => 'rounded-circle', 'width' => 48])); ?>

                                                </div>
                                                <div class="content ms-3">
                                                    <div class="d-flex">
                                                        <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <img src="<?php echo e(Theme::asset()->url('images/icons/star-yellow.png')); ?>" alt="star" />
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <p class="text-500 mt-2"><?php echo BaseHelper::clean($testimonial->content); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="position-absolute top-0 end-0 z-1 flickering pt-9 pe-4">
                        <img src="<?php echo e(Theme::asset()->url('images/shapes/shine-effect.png')); ?>" alt="shine effect" />
                    </div>
                </div>
            </div>
        </div>

        <?php if($backgroundImage = $shortcode->background_image): ?>
            <div class="position-absolute top-0 start-0 bottom-0 mb-5 bg-2 rounded-4 fix">
                <?php echo e(RvMedia::image($backgroundImage, __('Background image'))); ?>

            </div>

        <?php endif; ?>

        <div class="position-absolute bg-rotate d-none d-lg-block pb-10 ps-9 mb-8 z-0">
            <img src="<?php echo e(Theme::asset()->url('images/shapes/swing-1.png')); ?>" alt="swing" />
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/our-mission/styles/style-3.blade.php ENDPATH**/ ?>