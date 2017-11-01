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
            	@foreach(config('leave.type') as $key => $value)
                <tr>
                    <td>{{ entobn($value) }} ({{ entobn($total = config("leave.leaves." . $key)) }})</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->count() : 0) }}</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 0)->count() : 0) }}</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->count() : 0) }}</td>
                    <td>{{ entobn($applied  = count($leaves) ? $leaves->where('type_id', $key)->sum('no_of_days') : 0) }}</td>
                    <td>{{ entobn($approved = count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->sum('no_of_days') : 0) }}</td>
                    <td>{{ entobn($total - $approved) }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>