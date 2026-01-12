<section <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-site-statistics shortcode-site-statistics-style-1 section-static-1 position-relative fix z-0 py-8">
    <div class="container">
        <div class="inner">
            <div class="row align-items-center justify-content-between">
                <?php if($title = $shortcode->title): ?>
                    <div class="col-lg-auto col-md-12 text-center text-lg-start mb-5 mb-lg-0">
                        <h4 class="mb-0">
                            <?php echo BaseHelper::clean($title); ?>

                        </h4>
                    </div>
                <?php endif; ?>

                <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $itemTitle = Arr::get($item, 'title');
                        $itemData = Arr::get($item, 'data');
                    ?>

                    <?php if(! $itemTitle || ! $itemData) continue; ?>

                    <div class="col-lg-auto col-md-6">
                        <div class="counter-item-cover counter-item">
                            <div class="content text-center mx-auto">
                                    <span class="h1 count fw-black text-primary my-0"><span class="odometer" data-count="<?php echo e($itemData); ?>"></span>
                                        <?php if($itemUnit = Arr::get($item, 'unit')): ?>
                                            <span><?php echo BaseHelper::clean($itemUnit); ?></span>
                                        <?php endif; ?>
                                    </span>
                                <p><?php echo BaseHelper::clean($itemTitle); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="bouncing-blobs-container">
        <div class="bouncing-blobs-glass fix"></div>
        <div class="bouncing-blobs">
            <div class="bouncing-blob bouncing-blob--green"></div>
            <div class="bouncing-blob bouncing-blob--primary"></div>
            <div class="bouncing-blob bouncing-blob--infor bouncing-blob--infor-2"></div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/site-statistics/styles/style-1.blade.php ENDPATH**/ ?>