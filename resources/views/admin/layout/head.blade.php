<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ url('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('asset/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/help.css') }}">
</head>

<style>
    .c-s{
        background-color: #006A71 !important
    }
</style>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @can('role', ['admin', 'pimpinan', 'user'])
            <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex c-s align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon">
                        <img src="{{ url('assets/img/ds.png') }}">
                    </div>
                    {{-- <div class="sidebar-brand-text mx-2">PT.NPS Pemud</div> --}}
                </a>
                <hr class="sidebar-divider my-0">
                @can('role', ['admin', 'pimpinan'])
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>
                @endcan
                @can('role', 'admin')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin') }}">
                            <i class="bi bi-people-fill"></i>
                            <span>Pelanggan</span></a>
                    </li>
                @endcan
                @can('role', 'admin')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('produk') }}">
                            <i class="bi bi-box2-heart-fill"></i>
                            <span>Produk</span></a>
                    </li>
                @endcan
                @can('role', 'admin')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pengirim') }}">
                            <i class="bi bi-send-check-fill"></i>
                            <span>Pengirim</span></a>
                    </li>
                @endcan
                @can('role', ['admin', 'pimpinan'])
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pesanan') }}">
                            <i class="bi bi-handbag-fill"></i>
                            <span>Pesanan</span></a>
                    </li>
                @endcan
                @can('role', ['admin', 'pimpinan'])
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pesanan.batal') }}">
                            <i class="bi bi-arrow-right"></i>
                            <span>Pengajuan Pembatalan</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                            aria-expanded="true" aria-controls="collapseForm">
                            <i class="bi bi-box-seam-fill"></i>
                            <span>Laporan</span>
                        </a>
                        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Bulan</h6>
                                <a class="collapse-item" href="{{ route('admin.januari') }}">Januari</a>
                                <a class="collapse-item" href="{{ route('admin.februari') }}">Februari</a>
                                <a class="collapse-item" href="{{ route('admin.maret') }}">Maret</a>
                                <a class="collapse-item" href="{{ route('admin.april') }}">April</a>
                                <a class="collapse-item" href="{{ route('admin.mei') }}">Mei</a>
                                <a class="collapse-item" href="{{ route('admin.juni') }}">Juni</a>
                                <a class="collapse-item" href="{{ route('admin.juli') }}">Juli</a>
                                <a class="collapse-item" href="{{ route('admin.agustus') }}">Agustus</a>
                                <a class="collapse-item" href="{{ route('admin.september') }}">September</a>
                                <a class="collapse-item" href="{{ route('admin.oktober') }}">Oktober</a>
                                <a class="collapse-item" href="{{ route('admin.november') }}">November</a>
                                <a class="collapse-item" href="{{ route('admin.desember') }}">Desember</a>
                            </div>
                        </div>
                    </li>
                @endcan
                {{-- user --}}
                @can('role', 'user')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboardUser') }}">
                            <i class="bi bi-house-fill"></i>
                            <span>Home</span></a>
                    </li>
                @endcan

                {{-- @can('role', 'user')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('cctv') }}">
                            <i class="bi bi-webcam-fill"></i>
                            <span>CCTV</span></a>
                    </li>
                @endcan --}}

                @can('role', 'user')
                    <li class="nav-item active">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                            aria-expanded="true" aria-controls="collapseForm">
                            <i class="bi bi-box-seam-fill"></i>
                            <span>Produk</span>
                        </a>
                        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Produk</h6>
                                <a class="collapse-item" href="{{ route('cctv') }}">CCTV</a>
                                <a class="collapse-item" href="{{ route('monitor') }}">Notebook</a>
                                <a class="collapse-item" href="{{ route('ups') }}">UPS</a>
                                <a class="collapse-item" href="{{ route('cable') }}">Cable</a>
                                <a class="collapse-item" href="{{ route('cpu') }}">PC</a>
                                <a class="collapse-item" href="{{ route('hardware') }}">Hardware</a>
                            </div>
                        </div>
                    </li>
                @endcan

                {{-- @can('role', ['admin', 'pimpinan'])
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('laporan') }}">
                            <i class="fas fa-fw fa-list"></i>
                            <span>Laporan</span></a>
                    </li>
                @endcan --}}
            </ul>
        @endcan
        {{-- @endcan --}}

        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                {{-- <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3 bg-dark">
                    <i class="fa fa-bars"></i>
                </button> --}}
                {{-- @can('role', ['admin', 'pimpinan']) --}}
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top" style="background-color: #02757e">
                    {{-- @can('role', ['admin', 'pimpinan']) --}}
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    {{-- @endcan --}}
                    {{-- <a class="navbar-brand fw-bold text-light" --}}
                    {{-- href="{{ route('dashboardUser') }}">{{ config('app.name') }}</a> --}}
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto" id="navbarSupportedContent">
                            {{-- <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-1 small"
                                                placeholder="What do you want to look for?" aria-label="Search"
                                                aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li> --}}
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="topbar-divider d-none d-sm-block"></div>
                                @guest('admin')
                                    <li class="nav-item dropdown no-arrow">
                                        <a href="{{ route('admin.login') }}" class="nav-link ">Login</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img class="img-profile rounded-circle" src="{{ url('asset/img/boy.png') }}"
                                                style="max-width: 60px">
                                            <span class="ml-2 d-none d-lg-inline text-white small">Hi.
                                                {{ Auth::user()->nama }}
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <div class="dropdown-divider"></div>

                                            @can('role', 'user')
                                                <a class="dropdown-item" href="/admin/edit/{{ Auth::user()->id }}">
                                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Edit Profile
                                                </a>
                                                <a class="dropdown-item" href="/viewuser/{{ Auth::user()->id }}">
                                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Status Pembelian
                                                </a>
                                                <a class="dropdown-item" href="/keranjang/{{ Auth::user()->id }}">
                                                    <i class="bi bi-box-seam-fill fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Keranjang
                                                </a>
                                                <a class="dropdown-item" href="/pembatalan/{{ Auth::user()->id }}">
                                                    <i class="bi bi-arrow-right fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Status Pembatalan
                                                </a>
                                            @endcan
                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                                data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>
                                @endguest
                        </ul>
                    </div>
                </nav>
                {{-- @endcan --}}
                <!-- Topbar -->

                {{-- modal --}}
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to logout?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-primary">Logout</a>
                                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- modal delete --}}
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Yakin mau delete?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-primary">delete</a>
                                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content-admin')

            </div>
        </div>
        @can('role', ['admin', 'user'])
            <a href="{{ route('chat') }}" class="help-center  d-flex">
                <div class="content-help">
                    <p>Butuh bantuan?</p>
                </div>
                <img src="{{ url('assets/svg/chat icon.svg') }}" alt="">
                {{-- <i class="bi bi-whatsapp"></i> --}}
            </a>
        @endcan

        @extends('admin.layout.footer')
