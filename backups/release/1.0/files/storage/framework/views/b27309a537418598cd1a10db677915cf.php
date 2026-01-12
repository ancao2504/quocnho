<div class="col-lg-4 pe-10">
    <?php if($config['show_logo']): ?>
        <a href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
            <?php echo e(Theme::getLogoImage(['class' => 'logo-dark'], 'logo', $config['logo_height'] ?: 35, Arr::get($config, 'logo'))); ?>

            <?php echo e(Theme::getLogoImage(['class' => 'logo-white'], 'logo_dark', $config['logo_height'] ?: 35, Arr::get($config, 'logo_dark'))); ?>

        </a>
    <?php endif; ?>
    <?php if($config['about']): ?>
        <p class="text-white fw-medium mt-3 mb-6 opacity-50"><?php echo BaseHelper::clean(nl2br($config['about'])); ?></p>
    <?php endif; ?>
    <?php if(($socials = Theme::getSocialLinks()) && $config['show_social_links']): ?>
        <div class="d-flex social-icons">
            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $social->getUrl() || ! $social->getIconHtml()) continue; ?>
                <a <?php echo $social->getAttributes(['class' => 'text-white border border-light border-opacity-10 icon-shape icon-md ' . (! $loop->last ? 'border-end-0' : '')]); ?>>
                    <?php echo e($social->getIconHtml()); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/////widgets/site-information/templates/frontend.blade.php ENDPATH**/ ?>