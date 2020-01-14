<!DOCTYPE html>
<html lang="es">

<head>
    <title>CACAO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Appestia App Landing Page Template by Phoenixcoded">
    <meta name="keywords"
        content="appestia, Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="/css/color/color-1.min.css" id="color" />

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css"/>

    <!-- App CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Alertify -->
    <link rel="stylesheet" href="/css/alertify.min.css">

    <!-- MultiSelect -->
    <link rel="stylesheet" href="/css/vue-multiselect.min.css">
</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">

        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="/" class="logo"><span class="h4">COMPASSION</span></a>
            <nav class="navbar navbar-static-top">
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <div class="navbar-custom-menu f-right">
                    <ul class="top-nav">
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                                class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="/images/avatar-1.png" style="width:40px;"
                                        alt="User Image"></span>
                                <span>Daniel Ochoa<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><i class="icon-logout"></i> Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="app">
            @include('aside')
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/pages/elements.js"></script>
    <script src="/js/menu.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>