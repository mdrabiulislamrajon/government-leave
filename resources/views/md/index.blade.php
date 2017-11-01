@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "List of all user holiday applications",
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		    <li class="{{ Request::is('admin/leaves') ? 'active' : '' }}">
		    	<a id="tabEmployee" href="{{ url('admin/leaves') }}">List of applications</a>
		    </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfile">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4">

						</div>
						<div class="col-md-8 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="type" id="" class="form-control">
										<option value="">Select Leave Type</option>
										@foreach(config('leave.type') as $key => $type)
											<option value="{{ $key }}" {{ Request::input('type') == $key ? 'selected' : '' }}>
												{{ $type }}
											</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="status" id="" class="form-control">
										<option value="">Leave Status</option>
										<option value="2">Approved Leave List</option>
										<option value="1">Pending Leave List</option>
									</select>
								</div>
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
									<i class="fa fa-search"></i> 
									Search 
								</button>
							</form>
						</div>
					</div>
				</div>

				@if($leaves->count())
					@include('admin.applications.views._list')
	            @else
					<h3 class="text-center">No results found</h3>
	            @endif

			</div>
		</div>
	</div>
</div>
@stop

@section('script')
	@if(count($leaves))
	    @include('layouts.common.dt-search', ['perPage' => 40])
	@endif
	<script type="text/javascript">
		$(document).ready(function() {
			$(".form").on('submit', function() {
		        $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        return true;
		    });
		});
	</script>
@endsection