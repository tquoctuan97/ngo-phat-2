<?php $__env->startSection('page_title', __('voyager::generic.view').' '.$dataType->display_name_singular); ?>

<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="<?php echo e($dataType->icon, false); ?>"></i> <?php echo e(__('voyager::generic.viewing'), false); ?> <?php echo e(ucfirst($dataType->display_name_singular), false); ?> &nbsp;

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $dataTypeContent)): ?>
            <a href="<?php echo e(route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()), false); ?>" class="btn btn-info">
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                <?php echo e(__('voyager::generic.edit'), false); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $dataTypeContent)): ?>
            <?php if($isSoftDeleted): ?>
                <a href="<?php echo e(route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()), false); ?>" title="<?php echo e(__('voyager::generic.restore'), false); ?>" class="btn btn-default restore" data-id="<?php echo e($dataTypeContent->getKey(), false); ?>" id="restore-<?php echo e($dataTypeContent->getKey(), false); ?>">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm"><?php echo e(__('voyager::generic.restore'), false); ?></span>
                </a>
            <?php else: ?>
                <a href="javascript:;" title="<?php echo e(__('voyager::generic.delete'), false); ?>" class="btn btn-danger delete" data-id="<?php echo e($dataTypeContent->getKey(), false); ?>" id="delete-<?php echo e($dataTypeContent->getKey(), false); ?>">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm"><?php echo e(__('voyager::generic.delete'), false); ?></span>
                </a>
            <?php endif; ?>
        <?php endif; ?>

        <a href="<?php echo e(route('voyager.'.$dataType->slug.'.index'), false); ?>" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            <?php echo e(__('voyager::generic.return_to_list'), false); ?>

        </a>
    </h1>
    <?php echo $__env->make('voyager::multilingual.language-selector', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <!-- form start -->
                    <?php $__currentLoopData = $dataType->readRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($dataTypeContent->{$row->field.'_read'}) {
                            $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_read'};
                        }
                        ?>
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title"><?php echo e($row->display_name, false); ?></h3>
                        </div>

                        <div class="panel-body" style="padding-top:0;">
                            <?php if(isset($row->details->view)): ?>
                                <?php echo $__env->make($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => 'read'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($row->type == "image"): ?>
                                <img class="img-responsive"
                                     src="<?php echo e(filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}), false); ?>">
                            <?php elseif($row->type == 'multiple_images'): ?>
                                <?php if(json_decode($dataTypeContent->{$row->field})): ?>
                                    <?php $__currentLoopData = json_decode($dataTypeContent->{$row->field}); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img class="img-responsive"
                                             src="<?php echo e(filter_var($file, FILTER_VALIDATE_URL) ? $file : Voyager::image($file), false); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <img class="img-responsive"
                                         src="<?php echo e(filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}), false); ?>">
                                <?php endif; ?>
                            <?php elseif($row->type == 'relationship'): ?>
                                 <?php echo $__env->make('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($row->type == 'select_dropdown' && property_exists($row->details, 'options') &&
                                    !empty($row->details->options->{$dataTypeContent->{$row->field}})
                            ): ?>
                                <?php echo $row->details->options->{$dataTypeContent->{$row->field}};?>
                            <?php elseif($row->type == 'select_multiple'): ?>
                                <?php if(property_exists($row->details, 'relationship')): ?>

                                    <?php $__currentLoopData = json_decode($dataTypeContent->{$row->field}); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($item->{$row->field}, false); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php elseif(property_exists($row->details, 'options')): ?>
                                    <?php if(!empty(json_decode($dataTypeContent->{$row->field}))): ?>
                                        <?php $__currentLoopData = json_decode($dataTypeContent->{$row->field}); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(@$row->details->options->{$item}): ?>
                                                <?php echo e($row->details->options->{$item} . (!$loop->last ? ', ' : ''), false); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php echo e(__('voyager::generic.none'), false); ?>

                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php elseif($row->type == 'date' || $row->type == 'timestamp'): ?>
                                <?php echo e(property_exists($row->details, 'format') ? \Carbon\Carbon::parse($dataTypeContent->{$row->field})->formatLocalized($row->details->format) : $dataTypeContent->{$row->field}, false); ?>

                            <?php elseif($row->type == 'checkbox'): ?>
                                <?php if(property_exists($row->details, 'on') && property_exists($row->details, 'off')): ?>
                                    <?php if($dataTypeContent->{$row->field}): ?>
                                    <span class="label label-info"><?php echo e($row->details->on, false); ?></span>
                                    <?php else: ?>
                                    <span class="label label-primary"><?php echo e($row->details->off, false); ?></span>
                                    <?php endif; ?>
                                <?php else: ?>
                                <?php echo e($dataTypeContent->{$row->field}, false); ?>

                                <?php endif; ?>
                            <?php elseif($row->type == 'color'): ?>
                                <span class="badge badge-lg" style="background-color: <?php echo e($dataTypeContent->{$row->field}, false); ?>"><?php echo e($dataTypeContent->{$row->field}, false); ?></span>
                            <?php elseif($row->type == 'coordinates'): ?>
                                <?php echo $__env->make('voyager::partials.coordinates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($row->type == 'rich_text_box'): ?>
                                <?php echo $__env->make('voyager::multilingual.input-hidden-bread-read', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <p><?php echo $dataTypeContent->{$row->field}; ?></p>
                            <?php elseif($row->type == 'file'): ?>
                                <?php if(json_decode($dataTypeContent->{$row->field})): ?>
                                    <?php $__currentLoopData = json_decode($dataTypeContent->{$row->field}); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '', false); ?>">
                                            <?php echo e($file->original_name ?: '', false); ?>

                                        </a>
                                        <br/>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <a href="<?php echo e(Storage::disk(config('voyager.storage.disk'))->url($row->field) ?: '', false); ?>">
                                        <?php echo e(__('voyager::generic.download'), false); ?>

                                    </a>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php echo $__env->make('voyager::multilingual.input-hidden-bread-read', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <p><?php echo e($dataTypeContent->{$row->field}, false); ?></p>
                            <?php endif; ?>
                        </div><!-- panel-body -->
                        <?php if(!$loop->last): ?>
                            <hr style="margin:0;">
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>

    
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__('voyager::generic.close'), false); ?>"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> <?php echo e(__('voyager::generic.delete_question'), false); ?> <?php echo e(strtolower($dataType->display_name_singular), false); ?>?</h4>
                </div>
                <div class="modal-footer">
                    <form action="<?php echo e(route('voyager.'.$dataType->slug.'.index'), false); ?>" id="delete_form" method="POST">
                        <?php echo e(method_field('DELETE'), false); ?>

                        <?php echo e(csrf_field(), false); ?>

                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="<?php echo e(__('voyager::generic.delete_confirm'), false); ?> <?php echo e(strtolower($dataType->display_name_singular), false); ?>">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><?php echo e(__('voyager::generic.cancel'), false); ?></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <?php if($isModelTranslatable): ?>
        <script>
            $(document).ready(function () {
                $('.side-body').multilingual();
            });
        </script>
        <script src="<?php echo e(voyager_asset('js/multilingual.js'), false); ?>"></script>
    <?php endif; ?>
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/bread/read.blade.php ENDPATH**/ ?>