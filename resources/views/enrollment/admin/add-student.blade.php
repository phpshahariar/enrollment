@extends('enrollment.admin.admin-master')

@section('content')
    <h1>{{ Session::get('message') }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2">
                <div class="card">
                    <h2 class="card-header text-center facebook-color bg-primary">Student Information Form</h2>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ url('/new-student') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input name="name" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Student ID</label>
                                <div class="col-sm-12">
                                    <input name="student_id" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input name="email" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-12">
                                    <input name="password" type="password" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-12">
                                    <input name="phone" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">N-ID</label>
                                <div class="col-sm-12">
                                    <input name="n_id" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Father Name</label>
                                <div class="col-sm-12">
                                    <input name="father_name" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Mother Name</label>
                                <div class="col-sm-12">
                                    <input name="mother_name" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Emargency Contact</label>
                                <div class="col-sm-12">
                                    <input name="urgent_contact" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Present Address</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="present_address"></textarea>
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Permanent Address</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="permanent_address"></textarea>
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Waver</label>
                                <div class="col-sm-12">
                                    <input name="waver" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Slug</label>
                                <div class="col-sm-12">
                                    <input name="slug" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-7">
                                    <input name="image" type="file" accept="image/*">
                                    <span style="color: red"> {{ $errors->has('service_image') ? $errors->first('service_image') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Department</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="department_id">
                                        <option>---Select Department---</option>
                                        <option value="CSE">CSE</option>
                                        <option value="EEE">EEE</option>
                                        <option value="ETE">ETE</option>
                                        <option value="BBA">BBA</option>
                                        <option value="Civil">Civil</option>
                                        <option value="English">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-block btn-success">Add Student</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection