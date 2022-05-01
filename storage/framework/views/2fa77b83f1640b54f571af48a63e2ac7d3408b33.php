<?php $__currentLoopData = $model->getGridColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(
        isset($column['field'])
        &&
        ( !isset($column['field']['filtering_disabled']) || $column['field']['filtering_disabled'] == false )
    ): ?>
        <?php
            $label = $column['title'];
            $name = "filters[" . $column['field']['name'] . "]";
        ?>

        <?php if($column['field']['type'] == 'image'): ?>
            <?php $__env->startComponent('speed-admin::components.form_components.select', [
                'options' => [
                    'label' => $label,
                    'name' => $name,
                    'options' => [
                        [ 'value' => '', 'text' => ''],
                        [ 'value' => 'has_image', 'text' => __('Has image')],
                        [ 'value' => 'does_not_have_image', 'text' => __('Does not have image')],
                    ]
                ]
            ]); ?>
            <?php echo $__env->renderComponent(); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<button type="button" class="btn btn-sm btn-info mb-1" onclick="getData_<?php echo e($uniqid); ?>()">
    <?php echo e(__('Apply filters')); ?>

</button><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/crud/grid_filters.blade.php ENDPATH**/ ?>