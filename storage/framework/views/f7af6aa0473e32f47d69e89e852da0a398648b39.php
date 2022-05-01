<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('speed-admin::components.developer_options'); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('speed-admin::components.crud.grid', [
        'model' => $model,
        'index_url' => $index_url,
        'get_data_url' => $get_data_url,
        'show_check_boxes' => true
    ]); ?>
    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('speed-admin::layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/crud/index.blade.php ENDPATH**/ ?>