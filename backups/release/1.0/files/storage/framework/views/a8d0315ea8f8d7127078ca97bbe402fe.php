<?php
    $style = $shortcode->style;

    $style = in_array($style, range(1, 2)) ? $style : 1;
?>

<?php echo $__env->make(Theme::getThemeNamespace("partials.shortcodes.instruction-steps.styles.style-$style"), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/instruction-steps/index.blade.php ENDPATH**/ ?>