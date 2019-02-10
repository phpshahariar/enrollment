@extends('enrollment.teacher.teacher-master')

@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Student Enrollment System </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Enrollment System</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Teacher</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">0000</h1>
                                </div>
                            </div>
                            <div id="sparkline-revenue"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Student</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">0000</h1>
                                </div>
                            </div>
                            <div id="sparkline-revenue2"></div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Available Set's</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">0000</h1>
                                </div>
                            </div>
                            <div id="sparkline-revenue4"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Department Category</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">SL No</th>
                                            <th class="border-0">Department Name</th>
                                            <th class="border-0">No Of Teachers</th>
                                            <th class="border-0">No Of Students</th>
                                            <th class="border-0">Student Attend</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>CSE</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>EEE</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>ETE</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>Civil</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>BBA</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <strong>English</strong>
                                            </td>
                                            <td>20 Person</td>
                                            <td>100 </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- customer acquistion  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Student Acquisition</h5>
                            <div class="card-body">
                                <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                                <div class="text-center">
                                            <span class="legend-item mr-2">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Returning</span>
                                            </span>
                                    <span class="legend-item mr-2">

                                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">First Time</span>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end customer acquistion  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- product category  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- end product category  -->
                    <!-- product sales  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- end product sales  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- top perfomimg  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end top perfomimg  -->
                        <!-- ============================================================== -->
                    </div>
                </div>

                <div class="row">
                    <!-- ============================================================== -->
                    <!-- sales  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end new customer  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- visitor  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end visitor  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total orders  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end total orders  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- total revenue  -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- category revenue  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end category revenue  -->
                <!-- ============================================================== -->


                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- social source  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end social source  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- sales traffice source  -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales traffice source  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- sales traffic country source  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- end sales traffice country source  -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
@endsection