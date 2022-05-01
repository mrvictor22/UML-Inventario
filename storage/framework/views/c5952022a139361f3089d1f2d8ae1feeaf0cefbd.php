<?php $__env->startSection('content'); ?>

    <?php if(session('message')): ?>
    <div class="alert alert-primary">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
            <?php echo e(__('System Applications')); ?>

            </h5>
        </div>
        <div class="card-body">
            <?php if(count($modules) == 0): ?>
            <p class="text-center">
                <?php echo e(__('No applications found')); ?>

            </p>
            <?php endif; ?>
            <div class="row">
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header p-2">
                            <h6 class="mb-0">
                            <?php echo e($module->getAlias()); ?>

                            </h6>
                        </div>
                        <div class="card-body p-2" style="min-height: 80px;">
                            <?php echo e($module->getDescription()); ?>

                        </div>
                        <div class="card-footer p-2">
                        <?php echo e($module->isEnabled() == '1' ? 'Enabled' : 'Disabled'); ?>

                            <form onclick="return confirm('<?php echo e(__('Are you sure? Enabling an applications updates the database and disabling an application rollback those database changes. Data will be lost in case of disabling an application.')); ?>' )"
                                class="float-right" method="post" action="<?php echo e(route('admin.system-applications.change-status', $module->getName())); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-sm <?php echo e($module->isEnabled() == '1' ? 'btn-danger' : 'btn-success'); ?>">
                                    <?php echo e($module->isEnabled() == '1' ? 'Disable' : 'Enable'); ?>

                                </button>
                            </form>
                            <form class="float-right" method="post" action="<?php echo e(route('admin.system-applications.update-database', $module->getName())); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-sm btn-secondary mx-1">
                                    <?php echo e(__('Update database')); ?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('speed-admin::layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/applications/index.blade.php ENDPATH**/ ?>