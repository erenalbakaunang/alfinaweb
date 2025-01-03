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
    <link rel="shortcut icon" href="assets/images/logo-toss.png">

    <link href="assets/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- toptbar -->
    <!-- Top Bar Start -->
    <div class="topbar">
        <?php require('views/partials/header.php'); ?>
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- leftbar -->
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <?php require('views/partials/nav.php'); ?>
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Page Content-->
        <div class="page-content-tab">
            <?php require($content); ?>
        </div>
    </div>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <script src="assets/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/js/jszip.min.js"></script>
    <script src="assets/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/js/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.datatable.init.js"></script>

    <!-- footerScript -->
    <script>
        $(function () {
            $('#viewPdfModal').on('show.bs.modal', function (e) {
                
            });

            // Logic to handle surat form on view mode or not
            <?php if (isset($_GET['form']) && $_GET['form'] == 'view') { ?>
                $('.row-detail-page form.form-group').each(function () {
                    $(this).on('submit', function () {
                        return false;
                    });

                    $(this).find('input, select').attr({
                        disabled: 'disabled'
                    });

                    $(this).find('button, small').hide();
                });
            <?php } ?>

            // To handle select option on selected value
            $('select').each(function () {
                let selectedValue = $(this).attr('data-selected');
                $(this).find('option').each(function () {
                    if ($(this).attr('value') == selectedValue) {
                        $(this).attr('selected', 'selected');
                    }
                });
            });

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
    <script src="assets/js/app.js"></script>
</body>

</html>