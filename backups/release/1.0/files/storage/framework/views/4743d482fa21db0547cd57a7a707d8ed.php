<?php
    $headerLayout = theme_option('header_layout', 'container');
    $headerLayout = in_array($headerLayout, ['container', 'full-width']) ? $headerLayout : 'container';
    $headerTopStartSidebar = dynamic_sidebar('header_top_start_sidebar');
    $headerTopEndSidebar = dynamic_sidebar('header_top_end_sidebar');
    $bgColor = theme_option('header_top_background_color', '#f5eeff');
    $textColor = theme_option('header_top_text_color', '#000000');
?>

<div class="top-bar header-top position-relative z-4"
    style="<?php echo \Illuminate\Support\Arr::toCssStyles([
        "--header-top-background-color: $bgColor" => $bgColor,
        "--header-top-text-color: $textColor" => $textColor,
    ]) ?>"
>
    <div class="bg-primary-soft">
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['py-2', 'container' => $headerLayout == 'container', 'container-fluid px-md-8 px-2' => $headerLayout == 'full-width']); ?>">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <?php if($headerTopStartSidebar): ?>
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <?php echo $headerTopStartSidebar; ?>

                    </div>
                <?php endif; ?>

                <div class="d-flex d-none d-lg-flex align-items-center justify-content-center justify-content-lg-end">
                    <?php echo $headerTopEndSidebar; ?>


                    <?php echo Theme::partial('language-switcher'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/header-top.blade.php ENDPATH**/ ?>