<!-- Navbar -->
<nav class="navbar-custom">
    <div class="float-left" style="position: absolute; z-index: 9999;;">
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link">
                    <i class="fas fa-bars align-self-center"></i>
                </button>
            </li>

            <li>
                <a href="/dashboard" class="logo logo-toss">
                    <span>
                        <img src="assets/images/logo-toss.png" alt="logo-large"
                            class="logo-lg logo-dark logo-toss">
                        <!-- <img src="https://toss.telkomuniversity.ac.id/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light"> -->
                    </span>
                </a>
            </li>
        </ul>
    </div>
        
    <ul class="list-unstyled topbar-nav float-right mb-0">
        <li class="hidden-sm">
            <a class="nav-link  waves-effect waves-light" href="javascript: void(0);" role="button">
                <i class="fas fa-bell"></i>
            </a>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <i class="ti-bell noti-icon"></i>
                <span class="badge badge-danger badge-pill noti-icon-badge">
                    0
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0" style="width: 500px" !important>

                <h6 class="dropdown-item-text font-15 m-0 py-3 text-white d-flex justify-content-between align-items-center"
                    style="background-color: #BF131D;">
                    Notifications <span class="badge badge-light badge-pill">
                        0
                    </span>
                </h6>
                <div class="slimscroll notification-list">
                    <!-- item-->
                </div>
                <!-- All-->
                <div class="row">
                    <div class="col-6">
                        <form action="/notification" class="dropdown-item text-center text-primary" method="POST"
                            onclick="this.submit();">
                            <input type="hidden" name="_token" value="YlnRGH2bsitIEwIY6s3DMu8lwpNQxcQXQHP1Llfz">
                            <input type="hidden" name="_method" value="GET"> See Details
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="/notification/read/all" class="dropdown-item text-center text-primary"
                            method="POST" onclick="this.submit();">
                            <input type="hidden" name="_token" value="YlnRGH2bsitIEwIY6s3DMu8lwpNQxcQXQHP1Llfz">
                            Mark All Read
                        </form>
                    </div>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">

                <img src="https://toss.telkomuniversity.ac.id/images/en.png" alt="" width="5em" class="text-muted">

            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="/language/en">
                    <img src="https://toss.telkomuniversity.ac.id/images/en.png" alt="" width="20em"
                        class="text-muted mr-2">
                    English</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/language/id">
                    <img src="https://toss.telkomuniversity.ac.id/images/id.png" alt="" width="20em"
                        class="text-muted mr-2"> Bahasa</a>
                </a>
            </div>
        </li>
        <li class="dropdown">
            <a href="" class="dropdown-item">
                <button class="btn btn-danger">
                    Keluar
                </button>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="fas fa-user-circle text-muted mr-2"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="https://toss.telkomuniversity.ac.id/logout">
                    <input type="hidden" name="_token" value="YlnRGH2bsitIEwIY6s3DMu8lwpNQxcQXQHP1Llfz"> <button
                        class="dropdown-item" type="submit" href="https://toss.telkomuniversity.ac.id/logout"><i
                            class="fas fa-power-off text-muted mr-2"></i> Logout</button>
                </form>
            </div>
        </li>
    </ul>
    <!--end topbar-nav-->

</nav>
<!-- end navbar-->