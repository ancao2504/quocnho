<?php
    $platforms = (array) Arr::get($config, 'platforms', []);
    $platformsChunk = array_chunk($platforms, 2);
?>

<div class="col-lg-3 pt-5 pt-lg-0">
    <?php if($title = Arr::get($config, 'title')): ?>
        <h3 class="text-white opacity-50 fs-6 fw-black pb-3 pt-5"><?php echo BaseHelper::clean($title); ?></h3>
    <?php endif; ?>

    <?php if($description = Arr::get($config, 'description')): ?>
        <p class="text-white fw-medium mt-3 mb-4 opacity-50"><?php echo BaseHelper::clean($description); ?></p>
    <?php endif; ?>

    <?php $__currentLoopData = $platformsChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platforms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex gap-2">
            <?php $__currentLoopData = $platforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $item = collect($platform)->pluck('value', 'key')->toArray();
                ?>

                <?php if(! $itemImage = Arr::get($item, 'image')) continue; ?>

                <a href="<?php echo e(Arr::get($item, 'url')); ?>">
                    <?php echo e(RvMedia::image($itemImage, Arr::get($item, 'name'), attributes: ['class' => 'mb-2'])); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-1"></div>
</div>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/////widgets/app-downloads/templates/frontend.blade.php ENDPATH**/ ?>