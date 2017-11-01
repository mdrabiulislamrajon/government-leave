@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "Leave Reason: " . $application->reason, 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabPageEmployee">
				@include('profile.leaves.views._show')
			</div>   		
		</div>
	</div>	
</div>
@stop