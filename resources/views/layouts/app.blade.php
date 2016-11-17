<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Supervisi | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('assets') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/dist/css/skins/_all-skins.min.css">
    @yield('custom-css')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-collapse fixed">
<div class="wrapper">
    <header class="main-header">
        <a href="/" class="logo">
            <span class="logo-mini"><b>E</b>-<b>S</b></span>
            <span class="logo-lg"><b>E</b>-<b>S</b>upervisi</span>
        </a>
        <nav class="navbar navbar-static-top">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    @if(explode('/', $_SERVER['REQUEST_URI'])[1] == 'administrator')
                        <li class="dropdown user-type user-menu">
                            <a href="#">
                            <span class="">
                                Administrator
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'kepala-sekolah')
                        <li class="dropdown user-type user-menu">
                            <a href="#">
                            <span class="">
                                Kepala Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'operator-sekolah')
                        <li class="dropdown user-type user-menu">
                            <a href="#">
                            <span class="">
                                Operator Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'pengawas-sekolah')
                        <li class="dropdown user-type user-menu">
                            <a href="#">
                            <span class="">
                                Pengawas Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'guru')
                        <li class="dropdown user-type user-menu">
                            <a href="#">
                            <span class="">
                                Guru
                            </span>
                            </a>
                        </li>
                    @else
                    @endif
                    <li class="dropdown user user-menu">
                        <a href="#">
                            <img src="{{ url('assets') }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="bg-red text-bold">
                        <a href="{{ url('logout') }}" data-toggle="control-sidebar">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> Alpha
        </div>
        <strong>Copyright &copy; 2016 All rights
            reserved.
    </footer>
</div>
<script src="{{ url('assets') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
@yield('custom-js')
<script src="{{ url('assets') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('assets') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ url('assets') }}/plugins/fastclick/fastclick.js"></script>
<script src="{{ url('assets') }}/dist/js/app.min.js"></script>
<script src="{{ url('assets') }}/dist/js/demo.js"></script>
</body>
</html>