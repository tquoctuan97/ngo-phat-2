


<?php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

?>

<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $styles = null;
        $icon = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    ?>

    
        <a class="navigation__items" href="<?php echo e(url($item->link()), false); ?>">
            <?php echo e($item->title, false); ?>

        </a>
        <?php if(!$originalItem->children->isEmpty()): ?>
            <?php echo $__env->make('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(Route('order'), false); ?>" class="btn__cta">Báo giá dịch vụ</a>

</ul>


        
      <?php /**PATH C:\xampp\htdocs\ngophat-phase-1\ngo-phat-2\resources\views/menu.blade.php ENDPATH**/ ?>