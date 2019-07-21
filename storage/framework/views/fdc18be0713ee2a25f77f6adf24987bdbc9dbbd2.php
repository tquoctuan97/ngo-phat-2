<?php $__env->startSection('css'); ?>
    <style>
        .user-email {
            font-size: .85rem;
            margin-bottom: 1.5em;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div style="background-size:cover; background-image: url(<?php echo e(Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('/images/bg.jpg')), false); ?>); background-position: center center;position:absolute; top:0; left:0; width:100%; height:300px;"></div>
    <div style="height:160px; display:block; width:100%"></div>
    <div style="position:relative; z-index:9; text-align:center;">
        <img src="<?php if( !filter_var(app('VoyagerAuth')->user()->avatar, FILTER_VALIDATE_URL)): ?><?php echo e(Voyager::image( app('VoyagerAuth')->user()->avatar ), false); ?><?php else: ?><?php echo e(app('VoyagerAuth')->user()->avatar, false); ?><?php endif; ?>"
             class="avatar"
             style="border-radius:50%; width:150px; height:150px; border:5px solid #fff;"
             alt="<?php echo e(app('VoyagerAuth')->user()->name, false); ?> avatar">
        <h4><?php echo e(ucwords(app('VoyagerAuth')->user()->name), false); ?></h4>
        <div class="user-email text-muted"><?php echo e(ucwords(app('VoyagerAuth')->user()->email), false); ?></div>
        <p><?php echo e(app('VoyagerAuth')->user()->bio, false); ?></p>
        <a href="<?php echo e(route('voyager.users.edit', app('VoyagerAuth')->user()->getKey()), false); ?>" class="btn btn-primary"><?php echo e(__('voyager::profile.edit'), false); ?></a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/profile.blade.php ENDPATH**/ ?>