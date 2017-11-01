<?php if( session('success') ): ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong><?php echo e(session('success')); ?></strong>
</div>
<?php endif; ?>

<?php if( session('error') ): ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong><?php echo e(session('error')); ?></strong>
</div>
<?php endif; ?>