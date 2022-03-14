<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav">
        <div class="sidebar-head">
            <h3>
                <span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">{{ config('app.name', 'Laravel') }}</span>
            </h3>
        </div>
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="javascript:void(0)" class="waves-effect {{ asset('images/default-user.png') }}" alt="user-img" class="img-circle">
                    <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('control.panel.home') }}" class="waves-effect {{ (\Request::is('qxcfthjki/home'))?'active':'' }}">
                    <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Home </span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="waves-effect {{ 
                    (   
                        \Request::is('qxcfthjki/blog-categories') || \Request::is('qxcfthjki/blog-categories*') ||
                        \Request::is('qxcfthjki/blog-tags') || \Request::is('qxcfthjki/blog-tags*') ||
                        \Request::is('qxcfthjki/posts') || \Request::is('qxcfthjki/posts*')
                    )?'active':'' }}">
                    <i class="mdi mdi-hexagon-outline fa-fw"></i>
                    <span class="hide-menu">Manage Blog<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('control.panel.blog.categories') }}">
                            <span class="hide-menu">Manage Category</span>
                        </a>
                    </li>
                    <?php /*
                    <li>
                        <a href="{{ route('control.panel.blog.tags') }}">
                            <span class="hide-menu">Manage Tag</span>
                        </a>
                    </li>
                    */ ?>
                    <li>
                        <a href="{{ route('control.panel.posts') }}">
                            <span class="hide-menu">Manage Post</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
