@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "Annual Holiday Statistics",
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabPageEmployee">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-8 text-right">
							<form class="form form-inline" method="GET">
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
				@include('profile.leaves.views._leaves')
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
	@include('layouts.common.dt-export', [
		'heading' => 'Annual Holiday Statistics',
		'columns' => '0, 1, 2, 3, 4, 5, 6'
	])
@endsection