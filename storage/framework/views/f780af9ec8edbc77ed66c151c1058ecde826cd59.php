<form class="form" method="POST" action="<?php echo e(url('user-management/' . $user->id)); ?>" style="margin-top: 25px;padding-bottom: 10px;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

    <div class="row clearfix">
        <div class="form-group<?php echo e($errors->has('role_id') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="cc">User's Designation<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" name="role_id" value="<?php echo e(old('role_id') ? : $user->role_id); ?>" class="easyui-combotree" style="width:100%;height:34px;" required>
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'role_id'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="name">User Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name') ? : $user->name); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('fa_hu_name') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="fa_hu_name">Father/Husband Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="fa_hu_name" type="text" class="form-control" id="fa_hu_name" value="<?php echo e(old('fa_hu_name') ? : $user->fa_hu_name); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'fa_hu_name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('mother_name') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="mother_name">Mother Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="mother_name" type="text" class="form-control" id="mother_name" value="<?php echo e(old('mother_name') ? : $user->mother_name); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'mother_name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="mobile">Mobile Number<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="mobile" type="text" class="form-control" id="mobile" value="<?php echo e(old('mobile') ? : $user->mobile); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'mobile'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="gender">Gender<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="male" <?php echo e((old('gender') || $user->gender) == 'male' ? 'selected' : ''); ?>>Male</option>
                    <option value="female" <?php echo e((old('gender') || $user->gender) == 'female' ? 'selected' : ''); ?>>Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'gender'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('div_br_off') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="div_br_off">Office/Branch Office<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="div_br_off" type="text" class="form-control" id="div_br_off" value="<?php echo e(old('div_br_off') ? : $user->div_br_off); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'div_br_off'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('join_date') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="join_date">Joining Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="join_date" class="form-control datepicker" id="joinDate" value="<?php echo e(old('join_date') ? : ($user->join_date ? $user->join_date->format('m/d/Y') : '')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'join_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> Delete
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Change
            </button>
        </div>
    </div>
</form>