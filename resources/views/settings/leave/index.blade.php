@extends('layouts.master')
@php
	$title = Request::is('settings/leave') ? 'Yearly Leave Management' : 'Yearly New Leave';
@endphp
@include('layouts.common.title', [
	'title' => $title, 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">

		@include('settings._tabheader')

		<div class="tab-content rendering-content">
			<div class="tab-pane {{ Request::is('settings/leave') ? 'active' : '' }}" id="tabLeaves">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-6">
							<a href="{{ url('settings/leave/create') }}" class="btn btn-primary btn-sm">
								<i class="fa fa-plus"></i>&nbsp;Add new leave
							</a>
						</div>
						<div class="col-md-6 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="year" id="" class="form-control">
										<option value="">Select Year</option>
										@for($i = 2017; $i < 2050; $i++)
										<option value="{{ $i }}" {{ (Request::input('year') ? : date('Y')) == $i ? 'selected' : '' }}>
											{{ entobn($i) }}
										</option>
										@endfor
									</select>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> Search 
								</button>
							</form>
						</div>
					</div>
				</div>
				@if($leaves->count())
					@include('settings.leave.views._table')
	            @else
					<h3 class="text-center">No information was found on Leave management</h3>
	            @endif
			</div>   		
		</div>
	</div>	
</div>
@stop

@section('script')
@if(count($leaves))
    @include('layouts.common.dt-search')
@endif
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "{{ \Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}"
		});	
		$(".form").on('submit', function() {
	      $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      return true;
	    });	
	});
</script>
@stop