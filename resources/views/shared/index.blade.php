<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appname</title>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    @push('links')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-dark border-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button type="button" class="btn btn-link nav-link" data-widget="pushmenu">
                        <i class="fas fa-bars"></i>
                    </button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Alexander Pierce</a>
                    <div class="dropdown-menu dropdown-menu-right border-light shadow-sm" style="min-width: 240px;">
                        <h6 class="dropdown-header text-left">Logueado como</h6>
                        <div class="px-3">
                            <h6 class="mb-0">Alexander Pierce</h6>
                            <p class="mb-0 text-muted">alex@email.com</p>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-light-primary">
            <a href="#" class="brand-link border-0">
                <div class="brand-image d-flex align-items-center justify-content-center"
                    style="height: 32px; width: 32px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-white">
                        <circle cx="18" cy="18" r="3" />
                        <circle cx="6" cy="6" r="3" />
                        <path d="M6 21V9a9 9 0 0 0 9 9" />
                    </svg>
                </div>
                <span class="brand-text font-weight-bold text-white">Appname</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                    <div class="image">
                        <div class="bg-warning font-weight-semibold d-flex align-items-center justify-content-center rounded-circle"
                            style="height: 32px; width: 32px;">A</div>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block font-weight-semibold">Alexander Pierce</a>
                        <span class="text-muted">alex@email.com</span>
                    </div>
                </div>

                <nav class="my-2">
                    <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item my-1"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Presentaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>Medicamentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>Stocks</p>
                            </a>
                        </li>
                        <li class="nav-item my-1"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Laboratorios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>Lotes</p>
                            </a>
                        </li>
                        <li class="nav-item my-1"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-plus"></i>
                                <p>Entradas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-minus"></i>
                                <p>Salidas</p>
                            </a>
                        </li>
                        <li class="nav-item my-1"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content py-3">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    @push('scripts')
</body>

</html>