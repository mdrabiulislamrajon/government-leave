<?php if($errors->has($key)): ?>
    <span class="help-block">
        <strong><?php echo e($errors->first($key)); ?></strong>
    </span>
 <?php endif; ?>