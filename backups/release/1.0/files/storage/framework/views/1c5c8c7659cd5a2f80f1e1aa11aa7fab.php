<?php
    $bgColor = $shortcode->background_color;

    $variablesStyle = [
        "--shortcode-background-color: $bgColor !important;" => $bgColor,
    ];

    $tabsCounter = [];
    $tabsContent = [];

    foreach ($tabs as $tab) {
        $tabTitle = Arr::get($tab, 'title');

        if (! $tabTitle) {
            continue;
        }

        if ($tabCountData = Arr::get($tab, 'data')) {
            $tabsCounter[] = [
                'data' => $tabCountData,
                'unit' => Arr::get($tab, 'unit'),
                'title' => $tabTitle,
            ];
        } else {
            $tabsContent[] = $tab;
        }
    }

    $tabsContentChunks = array_chunk($tabsContent, ceil(count($tabsContent) / 2));
?>

<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-information-block"
    style="<?php echo \Illuminate\Support\Arr::toCssStyles($variablesStyle) ?>"
>
    <div class="container-fluid position-relative section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-8 pe-5 pe-lg-10 position-relative z-1">
                    <?php if($image = $shortcode->image): ?>
                        <?php echo e(RvMedia::image($image, __('Image'))); ?>

                    <?php endif; ?>

                    <?php if($title = $shortcode->title): ?>
                        <h2 class="text-white mt-3 mb-4 fw-black"><?php echo BaseHelper::clean($title); ?></h2>
                    <?php endif; ?>

                    <?php if($description = $shortcode->description): ?>
                        <p class="text-white"><?php echo BaseHelper::clean($description); ?></p>
                    <?php endif; ?>

                    <?php $__currentLoopData = $tabsCounter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabCounter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $tabCounterTitle = Arr::get($tabCounter, 'title');
                            $tabCounterData = Arr::get($tabCounter, 'data');
                        ?>

                        <?php if(! $tabCounterTitle || ! $tabCounterData) continue; ?>

                        <div class="col d-flex align-items-center mt-5 min-w-">
                            <span class="h2 count fw-black text-white min-w-70"><span class="odometer" data-count="<?php echo e($tabCounterData); ?>"></span></span>
                            <?php if($tabCounterUnit = Arr::get($tabCounter, 'unit')): ?>
                                <span class="fw-medium text-white fs-4 align-self-start"><?php echo BaseHelper::clean($tabCounterUnit); ?></span>
                            <?php endif; ?>

                            <p class="ms-3 text-white">
                                <?php echo BaseHelper::clean($tabCounterTitle); ?>

                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <?php $__currentLoopData = $tabsContentChunks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabsContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col-lg-4 mb-lg-0 mb-8 pe-lg-8', 'col-md-6' => $loop->first]); ?>">
                        <ul class="list-unstyled ">
                            <?php $__currentLoopData = $tabsContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(! $tabContentTitle = Arr::get($tabContent, 'title')) continue; ?>

                                <li>
                                    <a href="<?php echo e(Arr::get($tabContent, 'url')); ?>" class="d-flex align-items-start mb-6">
                                        <?php if($tabContentIconImage = Arr::get($tabContent, 'icon_image')): ?>
                                            <?php echo e(RvMedia::image($tabContentIconImage, __('Image'), attributes: ['class' => 'mt-2'])); ?>

                                        <?php elseif($tabContentIcon = Arr::get($tabContent, 'icon')): ?>
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $tabContentIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                                        <div class="ms-3 pb-4 border-bottom">
                                            <h5 class="text-white mb-2"><?php echo BaseHelper::clean($tabContentTitle); ?></h5>
                                            <?php if($tabContentDescription = Arr::get($tabContent, 'description')): ?>
                                                <p class="text-white mb-0"><?php echo BaseHelper::clean($tabContentDescription); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0 bg-rotate z-0">
            <img src="<?php echo e(Theme::asset()->url('images/shapes/swing.png')); ?>" class="rotate-center" alt="swing">
        </div>
        <div class="position-absolute top-0 end-0 z-1 p-8">
            <div class="bloom"></div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/information-block/index.blade.php ENDPATH**/ ?>