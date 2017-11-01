<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="{{ Request::is('profile') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile') }}">All Information</a>
    </li>
    <li class="{{ Request::is('profile/leave') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile/leave') }}">Leave Information</a>
    </li>
    <li class="{{ Request::is('profile/applications') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile/applications') }}">Leave List</a>
    </li>
    <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
    	<a id="tabProfileEdit" href="{{ url('profile/edit') }}">Change Information</a>
    </li>
    <li class="{{ Request::is('profile/password') ? 'active' : '' }}">
    	<a id="tabProfileEdit" href="{{ url('profile/password') }}">Change Password</a>
    </li>
</ul> 
