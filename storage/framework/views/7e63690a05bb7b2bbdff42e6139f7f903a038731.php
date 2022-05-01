<?php
    $uniqid = uniqid();
?>
<div class="card">
    <div class="card-header p-1">
        <div class="row">
            <div class="col-md-8">
                <h5 class="mb-0 p-1" style="display: inline;"><?php echo e(__($model->getPluralTitle())); ?></h5>
                
                <div class="input-group input-group-sm" style="display: inline-flex; width: 250px">
                    <input form="form-options-<?php echo e($uniqid); ?>" type="text" name="__search__" class="form-control" placeholder="click search button">
                    <div class="input-group-append">
                        <button onclick="speedAdmin.getGridData('<?php echo e($uniqid); ?>')" class="btn btn-outline-secondary" type="button">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-<?php echo e($is_rtl ? 'left' : 'right'); ?>">


                <!-- <button class="btn btn-sm btn-info" onclick="speedAdmin.toggleGridFilters('<?php echo e($uniqid); ?>')">
                    <i class="cil-filter"></i> <?php echo e(__('Filter')); ?>

                </button> -->

                <?php if($model->_is_add_enabled): ?>
                    <?php if(\SpeedAdminHelpers::hasPermission($model->getAddPermissionId())): ?>
                    <a class="btn btn-sm btn-primary" href="<?php echo e($index_url . '/create'); ?>">
                        <i class="cil-plus"></i> <?php echo e(__('Add new')); ?>

                    </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="card-body p-2">
        <form id="form-options-<?php echo e($uniqid); ?>" onsubmit="event.preventDefault(); speedAdmin.getGridData('<?php echo e($uniqid); ?>')">
            <input type="hidden" name="page" value="<?php echo e(request()->page); ?>">
            <input type="hidden" name="order" value="<?php echo e(request()->order); ?>">

            <div class="filters d-none">
                <?php $__env->startComponent('speed-admin::components.crud.grid_filters', [
                    'model' => $model,
                    'uniqid' => $uniqid
                ]); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </form>

        <div class="row mb-2">
            <div class="col-md-6 input-group input-group-sm">
                <select class="form-control" id="grid_action_<?php echo e($uniqid); ?>">
                    <option value="">---</option>
                    <option value="__delete__"><?php echo e(__('Delete')); ?></option>
                    <?php $__currentLoopData = $model->getGridActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($action['id']); ?>"><?php echo e($action['title']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="input-group-append">
                    <button type="button" onclick="speedAdmin.gridActionSelectedBtnClicked('<?php echo e($uniqid); ?>')" class="btn btn-outline-secondary"><?php echo e(__('Apply bulk action on selected')); ?></button>
                </div>
                <div class="input-group-append">
                    <button type="button" onclick="speedAdmin.gridActionAllBtnClicked('<?php echo e($uniqid); ?>')" class="btn btn-outline-secondary"><?php echo e(__('Apply on all')); ?></button>
                </div>
            </div>
        </div>

        <div id="selected_items_container_<?php echo e($uniqid); ?>" class="mb-2">
            <input type="hidden" name="selected_items_ids_<?php echo e($uniqid); ?>">
            <textarea style="display:none;" class="form-control" readonly name="selected_items_texts_<?php echo e($uniqid); ?>"></textarea>
        </div>

        <div class="table-responsive">

            <?php
            $other_action_buttons = '';
            foreach($model->getGridActions() as $action) {
                $other_action_buttons .= '<button type="button" '.
                    'onclick="speedAdmin.gridOtherActionButtonClicked(\''.$uniqid.'\', this, \''.$action['id'].'\')" '.
                    'class="'.$action['button_classes'].'">' . 
                    $action['button_inner_html'] . 
                '</button>';
            }
            ?>
            <div style="display: none;" id="other_actions_buttons_template_<?php echo e($uniqid); ?>">
                <?php echo $other_action_buttons; ?>

            </div>

            <table
                data-model="<?php echo e(urlencode(get_class($model))); ?>"
                data-has_edit_permission="<?php echo e(\SpeedAdminHelpers::hasPermission($model->getEditPermissionId())); ?>"
                data-has_delete_permission="<?php echo e(\SpeedAdminHelpers::hasPermission($model->getDeletePermissionId())); ?>"
                data-get_data_url="<?php echo e($get_data_url); ?>"
                data-index_url="<?php echo e($index_url); ?>"
                id="table_<?php echo e($uniqid); ?>" 
                class="table table-sm">
                <thead>
                    <tr class="bg-dark">
                    
                        <?php if(isset($show_check_boxes) && $show_check_boxes): ?>
                        <th class="checkboxes">

                        </th>
                        <?php endif; ?>

                        <?php if(isset($show_radio_buttons) && $show_radio_buttons): ?>
                        <th class="radiobuttons">
                            
                        </th>
                        <?php endif; ?>

                        <?php $__currentLoopData = $model->getGridColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th style="white-space: nowrap;" data-id="<?php echo e($column['id']); ?>">
                                <?php echo e($column['title']); ?>

                                <?php if( isset($column['order_by']) ): ?>
                                <button 
                                    class="btn-order btn btn-secondary btn-sm py-0 px-1" 
                                    id="order_button_<?php echo e($column['id']); ?>_<?php echo e($uniqid); ?>" onclick='speedAdmin.setGridOrder("<?php echo e($uniqid); ?>", "<?php echo e($column['id']); ?>")'>
                                        <span></span>
                                        <i class="fas fa-arrows-alt-v"></i>
                                </button>
                                <?php endif; ?>
                            </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <th>
                            <?php echo e(__('Action')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody id="table-body-<?php echo e($uniqid); ?>">

                </tbody>
            </table>
        </div>
        <div id="loader-<?php echo e($uniqid); ?>" class="text-center">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
        <div class="row">
            <div class="col-md-12" id="table-pagination-info-<?php echo e($uniqid); ?>">
            </div>
            <div class="col-md-12">
                <div class="row px-3">
                    <select onchange="speedAdmin.getGridData('<?php echo e($uniqid); ?>')" class="form-control-sm" name="per_page" form="form-options-<?php echo e($uniqid); ?>">
                        <?php $__currentLoopData = [5, 10, 20, 30, 50, 100]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($per_page); ?>" 
                        <?php echo e(request()->per_page == '' && $per_page == 10 ? 'selected' : (request()->per_page == $per_page ? 'selected' : '')); ?>>
                            <?php echo e(__(':count per page', ['count' => $per_page])); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span id="table-pagination-<?php echo e($uniqid); ?>">
                    </span>
                    <span>
                        <button onclick="speedAdmin.getGridData('<?php echo e($uniqid); ?>')" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-circle-notch"></i> <?php echo e(__('Reload')); ?>

                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    speedAdmin.ready(function(){
        speedAdmin.getGridData('<?php echo e($uniqid); ?>')

        document.addEventListener('click', function (event) {

            if (event.target.matches("#table-pagination-<?php echo e($uniqid); ?> a")) {
                // Don't follow the link
                event.preventDefault();

                // Log the clicked element in the console
                let page = speedAdmin.getParameterByNameFromUrl('page', event.target.href)
                document.querySelector('#form-options-<?php echo e($uniqid); ?> [name="page"]').value = page;
                speedAdmin.getGridData('<?php echo e($uniqid); ?>');
            }

        }, false);

        speedAdmin.updateGridOrderButtonsUI('<?php echo e($uniqid); ?>')
    })
</script><?php /**PATH C:\Users\vc703\Documents\UTEC\UML\MAYO\www\UML-Inventario\vendor\muhammad-inaam-munir\speed-admin\src/../resources/views/components/crud/grid.blade.php ENDPATH**/ ?>