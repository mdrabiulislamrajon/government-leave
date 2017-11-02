<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
                <th>Applicant Name</th>
            	<th>Leave Description </th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Leave Type</th>
                <th>Leave Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <a href="<?php echo e(url('employee/'.$leave->user->id.'/leaves')); ?>"> <?php echo e($leave->user->name); ?></a></td>
                	<td><?php echo e($leave->reason); ?></td>
                    <td><?php echo e(entobn($leave->start_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(entobn($leave->end_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(config("leave.type." . $leave->type_id)); ?></td>
                    <td>
                        <span class="label label-<?php echo e($leave->status == 1 ? 'success' : ($leave->status == 0 ? 'warning':'info')); ?>">
                            <?php echo e(permission($leave->status)); ?>

                        </span>
                    </td>
                    <td>
                        <a data-toggle="modal" href="#modal-<?php echo e($leave->id); ?>" class="btn btn-xs btn-default" title="Leave Application Details">
                            <i class="fa  fa-eye"></i>
                        </a> &nbsp;
                        <?php echo $__env->make('admin.applications.views._modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php if($leave->hasPermissionToApprove()): ?>
                        <a data-toggle="modal" href="#modal-note-<?php echo e($leave->id); ?>" class="btn btn-xs btn-info" title="Leave Application Details">
                            <i class="fa  fa-edit"></i>
                        </a>
                            <?php echo $__env->make('admin.applications.views._note', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>