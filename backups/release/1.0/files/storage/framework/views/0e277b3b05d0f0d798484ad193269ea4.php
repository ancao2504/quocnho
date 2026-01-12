<?php
    $style = $shortcode->style;

    $style = in_array($style, range(1, 3)) ? $style : 1;

    $bgColor = $shortcode->background_color;
    $bgColor = $bgColor ? $bgColor === 'transparent' ? null : $bgColor : null;

    $variablesStyle = [
        "--shortcode-background-color: $bgColor !important;" => $bgColor,
    ];
?>

<?php echo $__env->make(Theme::getThemeNamespace("partials.shortcodes.site-statistics.styles.style-$style"), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/site-statistics/index.blade.php ENDPATH**/ ?>