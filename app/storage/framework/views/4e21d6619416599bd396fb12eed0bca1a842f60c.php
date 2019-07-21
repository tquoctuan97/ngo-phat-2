<?php if(isset($dataTypeContent->{$row->field})): ?>
    <?php if(json_decode($dataTypeContent->{$row->field}) !== null): ?>
        <?php $__currentLoopData = json_decode($dataTypeContent->{$row->field}); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div data-field-name="<?php echo e($row->field, false); ?>">
            <a class="fileType" target="_blank"
              href="<?php echo e(Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '', false); ?>"
              data-file-name="<?php echo e($file->original_name, false); ?>" data-id="<?php echo e($dataTypeContent->id, false); ?>">
              <?php echo e($file->original_name ?: '', false); ?>

            </a>
            <a href="#" class="voyager-x remove-multi-file"></a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
      <div data-field-name="<?php echo e($row->field, false); ?>">
        <a class="fileType" target="_blank"
          href="<?php echo e(Storage::disk(config('voyager.storage.disk'))->url($dataTypeContent->{$row->field}), false); ?>"
          data-file-name="<?php echo e($dataTypeContent->{$row->field}, false); ?>" data-id="<?php echo e($dataTypeContent->id, false); ?>">>
          Download
        </a>
        <a href="#" class="voyager-x remove-single-file"></a>
      </div>
    <?php endif; ?>
<?php endif; ?>
<input <?php if($row->required == 1 && !isset($dataTypeContent->{$row->field})): ?> required <?php endif; ?> type="file" name="<?php echo e($row->field, false); ?>[]" multiple="multiple">
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/formfields/file.blade.php ENDPATH**/ ?>