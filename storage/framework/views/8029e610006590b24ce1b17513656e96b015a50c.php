<div class="alerts">
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-<?php echo e($alert->type, false); ?> alert-name-<?php echo e($alert->name, false); ?>">
            <?php $__currentLoopData = $alert->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $component->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\ngophat-phase-1\ngo-phat-2\vendor\tcg\voyager\src/../resources/views/alerts.blade.php ENDPATH**/ ?>