<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('<?php echo e($image, false); ?>');">
    <div class="dimmer"></div>
    <div class="panel-content">
        <?php if(isset($icon)): ?><i class='<?php echo e($icon, false); ?>'></i><?php endif; ?>
        <h4><?php echo $title; ?></h4>
        <p><?php echo $text; ?></p>
        <a href="<?php echo e($button['link'], false); ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/dimmer.blade.php ENDPATH**/ ?>