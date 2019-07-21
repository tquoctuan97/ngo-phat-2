<?php $__env->startSection('content'); ?>

<!--About Us-->
<body>
<?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $a->body; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\resources\views/page/about.blade.php ENDPATH**/ ?>