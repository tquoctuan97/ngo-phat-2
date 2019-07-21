<?php $action = new $action($dataType, $data); ?>

<?php if($action->shouldActionDisplayOnDataType()): ?>
    <?php if($data): ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($action->getPolicy(), $data)): ?>
            <a href="<?php echo e($action->getRoute($dataType->name), false); ?>" title="<?php echo e($action->getTitle(), false); ?>" <?php echo $action->convertAttributesToHtml(); ?>>
                <i class="<?php echo e($action->getIcon(), false); ?>"></i> <span class="hidden-xs hidden-sm"><?php echo e($action->getTitle(), false); ?></span>
            </a>
        <?php endif; ?>
    <?php elseif(method_exists($action, 'massAction')): ?>
        <form method="post" action="<?php echo e(route('voyager.'.$dataType->slug.'.action'), false); ?>" style="display:inline">
            <?php echo e(csrf_field(), false); ?>

            <button type="submit" <?php echo $action->convertAttributesToHtml(); ?>><i class="<?php echo e($action->getIcon(), false); ?>"></i>  <?php echo e($action->getTitle(), false); ?></button>
            <input type="hidden" name="action" value="<?php echo e(get_class($action), false); ?>">
            <input type="hidden" name="ids" value="" class="selected_ids">
        </form>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/bread/partials/actions.blade.php ENDPATH**/ ?>