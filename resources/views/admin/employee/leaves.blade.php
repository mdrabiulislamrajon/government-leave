@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "Yearly All Leave List",
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		    <li class="{{ Request::segment(3) == 'leaves' ? 'active' : '' }}">
		    	<a id="tabEmployee" href="{{ url('employee/' . $profileUser->id . '/leaves') }}">Leave Application List</a>
		    </li>
		    <li class="{{ Request::segment(3) == 'reports' ? 'active' : '' }}">
		    	<a id="tabPageEmployee" href="{{ url('employee/' . $profileUser->id . '/reports') }}">Leave Roport</a>
		    </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabPageEmployee">
				@include('admin.employee.views._profile')
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4">
							<a href="{{ url('employee/' . $profileUser->id . '/leaves')}}" class="btn btn-primary">Leave Application List</a>
						</div>
						<div class="col-md-8 text-right">
							<form class="form form-inline" method="GET">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="year" id="" class="form-control">
										<option value="">Select Year </option>
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
				@include('profile.leaves.views._leaves')
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
	@include('layouts.common.dt-export', [
		'heading' => 'Yearly All Leave List',
		'columns' => '0, 1, 2, 3, 4, 5, 6'
	])
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