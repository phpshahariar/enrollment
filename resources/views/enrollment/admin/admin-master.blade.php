<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{!! asset('/enrollment/') !!}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{!! asset('/enrollment/') !!}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin Panal</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    @include('enrollment.admin.header')
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    @include('enrollment.admin.navbar')
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        @yield('content')
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="{!! asset('/enrollment/') !!}/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="{!! asset('/enrollment/') !!}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="{!! asset('/enrollment/') !!}/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>