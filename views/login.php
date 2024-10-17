<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login TOSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="TOSS | Telkom University One Stop Service" name="description">
        <meta content="" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/toss.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/login.css" rel="stylesheet" type="text/css">
    </head>

    <body class="account-body accountbg">

        <!-- content -->
            <!-- Log In page -->
        <nav class="navbar navbar-light bg-white" style="background-color: #fff;">
            <div class="mx-auto my-0 order-0 order-md-1 position-relative">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo-toss.png" width="100" alt="">
                </a>
            </div>
        </nav>
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center mb-5">
                    <div class="text-center auth-logo-text">
                        <h4 class="mt-0">Hello! <br> Welcome to TOSS</h4>
                        <h2 class="mt-0 mb-3">SSO LOGIN</h2>
                    </div>
                    <div class="auth-page">
                        <div class="card-access auth-card shadow-lg" style="background-color: #c60202;">
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form-horizontal auth-form my-4" method="POST" action="">
                                        <input type="hidden" name="_token" value="6QHaGjKmI6DrsRNgDh4j3SQRuwukDAlLz1Rn8RCp">                                    <div class="form-group">
                                            <label for="username" class="label-access">Username</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                                <input id="username" type="text" placeholder="username" class="form-control " name="username" value="" required="" autocomplete="username" autofocus="">
                                            </div>
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group">
                                            <label for="userpassword" class="label-access">
                                                <p style="color:white">Password</p>
                                            </label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i>
                                                </span>

                                                <input id="password" type="password" placeholder="Password" class="form-control " name="password" value="" required="" autocomplete="current-password">
                                            </div>
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input class="custom-control-input" type="checkbox" name="remember" id="customSwitchSuccess">

                                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-light btn-round btn-block text-dark" style="border-radius: 25px;" type="submit">
                                                    Log In 
                                                    <i class="fas fa-sign-in-alt ml-1"></i>
                                                </button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->
                                    </form>
                                    <!--end form-->
                                </div>
                                <!--end /div-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <!--end account-social-->
                    </div>
                    <div class="text-center auth-logo-text">
                        <h6>Butuh Bantuan? <a href="https://linktr.ee/toss.telu"><i class="fas fa-phone ml-1"></i> Ticketing</a></h6>
                    </div>
                    <!--end auth-page-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- End Log In page -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>