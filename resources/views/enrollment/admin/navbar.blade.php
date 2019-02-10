<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Department Information</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/add-department') !!}">Add Department</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/manage-department') !!}">Manage Department</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-chartist.html">Available Set's</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Teacher Informations <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/add-teacher') !!}">Add Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/manage-teacher') !!}">Manage Teacher</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Student Information</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/add-student') !!}">Add Student <span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/manage-student') !!}">Manage Student</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Student Information</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/cse-student') !!}">CSE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/eee-student') !!}">EEE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/ete-student') !!}">ETE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/bba-student') !!}">BBA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/english-student') !!}">English</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>