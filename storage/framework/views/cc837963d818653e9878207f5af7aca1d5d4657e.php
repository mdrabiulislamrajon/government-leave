<?php echo $__env->make('layouts.common.title', [
	'title' => "Change your login information", 
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<?php echo $__env->make('profile._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfilePassword">
				<?php echo $__env->make('profile.views._password', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>   		
		</div>
	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>