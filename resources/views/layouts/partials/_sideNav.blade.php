<ul class="sidebar-menu">
    <li class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="{{ url('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Home Page</span>
        </a>
    </li>
    @if( ! in_array(auth()->user()->role->slug, ['dg', 'chairman']) )
    <li class="{{ Request::segment(1) == 'apply' ? 'active' : '' }}">
        <a href="{{ url('apply') }}">
            <i class="fa fa-envelope-o"></i> <span>Apply For Leave</span>
        </a>
    </li>
    <li class="{{ Request::is('profile/applications') ? 'active' : '' }}">
        <a href="{{ url('profile/applications') }}">
            <i class="fa fa-trash-o"></i> <span>Leave Application List</span>
        </a>
    </li>
    @endif
    @if($user->type === 'admin')
    <li class="treeview{{ Request::segment(1) == 'user-management' ? ' active' : '' }}">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>User Management</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('user-management/create') ? 'active' : '' }}">
                <a href="{{url('user-management/create')}}">
                    <i class="fa fa-angle-double-right"></i>Create New User
                </a>
            </li>
            <li class="{{ Request::is('user-management') ? 'active' : '' }}">
                <a href="{{url('/user-management')}}">
                    <i class="fa fa-angle-double-right"></i>User List
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview{{ Request::segment(1) == 'settings' ? ' active' : '' }}">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Software Setting </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('settings/leave') ? 'active' : '' }}">
                <a href="{{ url('settings/leave') }}">
                    <i class="fa fa-angle-double-right"></i> Leave Management
                </a>
            </li>
            <li class="{{ Request::segment(2) == 'roles' ? 'active' : '' }}">
                <a href="{{ url('settings/roles') }}">
                    <i class="fa fa-angle-double-right"></i> Rank Management 
                </a>
            </li>
        </ul>
    </li>
    @endif
    @if($user->role->hasAuthorization())
    <li class="treeview {{ Request::segment(2) == 'leaves' ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-edit"></i> <span>All Application </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('admin/leaves') ? 'active' : '' }}">
                <a href="{{ url('admin/leaves') }}"><i class="fa fa-angle-double-right"></i>Application List</a>
            </li>
        </ul>
    </li>
    @endif

    @if($user->type === 'md')
<li class="treeview{{ Request::segment(1) == 'user-management' ? ' active' : '' }}">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>All Application List</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('/md') ? 'active' : '' }}">
                <a href="{{url('/md')}}">
                    <i class="fa fa-angle-double-right"></i>All Application
                </a>
            </li>
         </ul>
    </li>

    @endif
 

</ul>