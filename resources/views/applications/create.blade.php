@extends('layouts.master')

@include('layouts.common.title', [
	'title' => 'Apply For Your Leave',
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		    <li class="{{ Request::is('apply') ? 'active' : '' }}">
		    	<a id="tabEmployee" href="{{ url('apply') }}">Leave Application</a>
		    </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabLeaves">
				@include('applications.views._new')
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "{{ \Carbon\Carbon::now()->format('Y') . ':' . \Carbon\Carbon::now()->addYear(1)->format('Y') }}",
            minDate: "{{ \Carbon\Carbon::now()->addDay()->format('m/d/Y') }}",
            maxDate: "{{ \Carbon\Carbon::now()->addMonths(3)->format('m/d/Y') }}",
		});
	});
</script>
@stop