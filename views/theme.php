<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Home
        | TOSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="TOSS | Telkom University One Stop Service" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://toss.telkomuniversity.ac.id/images/toss.png">


    <!-- App css -->
    <link href="https://toss.telkomuniversity.ac.id/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="https://toss.telkomuniversity.ac.id/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="https://toss.telkomuniversity.ac.id/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- leftbar -->
    <!-- leftbar-tab-menu -->
    <div class="leftbar-tab-menu">
        <?php require('views/partials/nav.php'); ?>
    </div>
    <!-- end leftbar-tab-menu-->

    <!-- toptbar -->
    <!-- Top Bar Start -->
    <div class="topbar">
       <?php require('views/partials/header.php'); ?>
    </div>
    <!-- Top Bar End -->
    
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            <?php require($content); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control search border-end-0 border"
                            placeholder="What letter would you want to create today?" id="keyword" name="search"
                            type="text" value="">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n3" type="button"
                                id="search">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" id="result">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Search Result</h4>
                    <hr>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- extra Modal -->


    <!-- Footer -->
    <footer class="footer text-center text-sm-left">
        &copy; 2024 Telkom University <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by TOSS Team</span>
    </footer>
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="https://toss.telkomuniversity.ac.id/assets/js/jquery.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/jquery-ui.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/metismenu.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/waves.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/feather.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/assets/js/jquery.slimscroll.min.js"></script>
    <script src="https://toss.telkomuniversity.ac.id/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- footerScript -->
    <script>
        $(function () {
            $("#result").hide();
            $('#search').click(function () {
                $("#result").show();
                var keyword = $('#keyword').val();
                $.ajax({
                    type: "GET",
                    url: '/dashboard/search/' + keyword,
                    dataType: 'JSON',
                    success: function (res) {
                        $(".result").empty();
                        for (i = 0; i < res.length; i++) {
                            $("#result").find('.result').append(
                                '<div><small>https://toss.telkomuniversity.ac.id/student/' + res[i][
                                'slug'
                                ] + 's</small><a href="student/' + res[i]['slug'] +
                                's/create"><h4 class="header-title">' + res[i]['name'] +
                                '</h4></a></div>'
                            );
                        }
                    },
                    error: function (data) {
                        alert(error);
                    }
                });
            });
            $("#keyword").keyup(function (event) {
                if (event.keyCode === 13) {
                    $("#search").click();
                }
            });
        });
    </script>

    <!-- App js -->
    <script src="https://toss.telkomuniversity.ac.id/assets/js/app.js"></script>
</body>

</html>