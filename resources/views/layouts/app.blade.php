<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery-confirm.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>
    <body id="page-top" class="sidebar-toggled">
        <div id="app">
            <div id="wrapper">
                @auth
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <img src="{{ asset('img/gestor.png') }}" height="40">
                            </div>
                            <div class="sidebar-brand-text mx-3">Gestor</div>
                        </a>
                        <hr class="sidebar-divider my-0">
                        <li class="nav-item  @if(in_array(Request::route()->getName(), ['home', 'home.filtro', 'home.data', 'home.filtro.data'])) active @endif">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <hr class="sidebar-divider d-none d-md-block">
                        @if(is_null(Auth()->user()->user_id))
                            <li class="nav-item @if(in_array(Request::route()->getName(), ['admin.empresas', 'admin.cadastrar.empresa', 'admin.alterar.empresa'])) active @endif">
                                <a class="nav-link" href="{{ route('admin.empresas') }}">
                                    <i class="fas fa-fw fa-building"></i>
                                    <span>Empresas</span></a>
                            </li>
                            @if(Auth::user()->email !== 'teste@teste.com')
                                <li class="nav-item @if(in_array(Request::route()->getName(), ['admin.usuario', 'admin.cadastrar.usuario', 'admin.alterar.usuario'])) active @endif">
                                    <a class="nav-link" href="{{ route('admin.usuario') }}">
                                        <i class="fas fa-fw fa-user"></i>
                                        <span>Usuários</span></a>
                                </li>
                            @endif
                        @endif
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                    </ul>
                        <div id="content-wrapper" class="d-flex flex-column">
                            <div id="content">
                                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="d-md-none d-lg-none d-xl-none d-sm-inline">
                                        <div class="rotate-n-15">
                                            <a href="{{ route('home') }}"><img src="{{ asset('img/gestor.png') }}" height="35"></a>
                                        </div>
                                    </div>
                                    <ul class="navbar-nav ml-auto">
                                       <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item dropdown no-arrow">
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="mr-2 d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                                <img class="img-profile rounded-circle" src="{{ asset('img/user.png') }}">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                <a class="dropdown-item" href="{{ route('admin') }}">{{ __('Configurações') }}</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Sair') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="container-fluid">
                                    @include('flash::message')
                                </div>
                                @yield('content')
                            </div>
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; Gestor {{ date('Y') }}</span>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    @endauth
                @guest
                    @yield('content')
                @endguest
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
        <script src="{{ asset('js/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
        <script src="{{ asset('js/jquery-confirm.min.js') }}"></script>
        <script src="{{ asset('js/masks.js') }}"></script>
        @yield('javascript')
    </body>
</html>
