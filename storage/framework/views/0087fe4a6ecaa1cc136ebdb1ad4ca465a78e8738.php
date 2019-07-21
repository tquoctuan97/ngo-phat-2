<textarea class="form-control richTextBox" name="<?php echo e($row->field, false); ?>" id="richtext<?php echo e($row->field, false); ?>">
    <?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? ''), false); ?>

</textarea>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/formfields/rich_text_box.blade.php ENDPATH**/ ?>