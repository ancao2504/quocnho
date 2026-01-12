<!DOCTYPE html>
<html <?php echo Theme::htmlAttributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <style>
            :root {
                --primary-color: <?php echo e($primaryColor = theme_option('primary_color', '#6d4df2')); ?>;
                --primary-color-dark: <?php echo e($primaryColorDark = theme_option('primary_color_dark', '#6342ec')); ?>;
                --primary-color-dark-light: <?php echo e(theme_option('primary_color_dark_light', '#7f7d88')); ?>;
                --primary-color-dark-soft: <?php echo e(theme_option('primary_color_dark_soft', '#271c52')); ?>;
                --primary-color-rgb: <?php echo e(implode(',', BaseHelper::hexToRgb($primaryColor))); ?> !important;
                --primary-color-dark-rgb: <?php echo e(implode(',', BaseHelper::hexToRgb($primaryColorDark))); ?> !important;
                --select-text-color: <?php echo e(theme_option('select_text_color', '#ffffff')); ?> !important;
                --primary-gradient-bg: linear-gradient(90deg, <?php echo e(theme_option('primary_gradient_from', '#6d4df2')); ?> 0%, <?php echo e(theme_option('primary_gradient_to', '#8c71ff')); ?> 100%);
            }
        </style>

        <?php
            Theme::asset()->remove('contact-css');
        ?>

        <?php echo Theme::header(); ?>

    </head>
    <body <?php echo Theme::bodyAttributes(); ?>>
        <?php echo apply_filters(THEME_FRONT_BODY, null); ?>


        <main>
            <?php echo Theme::breadcrumb()->render(Theme::getThemeNamespace('partials.breadcrumb')); ?>


            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo Theme::footer(); ?>


        <?php if(theme_option('hide_theme_mode_switcher', 'no') !== 'yes'): ?>
            <script>
                let switchers = document.querySelectorAll('.dark-light-switcher');

                function updateTheme(isDarkMode) {
                    switchers.forEach(function (switcher) {
                        let darkIcon = switcher.querySelector('.bi-sun-fill');
                        let lightIcon = switcher.querySelector('.bi-moon-stars-fill');

                        if (isDarkMode) {
                            lightIcon.style.display = 'none';
                            darkIcon.style.display = 'block';
                        } else {
                            lightIcon.style.display = 'block';
                            darkIcon.style.display = 'none';
                        }
                    });

                    document.documentElement.setAttribute('data-bs-theme', isDarkMode ? 'dark' : 'light');
                }

                let storedTheme = localStorage.getItem('theme');
                if (!storedTheme) {
                    let htmlTheme = document.documentElement.getAttribute('data-bs-theme');

                    if (htmlTheme === 'system') {
                        let prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                        storedTheme = prefersDarkMode ? 'dark' : 'light';
                    } else {
                        storedTheme = htmlTheme;
                    }
                }

                let isDarkMode = storedTheme === 'dark';
                updateTheme(isDarkMode);

                switchers.forEach(function (switcher) {
                    switcher.addEventListener('click', function () {
                        let currentTheme = localStorage.getItem('theme') || storedTheme;
                        let isDarkMode = currentTheme === 'dark';

                        let newTheme = isDarkMode ? 'light' : 'dark';
                        localStorage.setItem('theme', newTheme);
                        updateTheme(newTheme === 'dark');
                    });
                });
            </script>
        <?php endif; ?>
    </body>
</html>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/layouts/base.blade.php ENDPATH**/ ?>