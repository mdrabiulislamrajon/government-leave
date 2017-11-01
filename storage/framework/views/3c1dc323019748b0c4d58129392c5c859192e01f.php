<ul class="sidebar-menu">
    <li class="<?php echo e(Request::segment(1) == 'dashboard' ? 'active' : ''); ?>">
        <a href="<?php echo e(url('dashboard')); ?>">
            <i class="fa fa-dashboard"></i> <span>Home Page</span>
        </a>
    </li>
    <?php if( ! in_array(auth()->user()->role->slug, ['dg', 'chairman']) ): ?>
    <li class="<?php echo e(Request::segment(1) == 'apply' ? 'active' : ''); ?>">
        <a href="<?php echo e(url('apply')); ?>">
            <i class="fa fa-envelope-o"></i> <span>Apply For Leave</span>
        </a>
    </li>
    <li class="<?php echo e(Request::is('profile/applications') ? 'active' : ''); ?>">
        <a href="<?php echo e(url('profile/applications')); ?>">
            <i class="fa fa-trash-o"></i> <span>Leave Application List</span>
        </a>
    </li>
    <?php endif; ?>
    <?php if($user->type === 'admin'): ?>
    <li class="treeview<?php echo e(Request::segment(1) == 'user-management' ? ' active' : ''); ?>">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>User Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('user-management/create') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('user-management/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>Create New User
                </a>
            </li>
            <li class="<?php echo e(Request::is('user-management') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/user-management')); ?>">
                    <i class="fa fa-angle-double-right"></i>User List
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview<?php echo e(Request::segment(1) == 'settings' ? ' active' : ''); ?>">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Software Setting </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('settings/leave') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('settings/leave')); ?>">
                    <i class="fa fa-angle-double-right"></i> Leave Management
                </a>
            </li>
            <li class="<?php echo e(Request::segment(2) == 'roles' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('settings/roles')); ?>">
                    <i class="fa fa-angle-double-right"></i> Rank Management 
                </a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if($user->role->hasAuthorization()): ?>
    <li class="treeview <?php echo e(Request::segment(2) == 'leaves' ? 'active' : ''); ?>">
        <a href="#">
            <i class="fa fa-edit"></i> <span>All Application </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/leaves') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('admin/leaves')); ?>"><i class="fa fa-angle-double-right"></i>Application List</a>
            </li>
        </ul>
    </li>
    <?php endif; ?>

    <?php if($user->type === 'md'): ?>
<li class="treeview<?php echo e(Request::segment(1) == 'user-management' ? ' active' : ''); ?>">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>All Application List</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('/md') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/md')); ?>">
                    <i class="fa fa-angle-double-right"></i>All Application
                </a>
            </li>
         </ul>
    </li>

    <?php endif; ?>
 

</ul>