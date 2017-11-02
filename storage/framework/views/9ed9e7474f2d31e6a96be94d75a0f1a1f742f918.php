<?php echo $__env->make('layouts.common.title', [
	'title' => "Annual Holiday Statistics",
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<?php echo $__env->make('profile._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabPageEmployee">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-8 text-right">
							<form class="form form-inline" method="GET">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="year" id="" class="form-control">
										<option value="">Select Year</option>
										<?php for($i = 2017; $i < 2050; $i++): ?>
										<option value="<?php echo e($i); ?>" <?php echo e((Request::input('year') ? : date('Y')) == $i ? 'selected' : ''); ?>>
											<?php echo e(entobn($i)); ?>

										</option>
										<?php endfor; ?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> Search
								</button>
							</form>
						</div>
					</div>
				</div>
				<?php echo $__env->make('profile.leaves.views._leaves', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<?php echo $__env->make('layouts.common.dt-export', [
		'heading' => 'Annual Holiday Statistics',
		'columns' => '0, 1, 2, 3, 4, 5, 6'
	], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>