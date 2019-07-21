<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo e(route('voyager.dashboard'), false); ?>">
                    <div class="logo-icon-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        <?php if($admin_logo_img == ''): ?>
                            <img src="<?php echo e(voyager_asset('images/logo-icon-light.png'), false); ?>" alt="Logo Icon">
                        <?php else: ?>
                            <img src="<?php echo e(Voyager::image($admin_logo_img), false); ?>" alt="Logo Icon">
                        <?php endif; ?>
                    </div>
                    <div class="title"><?php echo e(Voyager::setting('admin.title', 'VOYAGER'), false); ?></div>
                </a>
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background-image:url(<?php echo e(Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/bg.jpg') ), false); ?>); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="<?php echo e($user_avatar, false); ?>" class="avatar" alt="<?php echo e(app('VoyagerAuth')->user()->name, false); ?> avatar">
                    <h4><?php echo e(ucwords(app('VoyagerAuth')->user()->name), false); ?></h4>
                    <p><?php echo e(app('VoyagerAuth')->user()->email, false); ?></p>

                    <a href="<?php echo e(route('voyager.profile'), false); ?>" class="btn btn-primary"><?php echo e(__('voyager::generic.profile'), false); ?></a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <div id="adminmenu">
            <admin-menu :items="<?php echo e(menu('admin', '_json'), false); ?>"></admin-menu>
        </div>
    </nav>
</div>
<?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/dashboard/sidebar.blade.php ENDPATH**/ ?>