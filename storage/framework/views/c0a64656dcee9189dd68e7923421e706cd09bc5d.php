<?php echo $__env->make('layouts.common.title', [
	'title' => 'User Application Approval List',
	'link' => 'User Management &nbsp;>&nbsp; Edit User'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
	        <li>
	        	<a id="tabEmployee" href="<?php echo e(url('user-management')); ?>">User List</a>
	        </li>
	        <li>
	        	<a id="tabEmployee" href="<?php echo e(url('user-management/create')); ?>">New User</a>
	        </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" style="padding-top: 50px;">
				<?php if(count($ancestors)): ?>
				<form action="" method="POST" role="form">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="role_id" value="<?php echo e($user->role_id); ?>">

					<div class="form-group">
						<?php $__currentLoopData = $ancestors->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ancestor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="row">
								<?php $__currentLoopData = $ancestor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-md-3">
										<label>
											<input type="checkbox" name="authorizers[]" value="<?php echo e($value->id); ?>"> &nbsp; <?php echo e($value->text); ?>

										</label>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<?php echo config('leave.buttons.btn_save'); ?>

						</button>
					</div>

				</form>
				<?php else: ?>
					<div class="form-group text-center">
						<a href="<?php echo e(url('user-management')); ?>" class="btn btn-default ">User Management Page</a>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>