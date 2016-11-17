<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Supervisi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('assets') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/dist/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-collapse fixed">
<div class="wrapper">
    <header class="main-header">
        <a href="{{ url('assets') }}/index2.html" class="logo">
            <span class="logo-mini"><b>E</b>-<b>S</b></span>
            <span class="logo-lg"><b>E</b>-<b>S</b>upervisi</span>
        </a>
        <nav class="navbar navbar-static-top">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i> <span class="label label-danger">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('assets') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Beta
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>...</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">Lihat Semua Pemberiitahuan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#">
                            <img src="{{ url('assets') }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                    </li>
                    <li class="bg-red text-bold">
                        <a href="#" data-toggle="control-sidebar">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <div class="box-footer">
                    Footer
                </div>
            </div>
        </section>
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
<script src="{{ url('assets') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('assets') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ url('assets') }}/plugins/fastclick/fastclick.js"></script>
<script src="{{ url('assets') }}/dist/js/app.min.js"></script>
<script src="{{ url('assets') }}/dist/js/demo.js"></script>
</body>
</html>