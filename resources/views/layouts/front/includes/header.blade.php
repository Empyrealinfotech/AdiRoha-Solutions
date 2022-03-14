  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand logo-image" href="{{ route('front.index') }}"><img src="{{ asset('front/images/AdirohaLogo1.png') }}" alt="">AdiRoha Solutions</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <div class="mobile-menu-text">
            <h2>Menu</h2>
            <a href="javascript:void(0);" class="navbar-toggler-close"><i class="fas fa-times"></i></a>
          </div>
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php">Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                    <li><a class="dropdown-item" href="#">Article Details</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Terms Conditions</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                    <li><a class="dropdown-item" href="#">Article Details</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Terms Conditions</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                </ul>
              </li> -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="industry.php">Industries</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                    <li><a class="dropdown-item" href="{{ route('front.financial-services') }}">Financial Services</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Payment Services</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">E-commerce</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Health Care</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Education</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                    <li><a class="dropdown-item" href="#">Technology</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Retail</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Healthcare</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Finance</a></li>
                </ul>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('front.training') }}">Training</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" href="#">Article Details</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Terms Conditions</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Training</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" href="#">Article Details</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Terms Conditions</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route('front.forcorporate') }}">For corporate</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('front.about_us') }}">About Us</a>
              </li>
            </ul>
            <span class="nav-item">
                <a class="btn-solid-sm" href="{{ route('front.schedulemeeting') }}">Schedule a Meeting</a>
            </span>
        </div>
    </div>
</nav>

<header id="header" class="header d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h1 class="h1-large">Deep Dive Penetration Testing</h1>
                    <a class="btn-comman-home" href="security_expert">Talk to a security expert</a>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/header-image.png" alt="alternative">
                </div>
            </div>  -->
        </div>
    </div>
</header>





