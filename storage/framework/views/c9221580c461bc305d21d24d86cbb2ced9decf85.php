<?php if(isset($dataTypeContent->{$row->field})): ?>
    <div data-field-name="<?php echo e($row->field, false); ?>">
        <a href="#" class="voyager-x remove-single-image" style="position:absolute;"></a>
        <img src="<?php if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)): ?><?php echo e(Voyager::image( $dataTypeContent->{$row->field} ), false); ?><?php else: ?><?php echo e($dataTypeContent->{$row->field}, false); ?><?php endif; ?>"
          data-file-name="<?php echo e($dataTypeContent->{$row->field}, false); ?>" data-id="<?php echo e($dataTypeContent->id, false); ?>"
          style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
    </div>
<?php endif; ?>
<input <?php if($row->required == 1 && !isset($dataTypeContent->{$row->field})): ?> required <?php endif; ?> type="file" name="<?php echo e($row->field, false); ?>" accept="image/*">
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/formfields/image.blade.php ENDPATH**/ ?>