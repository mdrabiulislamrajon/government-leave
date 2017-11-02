<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="<?php echo e(Request::is('profile') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile')); ?>">All Information</a>
    </li>
    <li class="<?php echo e(Request::is('profile/leave') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile/leave')); ?>">Leave Information</a>
    </li>
    <li class="<?php echo e(Request::is('profile/applications') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile/applications')); ?>">Leave List</a>
    </li>
    <li class="<?php echo e(Request::is('profile/edit') ? 'active' : ''); ?>">
    	<a id="tabProfileEdit" href="<?php echo e(url('profile/edit')); ?>">Change Information</a>
    </li>
    <li class="<?php echo e(Request::is('profile/password') ? 'active' : ''); ?>">
    	<a id="tabProfileEdit" href="<?php echo e(url('profile/password')); ?>">Change Password</a>
    </li>
</ul> 
