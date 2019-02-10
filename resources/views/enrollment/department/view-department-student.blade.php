@extends('enrollment.department.department-master')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-6 offset-xl-5">
                                <img src="{!!asset('department-student-images/'.$students->image) !!}" height="100" width="100" style="border: 2px solid #2cff18; border-radius: 5px;" />
                            </div>
                            <h1 class="col-sm-6 offset-4" style="margin-top: 20px; color: darkgreen;">{!! $students->name !!}</h1>
                        </div>
                        <hr/>
                        <div class="table-responsive-sm">
                            <ul class="offset-1" style="list-style: none;">
                                <li>
                                    <h2>Phone : </h2>
                                    <p>{!! $students->phone !!}</p>
                                </li>
                                <br/>
                                <li>
                                    <h2>E-mail : </h2>
                                    <p>{!! $students->email !!}</p>
                                </li>
                                <br/>
                                <li>
                                    <h2>Present Address : </h2>
                                    <b>{!! $students->present_address !!}</b>
                                </li>
                                <br/>
                                <li>
                                    <h2>N-ID : </h2>
                                    <p>{!! $students->n_id !!}</p>
                                </li>
                                <br/>
                                <li>
                                    <h2>Student ID : </h2>
                                    <p>{!! $students->student_id !!}</p>
                                </li>
                                <br/>
                                <li>
                                    <h2>Department : </h2>
                                    <p>{!! $students->department_id !!}</p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection