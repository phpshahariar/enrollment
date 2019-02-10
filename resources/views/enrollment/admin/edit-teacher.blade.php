@extends('enrollment.admin.admin-master')

@section('content')
    <h1>{{ Session::get('message') }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2">
                <div class="card">
                    <h2 class="card-header text-center facebook-color bg-primary">Teacher Information Form</h2>
                    <div class="card-body">
                        <form id="editTeacherInfo" class="form-horizontal" action="{{ url('/update-teacher') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input name="name" value="{!! $teachers->name !!}" type="text" class="form-control">
                                    <input name="name_id" value="{!! $teachers->id !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input name="email" value="{!! $teachers->email !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-12">
                                    <input name="password" value="{!! $teachers->password !!}" type="password" class="form-control">
                                    <span style="color: red"> {{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-12">
                                    <input name="phone" value="{!! $teachers->phone !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">N-ID</label>
                                <div class="col-sm-12">
                                    <input name="n_id" value="{!! $teachers->n_id !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Father Name</label>
                                <div class="col-sm-12">
                                    <input name="father_name" value="{!! $teachers->father_name !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Mother Name</label>
                                <div class="col-sm-12">
                                    <input name="mother_name" value="{!! $teachers->mother_name !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Emargency Contact</label>
                                <div class="col-sm-12">
                                    <input name="urgent_contact" value="{!! $teachers->urgent_contact !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Present Address</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="present_address">{!! $teachers->present_address !!}</textarea>
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Permanent Address</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="permanent_address">{!! $teachers->permanent_address !!}</textarea>
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Salary</label>
                                <div class="col-sm-12">
                                    <input name="salary" value="{!! $teachers->salary !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Slug</label>
                                <div class="col-sm-12">
                                    <input name="slug" value="{!! $teachers->slug !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-7">
                                    <input name="image" type="file" accept="image/*">
                                    <img src="{!! asset('teacher-images/'.$teachers->image) !!}" height="90" width="90"/>
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
                                    <button type="submit" name="btn" class="btn btn-block btn-success">Update Teacher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editTeacherInfo'].elements['department_id'].value="{!! $teachers->department_id !!}";
    </script>
@endsection