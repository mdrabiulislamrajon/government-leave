<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
            	<th style="width: 80px;"></th>
                <th>User Name</th>
                <th>Mobile Number</th>
                <th>User Designation</th>
                <th>Address</th>
                <th>Current status</th>
                <th style="width: 9%;"></th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                	<td>
                		<img src="<?php echo e(asset($user->avatar())); ?>" alt="<?php echo e($user->name); ?>"
                			class="img-circle" height="40" width="40"
                		>
                	</td>
                    <td><?php echo e($user->name); ?></td>
                    <td> <?php echo e($user->mobile); ?></td>
                    <td><?php echo e($user->role->text); ?></td>
                    <td><?php echo e($user->div_br_off); ?></td>
                    <td>
                    	<?php if($user->active): ?>
                    	<span class="label label-success">Active</span>
                    	<?php else: ?>
                    	<span class="label label-danger">Inactive</span>
                    	<?php endif; ?>
                    </td>
                    <td>
                    	<a href="<?php echo e('user-management/'.$user->id); ?>" class="btn btn-xs btn-primary" title="Employee Details">
							<i class="fa  fa-eye"></i>
                    	</a>
                        <a href="<?php echo e('user-management/'.$user->id.'/edit'); ?>" class="btn btn-xs btn-info" title="Edit Employee">
							<i class="fa fa-edit"></i>
                        </a>
                        <a data-toggle="modal" href="#modal-<?php echo e($user->id); ?>" class="btn btn-xs" style="background-color: red;" title="Delete Employee?">
							<i class="fa fa-trash-o"></i>
                        </a>
                        <?php echo $__env->make('layouts.common.delModal', [
                            'id' => $user->id,
                            'url' => 'user-management/'
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>