@extends('layouts.master')
@include('layouts.common.title', [
	'title' => 'Change Leave Information', 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('settings._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabEditLeaves">
				@include('settings.leave.views._edit')
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
            yearRange: "{{ \Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}"
		});
	});
</script>
@stop