<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo.svg" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="17">
                </span>
            </a>
            <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-light.svg" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="19">
                </span>
            </a>
        </div>
        <!-- App Search-->
        <div class="dropdown dropdown-mega ms-2">
            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <span key="t-megamenu">Menu</span>
                <i class="mdi mdi-chevron-down"></i> 
            </button>
            <div class="dropdown-menu dropdown-megamenu">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="#"><h5 class="font-size-14 my-0" >Work</h5></a>
                            </div>
                            <div class="col-md-2">
                                <a href="site.php"><h5 class="font-size-14 my-0" >Site</h5></a>
                            </div>
                            <div class="col-md-2">
                                <a href="index.php"><h5 class="font-size-14 my-0" >Dashboard</h5></a>
                            </div>
                            <div class="col-md-2">
                                <a href="truck.php"><h5 class="font-size-14 my-0" >Truck</h5></a>
                            </div>
                            <div class="col-md-2">
                                <a href="petrolpump.php"><h5 class="font-size-14 my-0" >Petrol Pump</h5></a>
                            </div>
                            <div class="col-md-2">
                                <a href="expense.php"><h5 class="font-size-14 my-0" >Expense</h5></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex">
        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <i class="bx bx-fullscreen"></i>
            </button>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="form-layouts.html#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                <a class="dropdown-item" href="form-layouts.html#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                <a class="dropdown-item d-block" href="form-layouts.html#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                <a class="dropdown-item" href="form-layouts.html#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="form-layouts.html#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            </div>
        </div>
    </div>
</div>