<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version  v3.4.0
* @link  https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en" <?php echo e($is_rtl ? 'dir=rtl' : ''); ?> >

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php echo e(config('speed-admin.meta_description')); ?>">
    <meta name="author" content="<?php echo e(config('speed-admin.meta_author')); ?>">
    <meta name="keyword" content="<?php echo e(config('speed-admin.meta_keyword')); ?>">
    <title><?php echo e(config('speed-admin.title')); ?></title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/manifest.json')); ?>">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/favicon/ms-icon-144x144.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/css/style.css')); ?>" rel="stylesheet">

    <!-- select2 -->
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'select2-4.0.13/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'select2-bootstrap4-theme.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'flatpickr/css/fp.min.css')); ?>" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');

    </script>
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/chartjs/css/coreui-chartjs.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/css/free.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'fontawesome-free-5.15.2-web/css/all.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'speed-admin/css/main.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'speed-admin/css/belongs_to.css')); ?>" rel="stylesheet">
    
    <script>

        // route paths for js files
        window.showAddNewFormRoute = "<?php echo e(route('admin.show-add-new-form')); ?>";
        window.adminBaseUrl = "<?php echo e(route('admin.base')); ?>";
        window.adminLoginUrl = "<?php echo e(route('admin.login')); ?>";

        // translations for js files
        window.ajaxError = "<?php echo e(__('Error occurred while making request to server. Please try again.')); ?>"
        window.noPermissionMessage = "<?php echo __('You don\'t have permission to perform this operation'); ?>";
        window.errorText = "<?php echo e(__('Error')); ?>"
        window.successText = "<?php echo e(__('Success')); ?>"
        window.areYouSure = "<?php echo e(__('Are you sure?')); ?>";
        window.youCantUndoIt = "<?php echo __('You won\'t be able to revert this!'); ?>";
        window.yesIamSure = "<?php echo e(__('Yes, I am sure.')); ?>";
        window.csrfToken = "<?php echo e(csrf_token()); ?>";
        window.addNew = "<?php echo e(__('Add New')); ?>";
        window.loading = "<?php echo e(__('Loading...')); ?>";
    </script>

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'jquery-3.5.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'axios-0.21.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'tinymce.min.js')); ?>"></script>

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'speed-admin/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'speed-admin/js/belongs_to.js')); ?>"></script>
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'speed-admin/js/model.js')); ?>"></script>

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'flatpickr/js/fp.min.js')); ?>"></script>

</head>

<body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand">
            <!-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/brand/coreui.svg#full')); ?>"></use>
            </svg>
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/brand/coreui.svg#signet')); ?>"></use>
            </svg> -->
            <h3 class="c-sidebar-brand-full">
                <?php echo e(config('speed-admin.title')); ?>

            </h3>
            <h3 class="c-sidebar-brand-minimized">
                <?php echo e(config('speed-admin.title')[0]); ?>

            </h3>
        </div>
        <ul class="c-sidebar-nav">
            <!-- TODO: sidebar menues here -->
            <?php $__env->startComponent('speed-admin::components.sidebar.menu'); ?>
            <?php echo $__env->renderComponent(); ?>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-menu')); ?>"></use>
                </svg>
            </button>
            <a class="c-header-brand d-lg-none" href="<?php echo e(url(config('speed-admin.admin_url'))); ?>">
                <h4><?php echo e(config('speed-admin.title')); ?></h4>
                <!-- <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/assets/brand/coreui.svg#full')); ?>"></use>
                </svg> -->
            </a>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-menu')); ?>"></use>
                </svg>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <!-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li> -->
                <!-- TODO: top menu here -->
            </ul>
            <ul class="c-header-nav <?php echo e($is_rtl ? 'ml-4 mr-auto' : 'ml-auto mr-4'); ?>">
                
                <!--
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-bell')); ?>"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-list-rich')); ?>"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-envelope-open')); ?>"></use>
                        </svg></a></li>
                -->
                <?php $__env->startComponent('speed-admin::components.lang_selector'); ?>
                <?php echo $__env->renderComponent(); ?>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" 
                            src="<?php echo e(route('admin.get-uploaded-image') . '?path=' . \Auth::user()->picture); ?>"
                                alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                        <a class="dropdown-item" href="<?php echo e(route('admin.profile.form')); ?>">
                            
                            <svg class="c-icon mr-2">
                                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user')); ?>"></use>
                            </svg> 
                            <?php echo e(__('Profile')); ?>

                        </a>

                        <a class="dropdown-item" href="<?php echo e(route('admin.change-password-form')); ?>">
                            
                            <svg class="c-icon mr-2">
                                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')); ?>"></use>
                            </svg> 
                            <?php echo e(__('Change password')); ?>

                        </a>

                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">
                            <!-- <svg class="c-icon mr-2">
                                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')); ?>"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"> -->
                            <svg class="c-icon mr-2">
                                <use xlink:href="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/svg/free.svg#cil-account-logout')); ?>"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>

            <?php if(isset($breadcrumbs) && count($breadcrumbs) > 0): ?>
            <div class="c-subheader px-3">
                <ol class="breadcrumb border-0 m-0">
                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item <?php echo e($loop->last ? 'active' : ''); ?>">
                        <?php echo e($breadcrumb); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </div>
            <?php endif; ?>
        </header>
        <div class="c-body">
            <main class="c-main p-2">
                <div class="container-fluid p-0">
                    <div class="fade-in">
                    
                        <?php echo $__env->yieldContent('content'); ?>

                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div>
                    <?php echo config('speed-admin.footer_left_html'); ?>

                </div>
                <div class="ml-auto">
                <?php echo config('speed-admin.footer_right_html'); ?>

                </div>
            </footer>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/coreui/js/coreui.bundle.min.js')); ?>"></script>
    <!--[if IE]><!-->
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/icons/js/svgxuse.min.js')); ?>"></script>
    <!--<![endif]-->

    <!-- Plugins and scripts required by this view-->
    
    <!-- TODO: page specific, should be removed from layout -->
    <!-- <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js')); ?>"></script> -->
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/vendors/@coreui/utils/js/coreui-utils.js')); ?>"></script>
    
    <!-- main.js -->
    <!-- <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'coreui3.4.0/js/main.js')); ?>"></script> -->

    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'axios-0.21.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset(config('speed-admin.speed_admin_assets_path').'select2-4.0.13/js/select2.full.min.js')); ?>"></script>

    <script>
        $(window).bind("popstate", function () {
            window.location.reload();
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/layouts/layout.blade.php ENDPATH**/ ?>