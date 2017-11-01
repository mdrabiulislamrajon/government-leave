@inject('roles', 'App\Http\Services\RolesService')

@extends('layouts.master')

@include('layouts.common.title', ['title' => 'Create new Designation', 'link' => 'Test Link'])

@section('content')
	<div class="row">
		<div class="col-xs-12">
			@include('settings._tabheader')
			<div class="tab-content rendering-content">
				<div class="tab-pane active" id="tabLeaves">
					@include('settings.roles.views._create')
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{ asset('AdminLTE/easyui/js/easyui.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({
			data: {!! json_encode($roles->get()) !!}
		});
	});
</script>
@stop