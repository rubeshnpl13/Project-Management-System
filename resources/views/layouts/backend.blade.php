<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded"/>
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
</head>
<body class="">
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.dashboard.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Programs</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.program.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.program.index')}}" >list</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Courses</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.course.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.course.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Batch</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.batch.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.batch.index')}}" >List</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Supervisor Type</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.supervisor_type.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.supervisor_type.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Supervisor</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.supervisor.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.supervisor.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Student</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.student.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.student.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Project</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.project.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.project.index')}}" >List</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">language Tools Project</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.language_tools_project.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.language_tools_project.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Student Project</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.student_project.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.student_project.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Organizations</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.organizations.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.organizations.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Evaluation Criteria</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.evaluation_criteria.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.evaluation_criteria.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext"> Course Evaluation </span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.course_evaluation_criteria.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.course_evaluation_criteria.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Evaluation </span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.evaluation.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.evaluation.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Log Sheets</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('backend.log_sheet.create')}}" >Create</a></li>
                        <li><a href="{{route('backend.log_sheet.index')}}" >List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="assets/images/logo.png" alt="" class="logo">
            <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">@yield('head')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            @yield('content')

        </div>
    </div>
</div>



<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard-main.js')}}"></script>
@yield('js')
</body>

</html>
