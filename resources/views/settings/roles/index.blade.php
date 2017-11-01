@extends('layouts.master')

@include('layouts.common.title', ['title' => 'All Designation List

', 'link' => 'Test Link'])

@section('style')
	<style>
		#list5 { color:#eee; margin-left: 5px; }
		#list5 ul { font-size: 16px; }
		#list5  ul { list-style: none; }
		#list5 ul li  i { padding-right: 14px; }
		#list5 ul li { color:#000;  padding-bottom:6px;  }
		#list5 ul li:first-child { padding-bottom:6px; padding-top:6px;  }
		.nested-roles {
			border: 1px solid #ddd;
		    position: relative;
		    padding: 6px 10px;
		    height: auto;
		    min-height: 20px;
		    width: 100%;
		    line-height: 30px;
		    overflow: hidden;
		    word-wrap: break-word;
		    background: #fafafa;
    		color: #23282d;
		}
		.pull-right { margin-top: 5px; }
	</style>
@stop

@section('content')
<div class="row">
	<div class="col-xs-12">

	@include('settings._tabheader')

	<div class="tab-content rendering-content">
		<div class="tab-pane {{ Request::is('settings/roles') ? 'active' : '' }}" id="tabLeaves">
			<div class="tab-pane active" id="tabProfile">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-10">
							<h4>Designation List</h4>
						</div>
						<div class="col-md-2">
							<a href="{{ route('roles.create') }}"
								class="btn btn-primary btn-sm pull-right"
							>
								<i class="fa fa-plus"></i> New Approval
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="list5">
				<ul>
					@php
						$traverse = function ($roles, $prefix = '<li> <div class="nested-roles"> <i class="fa  fa-arrow-right"></i>') use (&$traverse) {
						    foreach ($roles as $role) {
						    	// dd($role);
						    	echo PHP_EOL.$prefix . $role->text;
						    	echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="'. url('settings/roles/' . $role->id. '/edit') . '"><i class="fa fa-edit pull-right"></i></a></div>';
						        if(count($role->children))
						        {
						        	echo '<ul>';
							        $traverse($role->children);
							        echo '</ul>';
							    }
								echo '</li>';
						    }
						};
						$traverse($roles);
				    @endphp
				</ul>
			</div>
		</div>
	</div>
	</div>
</div>
@stop