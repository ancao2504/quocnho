<ul<?php echo BaseHelper::clean($options); ?>>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-children' => $row->has_child]); ?>">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => $row->active, $row->css_class]); ?>" href="<?php echo e($row->url); ?>" target="<?php echo e($row->target); ?>">
                <?php echo BaseHelper::clean($row->icon_html); ?>

                <?php echo e($row->title); ?>

            </a>

            <?php if($row->has_child): ?>
                <?php echo Menu::renderMenuLocation('main-menu', ['view' => 'main-menu', 'menu' => $menu, 'menu_nodes' => $row->child, 'options' => ['class' => 'sub-menu']]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php echo Theme::partial('language-switcher-mobile'); ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/mobile-menu.blade.php ENDPATH**/ ?>