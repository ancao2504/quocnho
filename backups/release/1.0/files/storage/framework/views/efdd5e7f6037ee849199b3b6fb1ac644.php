<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-services shortcode-services-style-6 section-services-3 section-padding position-relative"
    style="<?php echo \Illuminate\Support\Arr::toCssStyles($variablesStyle) ?>"
>
    <div class="container position-relative z-2">
        <div class="text-center">
            <?php if($subtitle = $shortcode->subtitle): ?>
                <div class="d-flex align-items-center justify-content-center bg-primary-soft border border-2 border-white d-inline-flex rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-delay="50">
                    <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="dots">
                    <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                </div>
            <?php endif; ?>

            <?php if($title = $shortcode->title): ?>
                <h3 class="ds-3 my-3 fw-regular"><?php echo BaseHelper::clean($title); ?></h3>
            <?php endif; ?>
        </div>
        <div class="row mt-6 position-relative">
            <div class="swiper slider-2 px-1">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="card-service-4 position-relative bg-white p-6 border rounded-3 text-center shadow-1 hover-up mt-2">
                                <div class="bg-primary-soft icon-flip position-relative icon-shape icon-xxl rounded-3 me-5">
                                    <div class="icon">
                                        <?php if($iconImage = $service->getMetaData('icon_image', true)): ?>
                                            <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" alt="icon" class="service-icon filter-invert">
                                        <?php elseif($icon = $service->getMetaData('icon', true)): ?>
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'service-icon filter-invert']); ?>
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
                                <h5 class="my-3 truncate-1-custom" title="<?php echo e($service->name); ?>"><?php echo e($service->name); ?></h5>
                                <?php if($serviceDescription = $service->description): ?>
                                    <p class="mb-6 truncate-3-custom"><?php echo BaseHelper::clean($serviceDescription); ?></p>
                                <?php endif; ?>

                                <a href="<?php echo e($service->url); ?>" title="<?php echo e($service->name); ?>" class="text-primary fs-7 fw-bold">
                                    <?php echo e(__('Learn More')); ?>

                                    <svg class=" ms-2 " xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                        <g clip-path="url(#clip0_399_9647)">
                                            <path d="M13.5633 4.06348L12.7615 4.86529L16.3294 8.43321H0.5V9.56716H16.3294L12.7615 13.135L13.5633 13.9369L18.5 9.00015L13.5633 4.06348Z" fill="#111827" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="rectangle position-absolute bottom-0 start-50 translate-middle-x"></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="swiper-button-prev slider-2-swiper-button-prev d-none d-lg-flex shadow-2 position-absolute top-50 translate-middle-y bg-white ms-lg-7">
                <i class="bi bi-arrow-left"></i>
            </div>
            <div class="swiper-button-next slider-2-swiper-button-next d-none d-lg-flex shadow-2 position-absolute top-50 translate-middle-y bg-white">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
    </div>

    <?php if($shortcode->background_image): ?>
        <div class="position-absolute top-0 start-50 translate-middle-x z-0">
            <?php echo e(RvMedia::image($shortcode->background_image, __('Image'))); ?>

        </div>
    <?php endif; ?>

    <div class="rotate-center ellipse-rotate-success position-absolute z-1"></div>
    <div class="rotate-center-rev ellipse-rotate-primary position-absolute z-1"></div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/services/styles/style-6.blade.php ENDPATH**/ ?>