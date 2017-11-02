<form class="form" method="POST" action="<?php echo e(url('apply')); ?>" style="margin-top: 25px;padding-bottom: 10px;">
    <?php echo e(csrf_field()); ?>

    <div class="row clearfix">
        <div class="form-group<?php echo e($errors->has('reason')  ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="reason">Leave Reason<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="reason"  class="form-control" id="reason"  value="<?php echo e(old('reason')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'reason'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('start_date') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="start_date">Start Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="start_date" class="form-control datepicker" id="start_date" value="<?php echo e(old('start_date')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'start_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('end_date') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="end_date">End Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="end_date" class="form-control datepicker" id="end_date" value="<?php echo e(old('end_date')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'end_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('no_of_days') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="no_of_days">Days<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="no_of_days" id="" class="form-control">
                    <option value="">Select Leave Date</option>
                    <?php for($i = 1; $i < 31; $i++): ?>
                        <option value="<?php echo e($i); ?>" <?php echo e(old('no_of_days') == $i ? 'selected' : ''); ?>>
                            <?php echo e(entobn($i)); ?>

                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'no_of_days'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>

    </div>

    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('type_id') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="type_id">Leave Type<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="type_id" id="" class="form-control">
                    <option value="">Leave Status</option>
                    <?php $__currentLoopData = config('leave.type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($i); ?>" <?php echo e(old('type_id') == $i ? 'selected' : ''); ?>>
                            <?php echo e($value); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'type_id'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>

    <div class="row clearfix " style="margin-top: 25px;" >
        <div class="form-group<?php echo e($errors->has('vacation_address')  ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="vacation_address">Vacation Address<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="vacation_address"  class="form-control" id="vacation_address"  value="<?php echo e(old('vacation_address')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'vacation_address'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> Delete
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Add Leave
            </button>
        </div>
    </div>
</form>