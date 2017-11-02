<?php $roles = app('App\Http\Services\RolesService'); ?>


<?php 
	$title = Request::is('user-management') ? 'All admin users list': 'Add new user';
 ?>
<?php echo $__env->make('layouts.common.title', [
	'title' => "User Management " . $title,
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
	        <li class="<?php echo e(Request::is('user-management') ? 'active' : ''); ?>">
	        	<a id="tabEmployee" href="<?php echo e(url('user-management')); ?>">User List</a>
	        </li>
	        <li class="<?php echo e(Request::is('user-management/create') ? 'active' : ''); ?>">
	        	<a id="tabEmployee" href="<?php echo e(url('user-management/create')); ?>">New User</a>
	        </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane<?php echo e(Request::is('user-management') ? 'active' : ''); ?>" id="tabPageEmployee">
				<?php if($users->count()): ?>
					<?php echo $__env->make('user.views._table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	            <?php else: ?>
					<h3 class="text-center">No User Found</h3>
	            <?php endif; ?>
			</div>
			<div class="tab-pane<?php echo e(Request::is('user-management/create') ? 'active' : ''); ?>" id="tabNewEmployee">
				<?php echo $__env->make('user.views._new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php if( Request::is('user-management') &&  count($users)): ?>
    <?php echo $__env->make('layouts.common.dt-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE/easyui/js/easyui.min.js')); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.datepicker').datepicker({
				changeMonth: true,
	            changeYear: true,
	            yearRange: "<?php echo e(\Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y')); ?>"
			});
			$('.easyui-combotree').combotree({
				data: <?php echo json_encode($roles->get()); ?>,
				onlyLeafCheck: false
			});
		});
	</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>