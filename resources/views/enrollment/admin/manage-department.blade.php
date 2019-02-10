@extends('enrollment.admin.admin-master')
@section('content')
    <div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Department Tables</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{!! url('/admin') !!}" class="breadcrumb-link">Dashboard</a></li>
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
                <h5 class="card-header">Department Info Table</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Tuition Fee</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach($departments as $department)
                            <tr>
                                <td>{!! $i++ !!}</td>
                                <td>{!! $department->name !!}</td>
                                <td>{!! $department->code !!}</td>
                                <td>{!! $department->email !!}</td>
                                <td>{!! $department->phone !!}</td>
                                <td>TK.{!! $department->tuition_fee !!}</td>
                                <td>
                                    <img src="{!! asset('department-images/'.$department->image) !!}" height="100" width="100"/>
                                </td>
                                <td>

                                    <a href="{!! url('/edit-department/'.$department->id) !!}" name="btn" id="editDept" class="btn btn-xs btn-success" title="Edit Department">
                                        <span>Edit</span>
                                    </a>
                                    <a href="{!! url('/delete-department/'.$department->id) !!}" name="btn" class="btn btn-xs btn-danger" title="Delete Department" onclick="return confirm('Are You Sure You Want to Delete!')">
                                        <span>Delete</span>
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