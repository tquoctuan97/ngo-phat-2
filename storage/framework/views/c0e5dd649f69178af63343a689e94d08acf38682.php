<?php if($artisan_output): ?>
    <pre>
        <i class="close-output voyager-x"><?php echo e(__('voyager::compass.commands.clear_output'), false); ?></i><span class="art_out"><?php echo e(__('voyager::compass.commands.command_output'), false); ?>:</span><?php echo e(trim(trim($artisan_output,'"')), false); ?>

    </pre>
<?php endif; ?>

<?php $__currentLoopData = $commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="command" data-command="<?php echo e($command->name, false); ?>">
        <code>php artisan <?php echo e($command->name, false); ?></code>
        <small><?php echo e($command->description, false); ?></small><i class="voyager-terminal"></i>
        <form action="<?php echo e(route('voyager.compass.post'), false); ?>" class="cmd_form" method="POST">
            <?php echo e(csrf_field(), false); ?>

            <input type="text" name="args" autofocus class="form-control" placeholder="<?php echo e(__('voyager::compass.commands.additional_args'), false); ?>">
            <input type="submit" class="btn btn-primary pull-right delete-confirm"
                    value="<?php echo e(__('voyager::compass.commands.run_command'), false); ?>">
            <input type="hidden" name="command" id="hidden_cmd" value="<?php echo e($command->name, false); ?>">
        </form>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/compass/includes/commands.blade.php ENDPATH**/ ?>