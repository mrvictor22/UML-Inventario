<li class="c-sidebar-nav-item" data-id=<?php echo e($menu_item['id']); ?> >
    <a class="c-sidebar-nav-link" href="<?php echo e($menu_item['href']); ?>">
        <?php if(!isset($menu_item['fa_icon'])): ?>
        <svg class="c-sidebar-nav-icon">
            <use
                xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#' . $menu_item['icon'])); ?>">
            </use>
        </svg>
        <?php else: ?>
        <i class="c-sidebar-nav-icon fa <?php echo e($menu_item['fa_icon']); ?>"></i>
        <?php endif; ?>
        <?php echo e($menu_item['title']); ?> <!--<span class="badge badge-info">NEW</span> -->
    </a>
</li>
<?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/sidebar/menu_item_without_children.blade.php ENDPATH**/ ?>