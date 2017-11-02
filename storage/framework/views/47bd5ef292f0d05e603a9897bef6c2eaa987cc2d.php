<?php echo $__env->make('layouts.common.title', [
	'title' => "List Of All User Leave Applications",
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		    <li class="<?php echo e(Request::is('admin/leaves') ? 'active' : ''); ?>">
		    	<a id="tabEmployee" href="<?php echo e(url('admin/leaves')); ?>">List Of Applications</a>
		    </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfile">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4">

						</div>
						<div class="col-md-8 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="type" id="" class="form-control">
										<option value="">Select Leave Type</option>
										<?php $__currentLoopData = config('leave.type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($key); ?>" <?php echo e(Request::input('type') == $key ? 'selected' : ''); ?>>
												<?php echo e($type); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="status" id="" class="form-control">
										<option value="">Select Leave Status</option>
										<option value="2">Disapproved Leave List</option>
										<option value="0">Pending Leave List</option>
										<option value="1">Approved Leave List</option>
									</select>
								</div>
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

				<?php if($leaves->count()): ?>
					<?php echo $__env->make('admin.applications.views._list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	            <?php else: ?>
					<h3 class="text-center">No Result Found</h3>
	            <?php endif; ?>

			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<?php if(count($leaves)): ?>
	    <?php echo $__env->make('layouts.common.dt-search', ['perPage' => 40], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".form").on('submit', function() {
		        $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        return true;
		    });
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>