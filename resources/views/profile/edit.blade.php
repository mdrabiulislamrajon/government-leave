@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "Change your Information", 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfileEdit">
				@include('profile.views._edit')
			</div>   		
		</div>
	</div>	
</div>
@stop