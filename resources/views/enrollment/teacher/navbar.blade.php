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
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Teacher Information</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/add-department-teacher') !!}">Create Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/manage-department-teacher') !!}">Manage Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Available Set's</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Student Information</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/add-department-student') !!}">Add Student <span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! url('/manage-department-student') !!}">Manage Student</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-h-square"></i>Administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-home"></i>Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-magnet"></i>Message From The Dean</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>