<div class="table-responsive">
    <table class="table table-striped table-bordered datatable">
        <thead>
            <tr>
            	<th>Leave Type</th>
                <th>Application Form</th>
                <th>Pending Leave</th>
                <th>Cancelled Leave</th>
                <th>Applicable Leave</th>
                <th>Approved Leave</th>
                <th>Left Leave</th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = config('leave.type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(entobn($value)); ?> (<?php echo e(entobn($total = config("leave.leaves." . $key))); ?>)</td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->count() : 0)); ?></td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 0)->count() : 0)); ?></td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->count() : 0)); ?></td>
                    <td><?php echo e(entobn($applied  = count($leaves) ? $leaves->where('type_id', $key)->sum('no_of_days') : 0)); ?></td>
                    <td><?php echo e(entobn($approved = count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->sum('no_of_days') : 0)); ?></td>
                    <td><?php echo e(entobn($total - $approved)); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>