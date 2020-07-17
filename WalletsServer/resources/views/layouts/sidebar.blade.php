<aside class="main-sidebar elevation-4 sidebar-light-primary">
  
    <a href="" class="brand-link bg-primary ">
        <img src="{{URL::asset('img/avery-logo.png')}}" alt="AVERY Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-light effect-shine"><b>Investment B-Chain</b></span>
    </a>
    @guest 
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    @else
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('img/avatar8.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
       
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" 
                data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview {{Request::is('*home*') ? 'menu-open' : '' }}">
                    <a href="{{route('home')}}" class="nav-link effect-underline">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{Request::is('*project*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-line-chart"></i>
                        <p>
                            Project
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('listproject')}}" class="nav-link {{Request::is('listproject') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('newproject')}}" class="nav-link {{Request::is('newproject') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Project</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{url('editproject')}}" class="nav-link {{Request::is('editproject*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Edit Project</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{Request::is('*user*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-line-chart"></i>
                        <p>
                            User
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('listuser')}}" class="nav-link {{Request::is('listuser') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('newuser')}}" class="nav-link {{Request::is('newuser') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{url('edituser')}}" class="nav-link {{Request::is('edituser*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Edit User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview">
                    <a class="nav-link effect-underline" href="" onclick="">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="header">&nbsp;</li>
                <li><a href="#">&nbsp;</a></li>
                <li><a href="#">&nbsp;</a></li>
                <li><a href="#">&nbsp;</a></li>
            </ul>
        </nav>

    </div>
    @endguest
</aside>