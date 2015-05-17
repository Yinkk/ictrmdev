@extends('default')

@section('content')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">ICTRM V 1.0</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="http://localhost/laravelProject/ictrmdev/login/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav in" id="side-menu">
                    <li>
                        <a href="{{ url('admin/index') }}">หน้าผู้ดูแลระบบ</a>
                    </li>
                    <li>
                        <a href="{{ url('home') }}">หน้าเว็บไซต์</a>
                    </li>
                    <li {{ Request::segment(2) == 'system' ? 'class="active"' : '' }}>
                        <a href="{{ url('admin/system')}}" class="">ข้อมูลระบบ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ url('admin/system/faculty') }}">ข้อมูลคณะ</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/system/major') }}">ข้อมูลสาขาวิชา</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/system/year') }}">ปีงบประมาณ</a>
                            </li>
                        </ul>
                    </li>
                    <li {{ Request::segment(2) == 'news' ? 'class="active"' : '' }}>
                        <a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i>ข้อมูลข่าว</a>
                    </li>
                    <li {{ Request::segment(2) == 'user' ? 'class="active"' : '' }}>
                        <a href="{{ url('admin/user') }}"><i class="fa fa-users"></i></i>ข้อมูลนักวิจัย</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/index') }}"><i class="fa fa-bar-chart-o fa-fw"></i>ข้อมูลงานวิจัย<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">โครงการ</a>
                            </li>
                            <li>
                                <a href="#">ประชุมวิชาการ</a>
                            </li>
                            <li>
                                <a href="#">วารสาร</a>
                            </li>
                            <li>
                                <a href="#">ตีพิมพ์</a>
                            </li>
                            <li>
                                <a href="#">รางวัล</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper" style="min-height: 383px;">
        <div class="row">
            @yield('content_admin')
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
@stop