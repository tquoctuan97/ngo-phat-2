<?php $__env->startSection('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular); ?>

<?php $__env->startSection('css'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="<?php echo e($dataType->icon, false); ?>"></i>
        <?php echo e(__('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular, false); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form"
              action="<?php if(!is_null($dataTypeContent->getKey())): ?><?php echo e(route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()), false); ?><?php else: ?><?php echo e(route('voyager.'.$dataType->slug.'.store'), false); ?><?php endif; ?>"
              method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- PUT Method if we are editing -->
            <?php if(isset($dataTypeContent->id)): ?>
                <?php echo e(method_field("PUT"), false); ?>

            <?php endif; ?>
            <?php echo e(csrf_field(), false); ?>


            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-bordered">
                    
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error, false); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name"><?php echo e(__('voyager::generic.name'), false); ?></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('voyager::generic.name'), false); ?>"
                                       value="<?php echo e($dataTypeContent->name ?? '', false); ?>">
                            </div>

                            <div class="form-group">
                                <label for="email"><?php echo e(__('voyager::generic.email'), false); ?></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo e(__('voyager::generic.email'), false); ?>"
                                       value="<?php echo e($dataTypeContent->email ?? '', false); ?>">
                            </div>

                            <div class="form-group">
                                <label for="password"><?php echo e(__('voyager::generic.password'), false); ?></label>
                                <?php if(isset($dataTypeContent->password)): ?>
                                    <br>
                                    <small><?php echo e(__('voyager::profile.password_hint'), false); ?></small>
                                <?php endif; ?>
                                <input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
                            </div>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editRoles', $dataTypeContent)): ?>
                                <div class="form-group">
                                    <label for="default_role"><?php echo e(__('voyager::profile.role_default'), false); ?></label>
                                    <?php
                                        $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

                                        $row     = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
                                        $options = $row->details;
                                    ?>
                                    <?php echo $__env->make('voyager::formfields.relationship', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group">
                                    <label for="additional_roles"><?php echo e(__('voyager::profile.roles_additional'), false); ?></label>
                                    <?php
                                        $row     = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
                                        $options = $row->details;
                                    ?>
                                    <?php echo $__env->make('voyager::formfields.relationship', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            if (isset($dataTypeContent->locale)) {
                                $selected_locale = $dataTypeContent->locale;
                            } else {
                                $selected_locale = config('app.locale', 'en');
                            }

                            ?>
                            <div class="form-group">
                                <label for="locale"><?php echo e(__('voyager::generic.locale'), false); ?></label>
                                <select class="form-control select2" id="locale" name="locale">
                                    <?php $__currentLoopData = Voyager::getLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($locale, false); ?>"
                                    <?php echo e(($locale == $selected_locale ? 'selected' : ''), false); ?>><?php echo e($locale, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-body">
                            <div class="form-group">
                                <?php if(isset($dataTypeContent->avatar)): ?>
                                    <img src="<?php echo e(filter_var($dataTypeContent->avatar, FILTER_VALIDATE_URL) ? $dataTypeContent->avatar : Voyager::image( $dataTypeContent->avatar ), false); ?>" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" />
                                <?php endif; ?>
                                <input type="file" data-name="avatar" name="avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right save">
                <?php echo e(__('voyager::generic.save'), false); ?>

            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="<?php echo e(route('voyager.upload'), false); ?>" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            <?php echo e(csrf_field(), false); ?>

            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="<?php echo e($dataType->slug, false); ?>">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/users/edit-add.blade.php ENDPATH**/ ?>