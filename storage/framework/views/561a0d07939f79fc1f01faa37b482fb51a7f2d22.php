<?php if(!isset($innerLoop)): ?>
<ul class="nav navbar-nav">
<?php else: ?>
<ul class="dropdown-menu">
<?php endif; ?>

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

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    ?>

    <li class="<?php echo e($listItemClass, false); ?>">
        <a href="<?php echo e(url($item->link()), false); ?>" target="<?php echo e($item->target, false); ?>" style="<?php echo e($styles, false); ?>" <?php echo $linkAttributes ?? ''; ?>>
            <?php echo $icon; ?>

            <span><?php echo e($item->title, false); ?></span>
            <?php echo $caret; ?>

        </a>
        <?php if(!$originalItem->children->isEmpty()): ?>
        <?php echo $__env->make('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/menu/bootstrap.blade.php ENDPATH**/ ?>