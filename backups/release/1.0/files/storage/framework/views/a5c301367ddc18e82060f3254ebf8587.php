<?php
    $shortCodeTabs = [];
    $items = Arr::get($config, 'items', []);
    $quantity = 0;

    if (! is_array($items) && Str::isJson($items)) {
       $items = json_decode($items, true);
    }

    foreach ($items as $index => $tab) {
        $quantity++;
        foreach ($tab as $value) {
            $shortCodeTabs[Arr::get($value, 'key') . '_' .$index + 1] = Arr::get($value, 'value');
        }
    }

    $style = Arr::get($config, 'style', 1);
?>

<?php if($style == 2): ?>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $item = collect($item)->pluck('value', 'key')->all();

            $label = Arr::get($item, 'action_label');
            $url = Arr::get($item, 'action_url');
            $icon = Arr::get($item, 'action_icon');
        ?>

        <?php if(! $label) continue; ?>

        <?php if($url): ?>
            <a href="<?php echo e($url); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['pe-4' => ! $loop->last]); ?>">
                <?php if($icon): ?>
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <span class="text-900 ps-1 fs-7"><?php echo BaseHelper::clean($label); ?></span>
            </a>
        <?php else: ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['location d-flex align-items-center','pe-4' => ! $loop->last]); ?>">
                <?php if($icon): ?>
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <span class="text-900 ps-1 fs-7"><?php echo BaseHelper::clean($label); ?></span>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <?php echo do_shortcode(Shortcode::generateShortcode('site-contact', [
        ...$shortCodeTabs,
        'quantity' => $quantity,
        'description' => Arr::get($config, 'description'),
        'action_label' => Arr::get($config, 'action_label'),
        'action_url' => Arr::get($config, 'action_url'),
    ])); ?>

<?php endif; ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/////widgets/site-contact/templates/frontend.blade.php ENDPATH**/ ?>