@extends('enrollment.admin.admin-master')

@section('content')
    <h1>{{ Session::get('message') }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2">
                <div class="card">
                    <h2 class="card-header text-center facebook-color bg-primary">Department Information Form</h2>
                    <div class="card-body">
                        <form id="editDepartmentInfo" class="form-horizontal" action="{{ url('/department-update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input name="name" value="{!! $department->name !!}" type="text" class="form-control">
                                    <input name="name_id" value="{!! $department->id !!}" type="hidden" class="form-control">
                                    <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Code</label>
                                <div class="col-sm-12">
                                    <input name="code" value="{!! $department->code !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input name="email" value="{!! $department->email !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-12">
                                    <input name="password" value="{!! $department->password !!}" type="password" class="form-control">
                                    <span style="color: red"> {{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-12">
                                    <input name="phone" value="{!! $department->phone !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('phone') ? $errors->first('phone') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Tuition Fee</label>
                                <div class="col-sm-12">
                                    <input name="tuition_fee" value="{!! $department->tuition_fee !!}" type="number" class="form-control">
                                    <span style="color: red"> {{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Slug</label>
                                <div class="col-sm-12">
                                    <input name="slug" value="{!! $department->slug !!}" type="text" class="form-control">
                                    <span style="color: red"> {{ $errors->has('slug') ? $errors->first('slug') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-7">
                                    <input name="image" type="file" accept="image/*">
                                    <img src="{!! asset('department-images/'.$department->image) !!}" height="90" width="90"/>
                                    <span style="color: red"> {{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-block btn-success">Department Update</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection