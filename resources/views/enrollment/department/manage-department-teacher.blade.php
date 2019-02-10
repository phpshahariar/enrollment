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
                    <h5 class="card-header">Teacher Info Table</h5>
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
                                    <th>Salary</th>
                                    <th>Department</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                @foreach($deptTeachers as $deptTeacher)
                                    <tr>
                                        <td>{!! $i++ !!}</td>
                                        <td>{!! $deptTeacher->name !!}</td>
                                        <td>{!! $deptTeacher->email !!}</td>
                                        <td>{!! $deptTeacher->phone !!}</td>
                                        <td>{!! $deptTeacher->n_id !!}</td>
                                        <td>{!! $deptTeacher->present_address !!}</td>
                                        <td>TK.{!! $deptTeacher->salary !!}</td>
                                        <td>{!! $deptTeacher->department_id !!}</td>
                                        <td>
                                            <img src="{!! asset('department-teacher-images/'.$deptTeacher->image) !!}" height="100" width="100"/>
                                        </td>
                                        <td>

                                            <a href="{!! url('/edit-department-teacher/'.$deptTeacher->id) !!}" name="btn" class="btn btn-xs btn-success" title="Edit Department">
                                                <span>Edit</span>
                                            </a>
                                            <a href="{!! url('/view-department-teacher/'.$deptTeacher->id) !!}" style="margin-top: 5px;" name="btn" class="btn btn-xs btn-info" title="View Department">
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