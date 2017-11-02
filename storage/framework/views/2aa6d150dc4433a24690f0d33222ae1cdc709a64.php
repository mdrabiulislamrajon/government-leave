<div class="modal fade" id="modal-<?php echo e($leave->id); ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Leave Description </h5>
                </div>
                <div class="modal-body">
                    <p>
                        <span class="label label-info" style="padding: 4px 6px;"><?php echo e($leave->user->name); ?></span>
                        <br><br>
                        <span class="label label-success" style="padding: 4px 6px;">Leave Type: <?php echo e(config("leave.type." . $leave->type_id)); ?></span>
                        <br><br>
                        <span class="label label-primary" style="padding: 6px 6px;">Final Status: <?php echo e(permission($leave->status)); ?>

                        </span>
                        <br><br>
                        <strong>leave reason:</strong>
                        <?php echo e($leave->reason); ?>

                    </p>
                    <br><br>
                    <table class="table table-condensed table-bordered table-striped" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th>Start date</th>
                                <th>End Date</th>
                                <th>Leave Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e(entobn($leave->start_date->format('M d, Y'))); ?></td>
                                <td><?php echo e(entobn($leave->end_date->format('M d, Y'))); ?></td>
                                <td><?php echo e(entobn($leave->no_of_days)); ?> Day</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-condensed table-bordered table-striped" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th>Authority's comments:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $leave->approvals->where('is_read', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <span class="logTime label label-default" title="Sunday, July 16, 2017 at 2:25pm"><?php echo e($approval->updated_at->format('d M, h:i A')); ?></span>&nbsp;&nbsp;<b> <?php echo e($approval->notes); ?> -&gt;
                                  <?php echo e(permission($leave->status)); ?>

                                     </b><br> (by: <?php echo e(\App\Role::find($approval->role_id)->text); ?>)
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>