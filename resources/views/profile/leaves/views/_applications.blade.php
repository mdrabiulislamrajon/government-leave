<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
            	<th>Holiday details</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Days</th>
                <th>Leave Type</th>
                <th>Leave Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            	@foreach($leaves as $leave)
                <tr>
                	<td>{{ $leave->reason}}</td>
                    <td>{{ entobn($leave->start_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->end_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->no_of_days) }} Days</td>
                    <td>{{ config("leave.type." . $leave->type_id) }}</td>
                    <td>
                        <span class="label label-{{ $leave->status == 1 ? 'success' : ($leave->status == 0 ? 'warning':'info') }}">
                            {{ permission($leave->status)}}
                        </span>
                    </td>
                    <td>
                        <a data-toggle="modal" href="#modal-{{ $leave->id }}" class="btn btn-xs btn-primary" title="Leave Application Details">
                            <i class="fa  fa-eye"></i>
                        </a>
                        <div class="modal fade" id="modal-{{ $leave->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title">Leaves Informations Details</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            <span class="label label-success" style="padding: 4px 6px;">Holiday Type: {{ config("leave.type." . $leave->type_id) }}</span>
                                            <br><br>
                                            <span class="label label-primary" style="padding: 6px 6px;">Final Status: {{ permission($leave->status)}}</span>
                                            <br><br>
                                            <strong>Leaves Reason:</strong><br>
                                            {{ $leave->reason }}
                                        </p>
                                        <br><br>
                                        <table class="table table-condensed table-bordered table-striped" style="font-size:14px;">
                                            <thead>
                                                <tr>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Leave Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ entobn($leave->start_date->format('M d, Y')) }}</td>
                                                    <td>{{ entobn($leave->end_date->format('M d, Y')) }}</td>
                                                    <td>{{ entobn($leave->no_of_days) }} Day</td>
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
                                                <tr>
                                                    <td>
                                                        <span class="logTime label label-default" title="Sunday, July 16, 2017 at 2:25pm">16 Jul at 2:25pm</span>&nbsp;&nbsp;<b>Pending -&gt; Approved</b><br> (by: Administrator)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="logTime label label-default" title="Monday, July 24, 2017 at 5:02pm">24 Jul at 5:02pm</span>&nbsp;&nbsp;<b>Approved -&gt; Cancellation Requested</b><br>Leave cancellation request sent (by: Administrator)
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>