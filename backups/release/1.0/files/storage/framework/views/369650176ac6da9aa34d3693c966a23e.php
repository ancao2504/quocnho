<?php
    $style = $shortcode->style;

    $style = in_array($style, range(1, 10)) ? $style : 1;
?>

<?php echo $__env->make(Theme::getThemeNamespace("partials.shortcodes.features.styles.style-$style"), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/features/index.blade.php ENDPATH**/ ?>