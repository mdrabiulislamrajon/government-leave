@extends('layouts.master')

@include('layouts.common.title', ['title' => 'Test Title', 'link' => 'Test Link'])

@section('content')
	<select id="cc" class="easyui-combotree" style="width:300px;height:30px;"
	        data-options="required:true" multiple="true">
	</select>
@stop

@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{ asset('AdminLTE/easyui/js/easyui.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({n
			data: {!! json_encode($test) !!},
			onlyLeafCheck: false
		});
	});
</script>
@stop