<?php
    $footerPrimarySidebar = dynamic_sidebar('footer_primary_sidebar');
    $footerBottomSidebar = dynamic_sidebar('footer_bottom_sidebar');

    $backgroundColor = theme_option('footer_background_color', '#111827');
    $textColor = theme_option('footer_text_color', theme_option('text_color', '#ffffff'));
    $headingColor = theme_option('footer_heading_color', '#ffffff');
    $backgroundImage = theme_option('footer_background_image');
    $borderColor = theme_option('footer_border_color', '#ffffff');
    $backgroundImage = $backgroundImage ? RvMedia::getImageUrl($backgroundImage) : null;
?>

<?php echo dynamic_sidebar('footer_top_sidebar'); ?>


<?php echo apply_filters('ads_render', null, 'footer_before', ['class' => 'my-2 text-center']); ?>


<?php if($footerPrimarySidebar || $footerBottomSidebar): ?>
    <footer class="footer"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
        "--footer-background-color: $backgroundColor" => $backgroundColor,
        "--footer-heading-color: $headingColor" => $headingColor,
        "--footer-text-color: $textColor" => $textColor,
        "--footer-border-color: $borderColor" => $borderColor,
        "--footer-background-image: url($backgroundImage)" => $backgroundImage,
    ]) ?>"
    >
        <div class="section-footer position-relative overflow-hidden">

            <?php if($footerPrimarySidebar): ?>
                <div class="tp-footer-main-area tp-footer-border">
                    <div class="container-fluid">
                        <div class="container position-relative z-2">
                            <div class="row py-90">
                                <?php echo $footerPrimarySidebar; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="container-fluid">
                <div class="container position-relative z-2">
                    <?php echo $footerBottomSidebar; ?>

                </div>
            </div>

            <?php if($backgroundImage): ?>
                <div class="position-absolute top-0 start-50 translate-middle-x z-0">
                    <img src="<?php echo e($backgroundImage); ?>" alt="background image">
                </div>
            <?php endif; ?>

            <?php if($backgroundColor && $backgroundColor !== 'transparent'): ?>
                <div class="position-absolute top-0 start-0 z-0">
                    <img src="<?php echo e(Theme::asset()->url('images/decorations/ellipse-left.png')); ?>" alt="left">
                </div>
                <div class="position-absolute top-0 end-0 z-0">
                    <img src="<?php echo e(Theme::asset()->url('images/decorations/ellipse-right.png')); ?>" alt="right">
                </div>
            <?php endif; ?>
        </div>
    </footer>
<?php endif; ?>

<?php echo apply_filters('ads_render', null, 'footer_after', ['class' => 'my-2 text-center']); ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/footer.blade.php ENDPATH**/ ?>