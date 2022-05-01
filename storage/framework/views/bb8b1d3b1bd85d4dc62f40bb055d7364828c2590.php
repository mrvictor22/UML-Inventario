<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">

                        <?php $__env->startComponent('speed-admin::components.lang_selector'); ?>
                        <?php echo $__env->renderComponent(); ?>
                        <br>

                        <?php $__env->startComponent('speed-admin::components.validation_errors'); ?>
                        <?php echo $__env->renderComponent(); ?>

                        <?php if(session()->has('status')): ?>
                            <p class="alert alert-success"><?php echo e(session('status')); ?></p>
                        <?php endif; ?>

                        <form method="post" action="<?php echo e(route('admin.login')); ?>">
                            <input type="hidden" name="redirect_after_login" value="<?php echo e(request()->redirect_after_login); ?>">
                            <?php echo csrf_field(); ?>
                            <h1><?php echo e(__('Login')); ?></h1>
                            <p class="text-muted"><?php echo e(__('Sign In to your account')); ?></p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user')); ?>">
                                            </use>
                                        </svg></span></div>
                                <input class="form-control" name="email" type="text" placeholder="<?php echo e(__('Email')); ?>">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')); ?>">
                                            </use>
                                        </svg></span></div>
                                <input class="form-control" name="password" type="password" placeholder="<?php echo e(__('Password')); ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit"><?php echo e(__('Login')); ?></button>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-link px-0"
                                        href="<?php echo e(route('admin.forgot-password-form')); ?>"><?php echo e(__('Forgot password?')); ?></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary pt-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h1 class="mt-5"><?php echo e(config('speed-admin.title')); ?></h1>
                            <p><?php echo e(__('Welcome back')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('speed-admin::layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/auth/login.blade.php ENDPATH**/ ?>