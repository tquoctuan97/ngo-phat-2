<input <?php if($row->required == 1): ?> required <?php endif; ?> type="text" class="form-control" name="<?php echo e($row->field, false); ?>"
        placeholder="<?php echo e(old($row->field, $options->placeholder ?? $row->display_name), false); ?>"
       <?php echo isBreadSlugAutoGenerator($options); ?>

       value="<?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? ''), false); ?>">
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/formfields/text.blade.php ENDPATH**/ ?>