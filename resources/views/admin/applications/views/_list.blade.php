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
            	@foreach($leaves as $leave)
                <tr>
                    <td> <a href="{{ url('employee/'.$leave->user->id.'/leaves') }}"> {{ $leave->user->name }}</a></td>
                	<td>{{ $leave->reason}}</td>
                    <td>{{ entobn($leave->start_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->end_date->format('M d, Y')) }}</td>
                    <td>{{ config("leave.type." . $leave->type_id) }}</td>
                    <td>
                        <span class="label label-{{ $leave->status == 1 ? 'success' : ($leave->status == 0 ? 'warning':'info') }}">
                            {{ permission($leave->status) }}
                        </span>
                    </td>
                    <td>
                        <a data-toggle="modal" href="#modal-{{ $leave->id }}" class="btn btn-xs btn-default" title="Leave Application Details">
                            <i class="fa  fa-eye"></i>
                        </a> &nbsp;
                        @include('admin.applications.views._modal')

                        @if($leave->hasPermissionToApprove())
                        <a data-toggle="modal" href="#modal-note-{{ $leave->id }}" class="btn btn-xs btn-info" title="Leave Application Details">
                            <i class="fa  fa-edit"></i>
                        </a>
                            @include('admin.applications.views._note')
                        @endif
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>