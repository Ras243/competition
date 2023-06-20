@extends('layouts.app_admin')

@section('title')
    Admin Competition | Dashboard
@endsection

@section('content')
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center" style="background: #37517e">
            <img class="animation__wobble" src="dist/img/LogoUnsulbar.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background-color: #37517e">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars text-white"></i><span style="color: white; margin-left: 5px">Sistem IT
                            Competition Unsulbar</span></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/LogoUnsulbar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Admin Competition</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                        <li class="nav-header">BERANDA</li>
                        <li class="nav-item menu-open mb-3">
                            <a href="#" class="nav-link active ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MENU</li>
                        <li class="nav-item menu-open">
                            <a href="{{ url('pendaftar_lomba') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    Pendaftar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{ url('peserta') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Peserta
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{ url('daftar_lomba') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-trophy"></i>
                                <p>
                                    Daftar Lomba
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{ url('logout') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    LogOut
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="jumbotron jumbotron-fluid" style="height: 550px; background-color: #dadada">
                <div class="container text-center">
                    <div class="row mt-5">
                        <div class="col-md-8 mt-5">
                            <h1 class="display-4"
                                style="font-family: 'Roboto', sans-serif;font-size: 60pt; color: #37517e;">
                                <b>ADMIN</b><br>
                                <b>IT COMPETITION</b>
                            </h1>
                        </div>
                        <div class="col-md-4 mt-5">
                            <img src="{{ asset('storage/gemastik.png') }}"class="img-fluid" alt="logo gemastik"
                                style="margin-top: -60px">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2023 <a href="#">KELOMPOK2</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
                </div>
            </footer>
        </div>
    </div>
@endsection
