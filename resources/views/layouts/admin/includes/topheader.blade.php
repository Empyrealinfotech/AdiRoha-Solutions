<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{ route('control.panel.home') }}">
                <!-- Logo icon image, you can use font-icon also -->
                <b>
                    <!--This is dark logo icon-->
                    <img src="{{ asset('front/images/AdirohaLogo1.png') }}" alt="home" class="dark-logo" />
                    <!--This is light logo icon-->
                    {{-- <img src="{{ asset('images/admin-logo-dark.png') }}" alt="home" class="light-logo" /> --}}
                    <img src="{{ asset('front/images/AdirohaLogo1.png') }}" alt="home" class="light-logo" />
                </b>
                <!-- Logo text image you can use text also -->

            </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)">
                    <img src="{{ asset('images/default-user.png') }}" alt="user-img" width="36" class="img-circle">
                    <b class="hidden-xs">{{ Auth::user()->name }}</b><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
<!-- /.navbar-header -->
<!-- /.navbar-top-links -->
<!-- /.navbar-static-side -->
</nav>
