<?php
    Theme::set('breadcrumbEnabled', $page->getMetaData('breadcrumb_enabled', true));
?>

<?php echo apply_filters(
    PAGE_FILTER_FRONT_PAGE_CONTENT,
    Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(),
    $page
); ?>

<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/views/page.blade.php ENDPATH**/ ?>