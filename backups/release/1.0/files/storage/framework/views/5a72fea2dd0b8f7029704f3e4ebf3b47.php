<?php
    $style = $shortcode->style;
    $style = in_array($style, range(1, 6)) ? $style : 1;
?>

<?php echo Theme::partial("shortcodes.teams.styles.style-$style", compact('shortcode', 'teams', 'tabs')); ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/shortcodes/teams/index.blade.php ENDPATH**/ ?>