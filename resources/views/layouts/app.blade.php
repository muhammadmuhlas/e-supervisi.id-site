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
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Administrator
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'kepala-sekolah')
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Kepala Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'pengawas-sekolah')
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Pengawas Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'operator-sekolah')
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Operator Sekolah
                            </span>
                            </a>
                        </li>
                    @elseif(explode('/', $_SERVER['REQUEST_URI'])[1] == 'guru')
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Guru
                            </span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            <span class="">
                                Informasi Akun
                            </span>
                            </a>
                        </li>
                    @endif
                    <li class="dropdown user user-menu hidden-xs hidden-sm">
                        <a onMouseOver="this.style.background='#3c8dbc'" onMouseOut="this.style.background='#3c8dbc'" style="cursor: default">
                            {{--<img src="{{ url('assets') }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="bg-orange text-bold" style="cursor: pointer; cursor: hand;">
                        <a data-toggle="control-sidebar" onclick="setting();">Pengaturan</a>
                    </li>
                    <li class="bg-red text-bold" style="cursor: pointer; cursor: hand;">
                        <a data-toggle="control-sidebar" onclick="logout();">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content-wrapper">
        @yield('content')
        <div class="row text-center">
            <img src="{{ url('images/logo/logo-kemdikbud-outline.png') }}" width="111px">
        </div>
    </div>
    <footer class="main-footer" style="z-index: 1000">
        <div class="pull-right hidden-xs">
            <b>Version</b> Alpha
        </div>
        <strong>Copyright &copy; 2016 All rights
            reserved.
        </strong>
    </footer>
</div>
<script src="{{ url('assets') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
@yield('custom-js')
<script>
    function logout() {
        url = '/logout';
        window.location = url;
    }
    function setting() {
        url = '/setting';
        window.location = url;
    }
</script>
<script src="{{ url('assets') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('assets') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ url('assets') }}/plugins/fastclick/fastclick.js"></script>
<script src="{{ url('assets') }}/dist/js/app.min.js"></script>
<script src="{{ url('assets') }}/dist/js/demo.js"></script>
</body>
</html>