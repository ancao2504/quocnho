<?php
    $style = in_array(Arr::get($config, 'style'), range(1, 3)) ? Arr::get($config, 'style') : 1;
?>

<?php echo $__env->make(Theme::getThemeNamespace("widgets.newsletter.templates.styles.style-$style"), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/////widgets/newsletter/templates/frontend.blade.php ENDPATH**/ ?>