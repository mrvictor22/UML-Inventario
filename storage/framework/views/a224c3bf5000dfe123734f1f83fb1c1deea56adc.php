<?php
    $menu = \App::make('speed-admin-menu')->getMenu('side-bar');
?>

<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!isset($menu_item['children'])): ?>
        <?php $__env->startComponent('speed-admin::components.sidebar.menu_item_without_children', ['menu_item' => $menu_item]); ?>
        <?php echo $__env->renderComponent(); ?>
    <?php else: ?>
        <?php $__env->startComponent('speed-admin::components.sidebar.menu_item_with_children', ['menu_item' => $menu_item]); ?>
        <?php echo $__env->renderComponent(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/sidebar/menu.blade.php ENDPATH**/ ?>