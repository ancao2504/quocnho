<section class="section-newsletter-3 position-relative pb-120">
    <div class="container">
        <div class="pt-120 pb-120 bg-4 rounded-5 position-relative">
            <div class="row align-items-center text-center position-relative z-1">
                <div class="col-lg-6 mx-auto">
                    <div class="px-lg-3 text-center">
                        <?php if($subtitle = Arr::get($config, 'subtitle')): ?>
                            <div class="d-flex align-items-center justify-content-center bg-primary-soft border border-2 border-white d-inline-flex rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-delay="50">
                                <img src="<?php echo e(Theme::asset()->url('images/icons/dots.png')); ?>" alt="dots">
                                <span class="tag-spacing fs-7 fw-bold text-linear-2 ms-2 text-primary"><?php echo BaseHelper::clean($subtitle); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if($title = Arr::get($config, 'title')): ?>
                            <h4 class="my-5"><?php echo BaseHelper::clean($title); ?></h4>
                        <?php endif; ?>

                        <?php if($description = Arr::get($config, 'description')): ?>
                            <p class="fs-6 fw-medium text-900"><?php echo BaseHelper::clean($description); ?></p>
                        <?php endif; ?>


                        <?php echo $form->renderForm(); ?>

                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0 m-10 pb-5 ps-4">
                <img class=" " src="<?php echo e(Theme::asset()->url('images/icons/newsletter-icon-1.png')); ?>" alt="icon">
            </div>
            <div class="position-absolute top-0 end-0 m-10 pb-5 ps-4">
                <img class=" " src="<?php echo e(Theme::asset()->url('images/icons/newsletter-icon-2.png')); ?>" alt="icon">
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/widgets/newsletter/templates/styles/style-3.blade.php ENDPATH**/ ?>