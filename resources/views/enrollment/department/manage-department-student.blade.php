@extends('enrollment.department.department-master')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Teacher Tables</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{!! url('/department') !!}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Student Info Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Phone</th>
                                    <th>N-ID</th>
                                    <th>Present Address</th>
                                    <th>Waver</th>
                                    <th>Department</th>
                                    <th>Student ID</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{!! $i++ !!}</td>
                                        <td>{!! $student->name !!}</td>
                                        <td>{!! $student->email !!}</td>
                                        <td>{!! $student->phone !!}</td>
                                        <td>{!! $student->n_id !!}</td>
                                        <td>{!! $student->present_address !!}</td>
                                        <td>TK.{!! $student->waver !!}</td>
                                        <td>{!! $student->department_id !!}</td>
                                        <td>{!! $student->student_id !!}</td>
                                        <td>
                                            <img src="{!! asset('department-student-images/'.$student->image) !!}" height="100" width="100"/>
                                        </td>
                                        <td>

                                            <a href="{!! url('/edit-department-student/'.$student->id) !!}" name="btn" class="btn btn-xs btn-success" title="Edit Student">
                                                <span>Edit</span>
                                            </a>
                                            <a href="{!! url('/view-department-student/'.$student->id) !!}" style="margin-top: 5px;" name="btn" class="btn btn-xs btn-instagram" title="View Student">
                                                <span>View</span>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection