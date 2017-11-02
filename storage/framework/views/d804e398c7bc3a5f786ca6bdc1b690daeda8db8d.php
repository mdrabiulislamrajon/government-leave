<form class="form" method="POST" action="<?php echo e(url('profile/password')); ?>" style="margin-top: 25px;padding-bottom: 10px;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

    <div class="row clearfix">
        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="password">New Password<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'password'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    
    <div class="row clearfix" style="margin-top: 25px;">
        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="password_confirmation">Confirm Password<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="password" name="password_confirmation" class="form-control" id="password">
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
                <i class="fa fa-save"></i> Change
            </button>
        </div>
    </div>
</form>