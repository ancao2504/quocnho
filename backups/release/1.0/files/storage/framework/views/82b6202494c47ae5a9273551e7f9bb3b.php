<section <?php echo $shortcode->htmlAttributes(); ?> class="section-team-1 position-relative fix section-padding">
    <div class="container position-relative z-2">
        <div class="text-center">
            <?php if($subtitle = $shortcode->subtitle): ?>
                <div class="d-flex align-items-center justify-content-center bg-primary-soft border border-2 border-white d-inline-flex rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-delay="50">
                    <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="dots" />
                    <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                </div>
            <?php endif; ?>

            <?php if($title = $shortcode->title): ?>
                <h3 class="ds-3 my-3"><?php echo BaseHelper::clean($title); ?></h3>
            <?php endif; ?>

            <?php if($description = $shortcode->description): ?>
                <p class="fs-5"><?php echo BaseHelper::clean($description); ?></p>
            <?php endif; ?>

        </div>
        <div class="text-center mt-6">
            <div class="button-group filter-button-group filter-menu-active">
                <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(! $tabTitle = Arr::get($tab, 'title')) continue; ?>

                    <button class="<?php echo \Illuminate\Support\Arr::toCssClasses(['btn btn-md btn-filter mb-2 me-2', 'active' => $loop->first]); ?>" data-filter="<?php echo e(! Arr::get($tab, 'project_ids') ? '*' : '.' . Str::slug($tabTitle)); ?>"><?php echo BaseHelper::clean($tabTitle); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="container mt-6">
        <div class="masonary-active justify-content-between row">
            <div class="grid-sizer"></div>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $additionalClass = '';

                    foreach ($tabs as $tab) {
                        $tabTitle = Arr::get($tab, 'title');

                        if (is_string($tab['project_ids']) && in_array($project->getKey(), explode(',', $tab['project_ids']))) {
                            $additionalClass .= ' ' . Str::slug($tabTitle);
                        }
                    }
                ?>

                <div class="filter-item col-12 col-md-4 <?php echo e($additionalClass); ?>">
                    <div class="project-item zoom-img rounded-2 fix position-relative">
                        <?php echo e(RvMedia::image($project->image, $project->name, 'vertical_thumb', attributes: ['clas' => 'rounded-2'])); ?>


                        <a href="<?php echo e($project->url); ?>" class="card-team text-start rounded-3 position-absolute bottom-0 start-0 end-0 z-1 backdrop-filter w-auto p-4 m-3 ">
                            <span class="shadow-sm d-flex align-items-center bg-white-keep d-inline-flex rounded-pill px-2 py-1 mb-3">
                                <span class="bg-primary fs-9 fw-bold rounded-pill px-2 py-1 text-white">Get</span>
                                <span class="fs-7 fw-medium text-primary mx-2">Free Update</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M10.3125 5.5625L14.4375 9.5L10.3125 13.4375" stroke="#6D4DF2" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.25 9.5H3.5625" stroke="#6D4DF2" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <h5 class="text-700"><?php echo e($project->name); ?></h5>

                            <?php if($projectDescription = $project->description): ?>
                                <p class="fs-7 mb-0"><?php echo BaseHelper::clean($projectDescription); ?></p>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php
        $primaryButtonLabel = $shortcode->primary_action_label;
        $primaryButtonUrl = $shortcode->primary_action_url;

        $secondaryButtonLabel = $shortcode->secondary_action_label;
        $secondaryButtonUrl = $shortcode->secondary_action_url;
    ?>

    <?php if(($primaryButtonLabel && $primaryButtonUrl) || ($secondaryButtonUrl && $secondaryButtonLabel)): ?>
        <div class="container">
            <div class="row mt-6">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center justify-content-lg-end justify-content-center">
                        <?php if($primaryButtonLabel && $primaryButtonUrl): ?>
                            <a href="<?php echo e($primaryButtonUrl); ?>" class="btn btn-gradient">
                                <?php echo BaseHelper::clean($primaryButtonLabel); ?>

                                <?php if($shortcode->primary_action_icon): ?>
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $shortcode->primary_action_icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-2']); ?>
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
                            </a>
                        <?php endif; ?>

                        <?php if($secondaryButtonUrl && $secondaryButtonLabel): ?>
                            <a href="<?php echo e($secondaryButtonUrl); ?>" class="ms-5 text-decoration-underline fw-bold">
                                <?php echo BaseHelper::clean($secondaryButtonLabel); ?>


                                <?php if($shortcode->secondary_action_icon): ?>
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $shortcode->secondary_action_icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-2']); ?>
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
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($backgroundImage = $shortcode->background_image): ?>
        <div class="position-absolute top-0 start-50 translate-middle-x z-0">
            <?php echo e(RvMedia::image($backgroundImage, __('Background image'))); ?>

        </div>
    <?php endif; ?>

    <div class="rotate-center ellipse-rotate-success position-absolute z-1"></div>
    <div class="rotate-center-rev ellipse-rotate-primary position-absolute z-1"></div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/project-tabs/index.blade.php ENDPATH**/ ?>