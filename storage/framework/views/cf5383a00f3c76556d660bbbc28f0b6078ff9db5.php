<?php if(config('speed-admin.developer_mode')): ?>
<?php
    $controller_action = Route::currentRouteAction();
    list($controller, $action) = explode('@', $controller_action);
    $controller = '\\' . $controller;
    $controller_instance = new $controller();
?>
<div>
    <h5>
        Developer info:
    </h5>
    <ul>
        <li><?php echo e('Route: ' . Route::currentRouteName()); ?></li>
        <li><?php echo e('Controller: ' . $controller); ?></li>
        <li><?php echo e('Action: ' . $action); ?></li>
        <li><?php echo e('Parent Model: ' . $controller_instance->getModelClassName()); ?></li>
        <li>
            <?php echo e('Model Child Classes: ' . implode(', ', \SpeedAdminHelpers::getModelChildClasses($controller_instance->getModelClassName()))); ?>

        </li>
    </ul>
</div>
<?php endif; ?><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/developer_options.blade.php ENDPATH**/ ?>