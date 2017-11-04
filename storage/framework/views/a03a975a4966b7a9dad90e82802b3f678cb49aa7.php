<form class="form" method="POST" action="<?php echo e(route('roles.store')); ?>"
    style="margin-top: 25px;padding-bottom: 10px;"
>
    <?php echo e(csrf_field()); ?>

    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group<?php echo e($errors->has('name')  ? ' has-error' : ''); ?>">
            <div class="col-md-3 text-right">
                <label for="name">Name (English)<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="name"  class="form-control" id="name"  value="<?php echo e(old('name')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group<?php echo e($errors->has('text')  ? ' has-error' : ''); ?>">
            <div class="col-md-3 text-right">
                <label for="text">Name (Bengali)<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="text"  class="form-control" id="text"  value="<?php echo e(old('text')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'text'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group<?php echo e($errors->has('parent_id')  ? ' has-error' : ''); ?>">
            <div class="col-md-3 text-right">
                <label for="parent_id">Immediate senior Officer name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" value="<?php echo e(old('parent_id')); ?>" name="parent_id" style="width: 430px;">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'parent_id'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <?php echo config('leave.buttons.btn_reset'); ?>

            </button>
            <button type="submit" class="btn btn-primary">
                <?php echo config('leave.buttons.btn_save'); ?>

            </button>
        </div>
    </div>
</form>