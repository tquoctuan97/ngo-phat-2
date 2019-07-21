<?php $__env->startSection('page_title', __('voyager::generic.viewing').' '.__('voyager::generic.settings')); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .panel-actions .voyager-trash {
            cursor: pointer;
        }
        .panel-actions .voyager-trash:hover {
            color: #e94542;
        }
        .settings .panel-actions{
            right:0px;
        }
        .panel hr {
            margin-bottom: 10px;
        }
        .panel {
            padding-bottom: 15px;
        }
        .sort-icons {
            font-size: 21px;
            color: #ccc;
            position: relative;
            cursor: pointer;
        }
        .sort-icons:hover {
            color: #37474F;
        }
        .voyager-sort-desc {
            margin-right: 10px;
        }
        .voyager-sort-asc {
            top: 10px;
        }
        .page-title {
            margin-bottom: 0;
        }
        .panel-title code {
            border-radius: 30px;
            padding: 5px 10px;
            font-size: 11px;
            border: 0;
            position: relative;
            top: -2px;
        }
        .modal-open .settings  .select2-container {
            z-index: 9!important;
            width: 100%!important;
        }
        .new-setting {
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .new-setting .panel-title {
            margin: 0 auto;
            display: inline-block;
            color: #999fac;
            font-weight: lighter;
            font-size: 13px;
            background: #fff;
            width: auto;
            height: auto;
            position: relative;
            padding-right: 15px;
        }
        .settings .panel-title{
            padding-left:0px;
            padding-right:0px;
        }
        .new-setting hr {
            margin-bottom: 0;
            position: absolute;
            top: 7px;
            width: 96%;
            margin-left: 2%;
        }
        .new-setting .panel-title i {
            position: relative;
            top: 2px;
        }
        .new-settings-options {
            display: none;
            padding-bottom: 10px;
        }
        .new-settings-options label {
            margin-top: 13px;
        }
        .new-settings-options .alert {
            margin-bottom: 0;
        }
        #toggle_options {
            clear: both;
            float: right;
            font-size: 12px;
            position: relative;
            margin-top: 15px;
            margin-right: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            z-index: 9;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .new-setting-btn {
            margin-right: 15px;
            position: relative;
            margin-bottom: 0;
            top: 5px;
        }
        .new-setting-btn i {
            position: relative;
            top: 2px;
        }
        textarea {
            min-height: 120px;
        }
        textarea.hidden{
            display:none;
        }

        .voyager .settings .nav-tabs{
            background:none;
            border-bottom:0px;
        }

        .voyager .settings .nav-tabs .active a{
            border:0px;
        }

        .select2{
            width:100% !important;
            border: 1px solid #f1f1f1;
            border-radius: 3px;
        }

        .voyager .settings input[type=file]{
            width:100%;
        }

        .settings .select2{
            margin-left:10px;
        }

        .settings .select2-selection{
            height: 32px;
            padding: 2px;
        }

        .voyager .settings .nav-tabs > li{
            margin-bottom:-1px !important;
        }

        .voyager .settings .nav-tabs a{
            text-align: center;
            background: #f8f8f8;
            border: 1px solid #f1f1f1;
            position: relative;
            top: -1px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .voyager .settings .nav-tabs a i{
            display: block;
            font-size: 22px;
        }

        .tab-content{
            background:#ffffff;
            border: 1px solid transparent;
        }

        .tab-content>div{
            padding:10px;
        }

        .settings .no-padding-left-right{
            padding-left:0px;
            padding-right:0px;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover{
            background:#fff !important;
            color:#62a8ea !important;
            border-bottom:1px solid #fff !important;
            top:-1px !important;
        }

        .nav-tabs > li a{
            transition:all 0.3s ease;
        }


        .nav-tabs > li.active > a:focus{
            top:0px !important;
        }

        .voyager .settings .nav-tabs > li > a:hover{
            background-color:#fff !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="voyager-settings"></i> <?php echo e(__('voyager::generic.settings'), false); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('voyager::alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(config('voyager.show_dev_tips')): ?>
        <div class="alert alert-info">
            <strong><?php echo e(__('voyager::generic.how_to_use'), false); ?>:</strong>
            <p><?php echo e(__('voyager::settings.usage_help'), false); ?> <code>setting('group.key')</code></p>
        </div>
        <?php endif; ?>
    </div>

    <div class="page-content settings container-fluid">
        <form action="<?php echo e(route('voyager.settings.update'), false); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(method_field("PUT"), false); ?>

            <?php echo e(csrf_field(), false); ?>

            <input type="hidden" name="setting_tab" class="setting_tab" value="<?php echo e($active, false); ?>" />
            <div class="panel">

                <div class="page-content settings container-fluid">
                    <ul class="nav nav-tabs">
                        <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li <?php if($group == $active): ?> class="active" <?php endif; ?>>
                                <a data-toggle="tab" href="#<?php echo e(\Illuminate\Support\Str::slug($group), false); ?>"><?php echo e($group, false); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="tab-content">
                        <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $group_settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="<?php echo e(\Illuminate\Support\Str::slug($group), false); ?>" class="tab-pane fade in <?php if($group == $active): ?> active <?php endif; ?>">
                            <?php $__currentLoopData = $group_settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo e($setting->display_name, false); ?> <?php if(config('voyager.show_dev_tips')): ?><code>setting('<?php echo e($setting->key, false); ?>')</code><?php endif; ?>
                                </h3>
                                <div class="panel-actions">
                                    <a href="<?php echo e(route('voyager.settings.move_up', $setting->id), false); ?>">
                                        <i class="sort-icons voyager-sort-asc"></i>
                                    </a>
                                    <a href="<?php echo e(route('voyager.settings.move_down', $setting->id), false); ?>">
                                        <i class="sort-icons voyager-sort-desc"></i>
                                    </a>
                                    <i class="voyager-trash"
                                       data-id="<?php echo e($setting->id, false); ?>"
                                       data-display-key="<?php echo e($setting->key, false); ?>"
                                       data-display-name="<?php echo e($setting->display_name, false); ?>"></i>
                                </div>
                            </div>

                            <div class="panel-body no-padding-left-right">
                                <div class="col-md-10 no-padding-left-right">
                                    <?php if($setting->type == "text"): ?>
                                        <input type="text" class="form-control" name="<?php echo e($setting->key, false); ?>" value="<?php echo e($setting->value, false); ?>">
                                    <?php elseif($setting->type == "text_area"): ?>
                                        <textarea class="form-control" name="<?php echo e($setting->key, false); ?>"><?php echo e($setting->value ?? '', false); ?></textarea>
                                    <?php elseif($setting->type == "rich_text_box"): ?>
                                        <textarea class="form-control richTextBox" name="<?php echo e($setting->key, false); ?>"><?php echo e($setting->value ?? '', false); ?></textarea>
                                    <?php elseif($setting->type == "code_editor"): ?>
                                        <?php $options = json_decode($setting->details); ?>
                                        <div id="<?php echo e($setting->key, false); ?>" data-theme="<?php echo e(@$options->theme, false); ?>" data-language="<?php echo e(@$options->language, false); ?>" class="ace_editor min_height_400" name="<?php echo e($setting->key, false); ?>"><?php echo e($setting->value ?? '', false); ?></div>
                                        <textarea name="<?php echo e($setting->key, false); ?>" id="<?php echo e($setting->key, false); ?>_textarea" class="hidden"><?php echo e($setting->value ?? '', false); ?></textarea>
                                    <?php elseif($setting->type == "image" || $setting->type == "file"): ?>
                                        <?php if(isset( $setting->value ) && !empty( $setting->value ) && Storage::disk(config('voyager.storage.disk'))->exists($setting->value)): ?>
                                            <div class="img_settings_container">
                                                <a href="<?php echo e(route('voyager.settings.delete_value', $setting->id), false); ?>" class="voyager-x delete_value"></a>
                                                <img src="<?php echo e(Storage::disk(config('voyager.storage.disk'))->url($setting->value), false); ?>" style="width:200px; height:auto; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                            <div class="clearfix"></div>
                                        <?php elseif($setting->type == "file" && isset( $setting->value )): ?>
                                            <div class="fileType"><?php echo e($setting->value, false); ?></div>
                                        <?php endif; ?>
                                        <input type="file" name="<?php echo e($setting->key, false); ?>">
                                    <?php elseif($setting->type == "select_dropdown"): ?>
                                        <?php $options = json_decode($setting->details); ?>
                                        <?php $selected_value = (isset($setting->value) && !empty($setting->value)) ? $setting->value : NULL; ?>
                                        <select class="form-control" name="<?php echo e($setting->key, false); ?>">
                                            <?php $default = (isset($options->default)) ? $options->default : NULL; ?>
                                            <?php if(isset($options->options)): ?>
                                                <?php $__currentLoopData = $options->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($index, false); ?>" <?php if($default == $index && $selected_value === NULL): ?><?php echo e('selected="selected"', false); ?><?php endif; ?> <?php if($selected_value == $index): ?><?php echo e('selected="selected"', false); ?><?php endif; ?>><?php echo e($option, false); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>

                                    <?php elseif($setting->type == "radio_btn"): ?>
                                        <?php $options = json_decode($setting->details); ?>
                                        <?php $selected_value = (isset($setting->value) && !empty($setting->value)) ? $setting->value : NULL; ?>
                                        <?php $default = (isset($options->default)) ? $options->default : NULL; ?>
                                        <ul class="radio">
                                            <?php if(isset($options->options)): ?>
                                                <?php $__currentLoopData = $options->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <input type="radio" id="option-<?php echo e($index, false); ?>" name="<?php echo e($setting->key, false); ?>"
                                                               value="<?php echo e($index, false); ?>" <?php if($default == $index && $selected_value === NULL): ?><?php echo e('checked', false); ?><?php endif; ?> <?php if($selected_value == $index): ?><?php echo e('checked', false); ?><?php endif; ?>>
                                                        <label for="option-<?php echo e($index, false); ?>"><?php echo e($option, false); ?></label>
                                                        <div class="check"></div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </ul>
                                    <?php elseif($setting->type == "checkbox"): ?>
                                        <?php $options = json_decode($setting->details); ?>
                                        <?php $checked = (isset($setting->value) && $setting->value == 1) ? true : false; ?>
                                        <?php if(isset($options->on) && isset($options->off)): ?>
                                            <input type="checkbox" name="<?php echo e($setting->key, false); ?>" class="toggleswitch" <?php if($checked): ?> checked <?php endif; ?> data-on="<?php echo e($options->on, false); ?>" data-off="<?php echo e($options->off, false); ?>">
                                        <?php else: ?>
                                            <input type="checkbox" name="<?php echo e($setting->key, false); ?>" <?php if($checked): ?> checked <?php endif; ?> class="toggleswitch">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-2 no-padding-left-right">
                                    <select class="form-control group_select" name="<?php echo e($setting->key, false); ?>_group">
                                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($group, false); ?>" <?php echo $setting->group == $group ? 'selected' : ''; ?>><?php echo e($group, false); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <?php if(!$loop->last): ?>
                                <hr>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary pull-right"><?php echo e(__('voyager::settings.save'), false); ?></button>
        </form>

        <div style="clear:both"></div>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add', Voyager::model('Setting'))): ?>
        <div class="panel" style="margin-top:10px;">
            <div class="panel-heading new-setting">
                <hr>
                <h3 class="panel-title"><i class="voyager-plus"></i> <?php echo e(__('voyager::settings.new'), false); ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(route('voyager.settings.store'), false); ?>" method="POST">
                    <?php echo e(csrf_field(), false); ?>

                    <input type="hidden" name="setting_tab" class="setting_tab" value="<?php echo e($active, false); ?>" />
                    <div class="col-md-3">
                        <label for="display_name"><?php echo e(__('voyager::generic.name'), false); ?></label>
                        <input type="text" class="form-control" name="display_name" placeholder="<?php echo e(__('voyager::settings.help_name'), false); ?>" required="required">
                    </div>
                    <div class="col-md-3">
                        <label for="key"><?php echo e(__('voyager::generic.key'), false); ?></label>
                        <input type="text" class="form-control" name="key" placeholder="<?php echo e(__('voyager::settings.help_key'), false); ?>" required="required">
                    </div>
                    <div class="col-md-3">
                        <label for="type"><?php echo e(__('voyager::generic.type'), false); ?></label>
                        <select name="type" class="form-control" required="required">
                            <option value=""><?php echo e(__('voyager::generic.choose_type'), false); ?></option>
                            <option value="text"><?php echo e(__('voyager::form.type_textbox'), false); ?></option>
                            <option value="text_area"><?php echo e(__('voyager::form.type_textarea'), false); ?></option>
                            <option value="rich_text_box"><?php echo e(__('voyager::form.type_richtextbox'), false); ?></option>
                            <option value="code_editor"><?php echo e(__('voyager::form.type_codeeditor'), false); ?></option>
                            <option value="checkbox"><?php echo e(__('voyager::form.type_checkbox'), false); ?></option>
                            <option value="radio_btn"><?php echo e(__('voyager::form.type_radiobutton'), false); ?></option>
                            <option value="select_dropdown"><?php echo e(__('voyager::form.type_selectdropdown'), false); ?></option>
                            <option value="file"><?php echo e(__('voyager::form.type_file'), false); ?></option>
                            <option value="image"><?php echo e(__('voyager::form.type_image'), false); ?></option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="group"><?php echo e(__('voyager::settings.group'), false); ?></label>
                        <select class="form-control group_select group_select_new" name="group">
                            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($group, false); ?>"><?php echo e($group, false); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <a id="toggle_options"><i class="voyager-double-down"></i> <?php echo e(mb_strtoupper(__('voyager::generic.options')), false); ?></a>
                        <div class="new-settings-options">
                            <label for="options"><?php echo e(__('voyager::generic.options'), false); ?>

                                <small><?php echo e(__('voyager::settings.help_option'), false); ?></small>
                            </label>
                            <div id="options_editor" class="form-control min_height_200" data-language="json"></div>
                            <textarea id="options_textarea" name="details" class="hidden"></textarea>
                            <div id="valid_options" class="alert-success alert" style="display:none"><?php echo e(__('voyager::json.valid'), false); ?></div>
                            <div id="invalid_options" class="alert-danger alert" style="display:none"><?php echo e(__('voyager::json.invalid'), false); ?></div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <button type="submit" class="btn btn-primary pull-right new-setting-btn">
                        <i class="voyager-plus"></i> <?php echo e(__('voyager::settings.add_new'), false); ?>

                    </button>
                    <div style="clear:both"></div>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__('voyager::generic.close'), false); ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> <?php echo __('voyager::settings.delete_question', ['setting' => '<span id="delete_setting_title"></span>']); ?>

                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        <?php echo e(method_field("DELETE"), false); ?>

                        <?php echo e(csrf_field(), false); ?>

                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="<?php echo e(__('voyager::settings.delete_confirm'), false); ?>">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><?php echo e(__('voyager::generic.cancel'), false); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        $('document').ready(function () {
            $('#toggle_options').click(function () {
                $('.new-settings-options').toggle();
                if ($('#toggle_options .voyager-double-down').length) {
                    $('#toggle_options .voyager-double-down').removeClass('voyager-double-down').addClass('voyager-double-up');
                } else {
                    $('#toggle_options .voyager-double-up').removeClass('voyager-double-up').addClass('voyager-double-down');
                }
            });

            $('.panel-actions .voyager-trash').click(function () {
                var display = $(this).data('display-name') + '/' + $(this).data('display-key');

                $('#delete_setting_title').text(display);

                $('#delete_form')[0].action = '<?php echo e(route('voyager.settings.delete', [ 'id' => '__id' ]), false); ?>'.replace('__id', $(this).data('id'));
                $('#delete_modal').modal('show');
            });

            $('.toggleswitch').bootstrapToggle();

            $('[data-toggle="tab"]').click(function() {
                $(".setting_tab").val($(this).html());
            });

            $('.delete_value').click(function(e) {
                e.preventDefault();
                $(this).closest('form').attr('action', $(this).attr('href'));
                $(this).closest('form').submit();
            });
        });
    </script>
    <script type="text/javascript">
    $(".group_select").not('.group_select_new').select2({
        tags: true,
        width: 'resolve'
    });
    $(".group_select_new").select2({
        tags: true,
        width: 'resolve',
        placeholder: '<?php echo e(__("voyager::generic.select_group"), false); ?>'
    });
    $(".group_select_new").val('').trigger('change');
    </script>
    <iframe id="form_target" name="form_target" style="display:none"></iframe>
    <form id="my_form" action="<?php echo e(route('voyager.upload'), false); ?>" target="form_target" method="POST" enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
        <?php echo e(csrf_field(), false); ?>

        <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
        <input type="hidden" name="type_slug" id="type_slug" value="settings">
    </form>

    <script>
        var options_editor = ace.edit('options_editor');
        options_editor.getSession().setMode("ace/mode/json");

        var options_textarea = document.getElementById('options_textarea');
        options_editor.getSession().on('change', function() {
            console.log(options_editor.getValue());
            options_textarea.value = options_editor.getValue();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\vendor\tcg\voyager\src/../resources/views/settings/index.blade.php ENDPATH**/ ?>