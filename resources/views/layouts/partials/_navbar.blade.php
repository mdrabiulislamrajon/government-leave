<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
        <ul class="nav navbar-nav">
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="label label-danger">৯</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">9 Notifications</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Design some buttons fasf afasf fasdf
                                    </h3>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Create a nice theme asfdasff sfadsfsa
                                    </h3>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        {{ str_limit(' Some task I need to do Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus?', $limit = 38, $end = '...') }}
                                    </h3>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        {{ str_limit(' Some task I need to do Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus?', $limit = 37, $end = '...') }}
                                    </h3>
                                </a>
                            </li><!-- end task item -->
                            <li>
                                <a href="{{ url('notifications') }}" class="text-center">
                                    <h3>
                                        All Leave Notifications
                                    </h3>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>{{ Auth::user()->name }} <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-light-blue">
                        <img src="{{ asset('img/avatar3.png') }}" class="img-circle" alt="User Image" />
                        <p>
                            {{ Auth::user()->name }}
                            <small>{{ Auth::user()->designation }}</small>
                            <small>Join Date: {{ entobn(Auth::user()->join_date->format('M, Y')) }}</small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('logout') }}"
                                class="btn btn-default btn-flat"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>