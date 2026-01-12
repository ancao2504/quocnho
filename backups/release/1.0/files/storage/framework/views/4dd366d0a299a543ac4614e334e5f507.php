<?php
    $style = $shortcode->style;
    $style = in_array($style, range(1, 3)) ? $style : 1;
?>

<?php echo Theme::partial("shortcodes.our-mission.styles.style-$style", compact('shortcode', 'tabs', 'testimonials')); ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/our-mission/index.blade.php ENDPATH**/ ?>