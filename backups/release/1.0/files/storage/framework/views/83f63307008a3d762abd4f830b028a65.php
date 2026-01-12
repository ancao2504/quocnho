<div <?php echo $shortcode->htmlAttributes(); ?> class="shortcode-partners shortcode-partners-style-1 section-logo-cloud container-fluid mt-8 mt-lg-0 border-top border-bottom"
    style="<?php echo \Illuminate\Support\Arr::toCssStyles($variablesStyle) ?>"
>
    <div class="container">
        <div class="row mask-image">
            <div class="partners-slider my-7 position-relative z-1">
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="partner-item">
                        <?php if($partner['url']): ?>
                            <a href="<?php echo e($partner['url']); ?>" <?php if($partner['open_in_new_tab']): ?> target="_blank" <?php endif; ?>>
                                <?php endif; ?>
                                <?php echo e(RvMedia::image($partner['image'], $partner['name'])); ?>

                                <?php if($partner['url']): ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/partners/styles/style-1.blade.php ENDPATH**/ ?>