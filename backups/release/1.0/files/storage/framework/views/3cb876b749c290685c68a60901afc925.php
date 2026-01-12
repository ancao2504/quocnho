<ul<?php echo BaseHelper::clean($options); ?>>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'dropdown' => $row->has_child]); ?>">
            <a
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link fw-bold d-md-flex align-items-center', 'dropdown-toggle' => $row->has_child, 'active' => $row->active, $row->css_class]); ?>"
                href="<?php echo e($row->url); ?>"
                target="<?php echo e($row->target); ?>"
                <?php if($row->has_child): ?>
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                <?php endif; ?>
            >
                <?php echo $row->icon_html; ?>

                <?php echo e($row->title); ?>

            </a>
            <?php if($row->has_child): ?>
                <div class="dropdown-menu p-4">
                    <?php echo Menu::renderMenuLocation('main-menu', [
                       'view' => 'main-menu',
                       'menu' => $menu,
                       'menu_nodes' => $row->child,
                       'options' => ['class' => 'list-unstyled'],
                   ]); ?>

                </div>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/main-menu.blade.php ENDPATH**/ ?>