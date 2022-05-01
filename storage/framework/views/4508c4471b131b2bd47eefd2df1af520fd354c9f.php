<li class="c-sidebar-nav-item c-sidebar-nav-dropdown" data-id=<?php echo e($menu_item['id']); ?>>
    <a class="c-sidebar-nav-dropdown-toggle">
        <?php if(!isset($menu_item['fa_icon'])): ?>
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#'. $menu_item['icon'])); ?>">
            </use>
        </svg>
        <?php else: ?>
        <i class="c-sidebar-nav-icon fa <?php echo e($menu_item['fa_icon']); ?>"></i>
        <?php endif; ?>
        <?php echo e($menu_item['title']); ?>

    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <?php $__currentLoopData = $menu_item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!isset($child_menu_item['children'])): ?>
                <?php $__env->startComponent('speed-admin::components.sidebar.menu_item_without_children', ['menu_item' => $child_menu_item]); ?>
                <?php echo $__env->renderComponent(); ?>
            <?php else: ?>
                <?php $__env->startComponent('speed-admin::components.sidebar.menu_item_with_children', ['menu_item' => $child_menu_item]); ?>
                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li>
<?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/sidebar/menu_item_with_children.blade.php ENDPATH**/ ?>