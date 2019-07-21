<?php $__env->startSection('page_title', __('voyager::generic.media')); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content container-fluid">
        <?php echo $__env->make('voyager::alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">

                <div class="admin-section-title">
                    <h3><i class="voyager-images"></i> <?php echo e(__('voyager::generic.media'), false); ?></h3>
                </div>
                <div class="clear"></div>
                <div id="filemanager">
                    <media-manager
                        base-path="<?php echo e(config('voyager.media.path', '/'), false); ?>"
                        :show-folders="<?php echo e(config('voyager.media.show_folders', true) ? 'true' : 'false', false); ?>"
                        :allow-upload="<?php echo e(config('voyager.media.allow_upload', true) ? 'true' : 'false', false); ?>"
                        :allow-move="<?php echo e(config('voyager.media.allow_move', true) ? 'true' : 'false', false); ?>"
                        :allow-delete="<?php echo e(config('voyager.media.allow_delete', true) ? 'true' : 'false', false); ?>"
                        :allow-create-folder="<?php echo e(config('voyager.media.allow_create_folder', true) ? 'true' : 'false', false); ?>"
                        :allow-rename="<?php echo e(config('voyager.media.allow_rename', true) ? 'true' : 'false', false); ?>"
                        :allow-crop="<?php echo e(config('voyager.media.allow_crop', true) ? 'true' : 'false', false); ?>"
                        :details="<?php echo e(json_encode(['thumbnails' => config('voyager.media.thumbnails', []), 'watermark' => config('voyager.media.watermark', (object)[])]), false); ?>"
                        ></media-manager>
                </div>
            </div><!-- .row -->
        </div><!-- .col-md-12 -->
    </div><!-- .page-content container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script>
new Vue({
    el: '#filemanager'
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/media/index.blade.php ENDPATH**/ ?>