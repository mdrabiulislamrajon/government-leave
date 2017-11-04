<?php $roles = app('App\Http\Services\RolesService'); ?>


<?php echo $__env->make('layouts.common.title', ['title' => 'Designation information has been changed', 'link' => 'Test Link'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-xs-12">
			<?php echo $__env->make('settings._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="tab-content rendering-content">
				<div class="tab-pane active" id="tabLeaves">
					<?php echo $__env->make('settings.roles.views._edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
		</div>
	</div>
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/easyui/js/easyui.min.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({
			data: <?php echo json_encode($roles->get()); ?>

		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>