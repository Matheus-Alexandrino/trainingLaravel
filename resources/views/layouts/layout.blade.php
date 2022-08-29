<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Página de Estudos - Matheus</title>
    <meta content="Página de Estudos - Matheus" name="description" />
    <meta content="Página de Estudos - Matheus" name="author" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="" type="image/x-icon">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css')}}" rel="stylesheet" type="text/css">
    <style>
        .left-inner-addon {
            position: relative;
        }
        .left-inner-addon i {
            position: absolute;
            padding: 10px 12px;
            pointer-events: none;
            color: #666;
        }
        .left-inner-addon input.form-control {
            padding-left: 30px;
        }
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{asset('/images/loading.gif')}}") 50% 50% no-repeat white;
            display: none;
        }
        @media print {
            html, body * {
                visibility: hidden;
                margin: 0;
                padding: 0;
                border: 0;
            }
            .printable, .printable * {
                visibility: visible;
            }
            .printable {
                margin: 0;
                position: fixed;
                left: 0;
                top: 0;
            }
        }
    </style>

</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Painel de Projetos
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>

        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Inicio</li>
                        <li>
                            <a href="/" class="waves-effect">
                                <i class="icon-accelerator"></i> <span> Geral </span>
                            </a>
                        </li>
                        
                        <li class="menu-title">Projetos - CRUD</li>
                        <li>
                            <a href="/series" class="waves-effect">
                                <i class="icon-setting-1"></i> <span> Cadastro de Séries </span>
                            </a>                        
                            <a href="/series" class="waves-effect">
                                <i class="fab fa-slack-hash"></i> <span>  </span>
                            </a>


                        </li>
                        </li>

                        <!-- <li class="menu-title">Sistema</li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-briefcase-search-outline"></i><span> Campanhas <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">

                                <li><a href="">Campanhas</a></li>
                                <li><a href="#">Relatorios</a></li>                                                                      

                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Transações <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="">Pedidos</a></li>
                                <li><a href="">Relatorios</a></li>                                
                            </ul>
                        </li>


                        <li class="menu-title">Configurações</li>
                        <li>
                            <a href="1" class="waves-effect">
                                <i class="icon-setting-1"></i> <span> Integrações </span>
                            </a>
                        </li> -->

                       
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            <footer class="footer">
                © 2022 - 2023 Matheus Alexandrino <span class="d-none d-sm-inline-block"> - Criado <i class="mdi mdi-code text-danger"></i> com o intuito de reforçar os conceitos</span>.
            </footer>

        </div>

    </div>
 
    <script src="{{asset('js/app.js')}}"></script>   

</body>
</html>
