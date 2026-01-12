<?php if(is_plugin_active('language')): ?>
    <?php
        $supportedLocales = Language::getSupportedLocales();

        if (empty($options)) {
            $options = [
                'before' => '',
                'lang_flag' => true,
                'lang_name' => true,
                'class' => '',
                'after' => '',
            ];
        }
    ?>

    <?php if($supportedLocales && count($supportedLocales) > 1): ?>
        <?php
            $languageDisplay = setting('language_display', 'all');
            $showRelated = setting('language_show_default_item_if_current_version_not_existed', true);
        ?>

        <?php if(setting('language_switcher_display', 'dropdown') === 'dropdown'): ?>
            <div class="dropdown ms-4 language-switcher-wrapper">
                <button class="text-900 fs-7 dropdown-toggle" id="language-switcher-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                        <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                    <?php endif; ?>
                    <?php if(Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                        <?php echo e(Language::getCurrentLocaleName()); ?>

                    <?php endif; ?>
                </button>

                <ul class="dropdown-menu z-10" aria-labelledby="language-switcher-dropdown">
                    <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($localeCode != Language::getCurrentLocale()): ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e($showRelated ? Language::getLocalizedURL($localeCode) : url($localeCode)); ?>">
                                    <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                                        <?php echo language_flag($properties['lang_flag']); ?> <span class="ms-2"><?php echo e($properties['lang_name']); ?></span>
                                    <?php endif; ?>
                                    <?php if(Arr::get($options, 'lang_name', true) &&  ($languageDisplay == 'name')): ?>
                                        &nbsp;<?php echo e($properties['lang_name']); ?>

                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php else: ?>
            <div class="d-flex gap-3 align-items-center ms-3">
                <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($localeCode === Language::getCurrentLocale()) continue; ?>

                    <a
                        href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>"
                        class="text-decoration-none small"
                    >
                        <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                            <?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?>

                        <?php endif; ?>
                        <?php if(Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                            <?php echo e($properties['lang_name']); ?>

                        <?php endif; ?>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\Projects\quocnho\platform\themes/infinia/partials/language-switcher.blade.php ENDPATH**/ ?>