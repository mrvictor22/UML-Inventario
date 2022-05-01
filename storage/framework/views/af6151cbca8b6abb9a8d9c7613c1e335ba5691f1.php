<?php
    $languages = config('speed-admin.languages');
    $current_language = collect($languages)->first(function($language) {
        return $language['locale'] == \App::currentLocale();
    })
?>
<?php if(count($languages) > 1): ?>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <?php echo e(__('Language') == 'Language' ? __('Language') : __('Language') . '(Language)'); ?> - <?php echo e($current_language != null ? __($current_language['name']) : ''); ?>

    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="dropdown-item" 
            href="<?php echo e(route('admin.select-language') . '?locale=' . $language['locale'] . '&return_url=' . url()->current()); ?>">
            <?php echo e($language['name']); ?> (<?php echo e(__($language['name'])); ?>)
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/lang_selector.blade.php ENDPATH**/ ?>