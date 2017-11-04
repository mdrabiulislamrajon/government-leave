<form class="form" method="POST" action="<?php echo e(url('user-management')); ?>" style="margin-top: 25px;">
	<?php echo e(csrf_field()); ?>

	<div class="row clearfix">
        <div class="form-group<?php echo e($errors->has('role_id') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="cc">User Designation<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" name="role_id" value="<?php echo e(old('role_id') ? : ''); ?>" class="easyui-combotree" style="width:100%;height:34px;" required>
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
            	<input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('fa_hu_name') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="fa_hu_name">User's father Name<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="fa_hu_name" type="text" class="form-control" id="fa_hu_name" value="<?php echo e(old('fa_hu_name')); ?>">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'fa_hu_name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('mother_name') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="mother_name">User's Mother Name<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="mother_name" type="text" class="form-control" id="mother_name" value="<?php echo e(old('mother_name')); ?>">
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
            	<input name="mobile" type="text" class="form-control" id="mobile" value="<?php echo e(old('mobile')); ?>">
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
                	<option value="male" <?php echo e(old('gender') == 'male' ? 'selected' : ''); ?>>Male</option>
                	<option value="female" <?php echo e(old('gender') == 'female' ? 'selected' : ''); ?>>Female</option>
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
            	<label for="div_br_off">Office Location<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="div_br_off" type="text" class="form-control" id="div_br_off" value="<?php echo e(old('div_br_off')); ?>">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'div_br_off'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('join_date') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="join_date">Join Date<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input type="text" name="join_date" class="form-control datepicker" id="joinDate">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'join_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('profile_pic') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="profile_pic">Profile Picture</label>
			</div>
            <div class="col-md-5">
            	<input type="file" name="profile_pic" class="form-control" id="profilePic">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'profile_pic'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('signature') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="signature">User signature</label>
			</div>
            <div class="col-md-5">
            	<input type="file" name="signature" class="form-control" id="profilePic">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'signature'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="password">Password<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'password'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="password_confirmation">Confirm Password<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            </div>
            <div class="col-md-4">
            	<?php echo $__env->make('layouts.common.formError', ['key' => 'password_confirmation'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="col-md-8 text-right">
			<button class="btn btn-default" style="margin-right:8px;" type="reset">
				<i class="fa fa-times-circle-o"></i> Delete
			</button>
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-save"></i> Save
			</button>
		</div>
	</div>
</form>