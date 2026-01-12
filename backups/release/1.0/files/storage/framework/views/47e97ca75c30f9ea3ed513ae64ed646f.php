<?php if(theme_option('display_header_top', true)): ?>
    <?php echo Theme::partial('header-top'); ?>

<?php endif; ?>

<header>
    <?php
        $headerSidebar = dynamic_sidebar('header_sidebar');
        $headerLayout = theme_option('header_layout', 'container');
        $headerLayout = in_array($headerLayout, ['container', 'full-width']) ? $headerLayout : 'container';
    ?>

    <?php if($headerSidebar): ?>
        <nav class="<?php echo \Illuminate\Support\Arr::toCssClasses(['navbar navbar-expand-lg navbar-light w-100 z-999', 'navbar-sticky' => theme_option('sticky_header_enabled', true)]); ?>">
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['container' => $headerLayout == 'container', 'container-fluid px-md-8 px-2' => $headerLayout == 'full-width']); ?>">
                <?php echo $headerSidebar; ?>

            </div>
        </nav>

        <?php if(is_plugin_active('blog')): ?>
            <div class="offcanvas offcanvas-top offcanvasTop h-50" tabindex="-1">
                <div class="offcanvas-header">
                    <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="<?php echo e(__('Close')); ?>"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container">
                        <div class="row py-md-5 py-2">
                            <form action="<?php echo e($searchPostUrl = route('public.search')); ?>" method="GET" class="col-12 col-lg-8 mx-auto">
                                <h4 class="mb-2 fs-sm-5"><?php echo e(__('What are you looking for?')); ?></h4>
                                <p class="text-500 fs-6 mb-5"><?php echo e(__('Explore our services and discover how we can help you achieve your goals')); ?></p>
                                <div class="input-group" data-aos="zoom-in">
                                    <input type="text" class="form-control ps-5 rounded-start-pill" name="name" placeholder="Enter Your Keywords" />
                                    <button type="submit" class="btn btn-primary rounded-end-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"
                                                stroke="white"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <?php
                                    $suggestKeywords = theme_option('suggest_keywords');
                                    $suggestKeywords = $suggestKeywords ? explode(',', $suggestKeywords) : '';
                                ?>

                                <?php if($suggestKeywords): ?>
                                    <div class="d-flex flex-column flex-lg-row mt-5">
                                        <strong class="d-inline fs-6 me-2"><?php echo e(__('Suggest:')); ?></strong>
                                        <div class="d-flex flex-wrap gap-2">
                                            <?php $__currentLoopData = $suggestKeywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($searchPostUrl . '?q=' . urlencode(trim($keyword))); ?>"><?php echo BaseHelper::clean($keyword); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar button-bg-2">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-logo">
                <a class="navbar-brand d-flex main-logo align-items-center" href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
                    <?php echo e(Theme::getLogoImage(['class' => 'logo-dark'], 'logo_dark', 37)); ?>

                    <?php echo e(Theme::getLogoImage(['class' => 'logo-white'], 'logo', 37)); ?>

                </a>
                <div class="burger-icon burger-icon-white border rounded-3">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>

            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav>
                            <?php echo Menu::renderMenuLocation('main-menu', [
                                'view' => 'mobile-menu',
                                'options' => ['class' => 'mobile-menu font-heading ps-0'],
                            ]); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/header.blade.php ENDPATH**/ ?>