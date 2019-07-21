<ol class="dd-list">

<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <li class="dd-item" data-id="<?php echo e($item->id, false); ?>">
        <div class="pull-right item_actions">
            <div class="btn btn-sm btn-danger pull-right delete" data-id="<?php echo e($item->id, false); ?>">
                <i class="voyager-trash"></i> <?php echo e(__('voyager::generic.delete'), false); ?>

            </div>
            <div class="btn btn-sm btn-primary pull-right edit"
                data-id="<?php echo e($item->id, false); ?>"
                data-title="<?php echo e($item->title, false); ?>"
                data-url="<?php echo e($item->url, false); ?>"
                data-target="<?php echo e($item->target, false); ?>"
                data-icon_class="<?php echo e($item->icon_class, false); ?>"
                data-color="<?php echo e($item->color, false); ?>"
                data-route="<?php echo e($item->route, false); ?>"
                data-parameters="<?php echo e(json_encode($item->parameters), false); ?>"
            >
                <i class="voyager-edit"></i> <?php echo e(__('voyager::generic.edit'), false); ?>

            </div>
        </div>
        <div class="dd-handle">
            <?php if($options->isModelTranslatable): ?>
                <?php echo $__env->make('voyager::multilingual.input-hidden', [
                    'isModelTranslatable' => true,
                    '_field_name'         => 'title'.$item->id,
                    '_field_trans'        => json_encode($item->getTranslationsOf('title'))
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <span><?php echo e($item->title, false); ?></span> <small class="url"><?php echo e($item->link(), false); ?></small>
        </div>
        <?php if(!$item->children->isEmpty()): ?>
            <?php echo $__env->make('voyager::menu.admin', ['items' => $item->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ol>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/menu/admin.blade.php ENDPATH**/ ?>