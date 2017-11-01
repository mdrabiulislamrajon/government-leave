 @extends('layouts.master')
 @include('layouts.common.title', [
	'title' => 'User Managenent: ' . $user->name, 
	'link' => 'User Management &nbsp;>&nbsp; User View'
  ])
 @section('content')
<div class="row">
    <div class="col-xs-12">
        <ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
            <li>
                <a id="tabEmployee" href="{{ url('user-management') }}">User List</a>
            </li>
            <li>
                <a id="tabEmployee" href="{{ url('user-management/create') }}">New User</a>
            </li>
        </ul> 
        <div class="tab-content rendering-content">
            <div class="tab-pane active">
                @include('user.views._show')
            </div>
        </div>              
    </div>  
</div>
 @stop