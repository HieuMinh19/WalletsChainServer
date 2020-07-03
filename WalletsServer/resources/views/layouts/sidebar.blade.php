<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-primary ">
        <img src="{{URL::asset('img/avery-logo.png')}}" alt="AVERY Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-light effect-shine"><b>Avery Dennison</b></span>
    </a>

    <!-- @guest -->
    <a class="nav-link" href="{{url('/login')}}">{{ __('Login') }}</a>
    <!-- @else -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('img/avatar8.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                <a href="#" class="d-block">sfsdfds</a>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" 
                data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="" class="nav-link effect-underline">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-line-chart"></i>
                        <p>
                            Effort
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('listeffort')}}" class="nav-link {{Request::is('listeffort') ? 'active' : '' }} effect-underline ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List Effort</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{Request::is('addeffort*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Effort</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('approveeffort')}}" class="nav-link {{Request::is('approveeffort*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Approve Effort</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('editeffort')}}" class="nav-link {{Request::is('editeffort*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Effort Detail</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="nav-item">
                    <a href="{{url('revenue')}}" class="nav-link {{Request::is('revenue*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-line-chart"></i>
                        <p>
                            Revenue
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Cost
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link  effect-underline ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List Cost</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link  effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Cost</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Approve Cost</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link  effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Edit Cost</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('listproject')}}" class="nav-link {{Request::is('*project*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-connectdevelop"></i>
                        <p>
                            Project
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('listestimation')}}" class="nav-link {{Request::is('*estimation*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-balance-scale"></i>
                        <p>
                            Estimation
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('listcustomer')}}" class="nav-link {{Request::is('*customer*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-users "></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('listrate')}}" class="nav-link {{Request::is('*rate*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-exchange"></i>
                        <p>
                            Rate
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('listuser')}}" class="nav-link {{Request::is('*user*') ? 'active' : '' }} effect-underline">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{Request::is('*report*','*by*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{Request::is('*report*','*by*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            Report
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('effortreport')}}" class="nav-link {{Request::is('effortreport*') ? 'active' : '' }} effect-underline ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Effort Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('financialreport')}}" class="nav-link {{Request::is('financialreport') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Financial Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('revenuebycustomer')}}" class="nav-link {{Request::is('revenuebycustomer') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Customer Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('revenuebymonth')}}" class="nav-link {{Request::is('revenuebymonth') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Month Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('costbycategory')}}" class="nav-link {{Request::is('costbycategory') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Cost Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{Request::is('*invoice*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{Request::is('*invoice*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            Invoice
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('listinvoice')}}" class="nav-link {{Request::is('listinvoice') ? 'active' : '' }} effect-underline ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('addinvoice')}}" class="nav-link {{Request::is('addinvoice*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('approveinvoice')}}" class="nav-link {{Request::is('approveinvoice*') ? 'active' : '' }} effect-underline">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Approve Invoice</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">--}}
                        {{-- <a href="{{url('editinvoice')}}" class="nav-link {{Request::is('editinvoice*') ? 'active' : '' }} effect-underline">--}}
                        {{-- <i class="fa fa-circle-o nav-icon"></i>--}}
                        {{-- <p>Edit Invoice</p>--}}
                        {{-- </a>--}}
                        {{-- </li>--}}
                    </ul>
                </li>

                <li class="nav-item has-treeview">

                    <a class="nav-link effect-underline" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="header">&nbsp;</li>
                <li><a href="#">&nbsp;</a></li>
                <li><a href="#">&nbsp;</a></li>
                <li><a href="#">&nbsp;</a></li>
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <!-- @endguest -->
</aside>
