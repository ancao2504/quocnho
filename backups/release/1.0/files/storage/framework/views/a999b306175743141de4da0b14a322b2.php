<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-features shortcode-features-style-5 section-features-9 position-relative">
    <div class="container-fluid position-relative fix section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-8 position-relative z-1">
                    <?php if($subtitle = $shortcode->subtitle): ?>
                        <div class="d-flex align-items-center justify-content-center bg-primary-soft d-inline-flex rounded-pill border-white border px-3 py-1">
                            <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="dots" />
                            <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if($title = $shortcode->title): ?>
                        <h2 class=" mt-3 mb-4 fw-black"><?php echo BaseHelper::clean($title); ?></h2>
                    <?php endif; ?>

                    <?php if($description = $shortcode->description): ?>
                        <p class="mb-6"><?php echo BaseHelper::clean($description); ?></p>
                    <?php endif; ?>

                    <?php if($checklist): ?>
                        <ul class="list-unstyled phase-items">
                            <?php $__currentLoopData = $checklist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="phase-item d-flex align-items-center mb-3">
                                        <img src="<?php echo e(Theme::asset()->url('images/icons/check-primary.png')); ?>" alt="<?php echo e($item); ?>" />
                                        <p class=" mb-0 ms-2 fs-5 text-900"><?php echo BaseHelper::clean($item); ?></p>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-8">
                    <div class="position-relative d-inline-block z-2">
                        <?php if($floatingCardImage = $shortcode->floating_card_image): ?>
                            <?php echo e(RvMedia::image($floatingCardImage, attributes: ['class' => 'rounded-4 border border-3 border-white'])); ?>

                        <?php endif; ?>

                        <?php
                            $floatingCardButtonUrl = $shortcode->floating_card_button_url;
                            $floatingCardButtonLabel = $shortcode->floating_card_button_label;
                        ?>

                        <?php if($floatingCardButtonUrl && $floatingCardButtonLabel): ?>
                            <div class="position-absolute bottom-0 start-0 end-0 mb-3 mx-3 backdrop-filter rounded-3 text-start p-3">
                                <a href="<?php echo e($floatingCardButtonUrl); ?>" class="d-flex align-items-center">
                                    <?php if($floatingCardIconImage = $shortcode->floating_card_icon_image): ?>
                                        <?php echo e(RvMedia::image($floatingCardIconImage)); ?>

                                    <?php endif; ?>

                                    <span class="ms-3">
                                        <?php if($floatingCardTitle = $shortcode->floating_card_title): ?>
                                            <span class="text-white mb-0 fs-7"><?php echo BaseHelper::clean($floatingCardTitle); ?></span>
                                        <?php endif; ?>

                                        <span class="fs-4 d-block"><?php echo BaseHelper::clean($floatingCardButtonLabel); ?></span>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if($dataCounters): ?>
                    <div class="col-lg-4 mb-lg-0 mb-8">
                        <div class="px-lg-8">
                            <?php $__currentLoopData = $dataCounters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataCounter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $dataCountTitle = Arr::get($dataCounter, 'data_count_title');
                                    $dataCount = Arr::get($dataCounter, 'data_count');
                                ?>

                                <?php if(! $dataCountTitle || ! $dataCount) continue; ?>

                                <div class="d-flex align-items-center border-bottom pb-5 mt-5">
                                    <span class="h2 count fw-black "><span class="odometer" data-count="<?php echo e($dataCount); ?>"></span></span>
                                    <?php if($dataCounterUnit = Arr::get($dataCounter, 'data_count_unit')): ?>
                                        <span class="fw-medium  fs-4 align-self-start"><?php echo BaseHelper::clean($dataCounterUnit); ?></span>
                                    <?php endif; ?>

                                    <p class="ms-3"><?php echo BaseHelper::clean($dataCountTitle); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="bouncing-blobs-container rounded-4 fix">
        <div class="bouncing-blobs-glass rounded-4"></div>
        <div class="bouncing-blobs">
            <div class="bouncing-blob bouncing-blob--green"></div>
            <div class="bouncing-blob bouncing-blob--primary"></div>
            <div class="bouncing-blob bouncing-blob--infor bouncing-blob--infor-2"></div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/features/styles/style-5.blade.php ENDPATH**/ ?>