@extends('layouts.app_admin')

@section('title')
Admin Competition | Dashboard
@endsection

@section('content')
    {{-- ADMIN --}}
    @if (Auth::user()->role == 'admin')
        <div class="wrapper">

            <!-- Preloader -->
            {{-- <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="dist/img/LogoUnsulbar.png" alt="AdminLTELogo" height="60"
                    width="60">
            </div> --}}

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand" style="background-color: #6096B4">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars text-white"></i><span style="color: white; margin-left: 5px">Sistem IT Competition Unsulbar</span></a>
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
                                <a href="{{ url('pendaftar') }}" class="nav-link">
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
                <div class="jumbotron jumbotron-fluid" style="height: 450px; background-color: #a6bdca">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="display-4"
                                    style="font-family: 'Roboto', sans-serif;font-size: 60pt; color: #ffffff;">
                                    <b>IT COMPETITION</b>
                                </h1>
                                <p class="lead"><b>
                                    Selamat datang di IT Competition, tempat di mana talenta dan inovasi bersatu!
                                Sambutlah kecerdasan, kreativitas, dan semangat juang para pahlawan teknologi! Di sini, kami membuka pintu bagi para penggemar IT, developer, desainer, dan semua yang bersemangat dalam dunia teknologi.
                                <br><br>
                                Bersiaplah mengembangkan solusi terobosan, menciptakan karya unik, dan mengubah dunia digital.
                                Selamat bergabung di IT Competition, tempat impianmu menjadi kenyataan. Mari berlomba, bersaing, dan menaklukkan dunia teknologi bersama-sama.
                                    </b></p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('storage/gemastik.png') }}"class="img-fluid" alt="logo gemastik"
                                    style="margin-top: -60px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="display-4 text-primary mb-5"
                                style="font-family: 'Roboto', sans-serif;font-size: 40pt">
                                <b style="border-bottom: 3px solid#2e739b; color: #2e739b">CATEGORY COMPETITION</b>
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Content Header (Page header) -->
                <div class="container-fluid" style="margin-bottom: 3rem">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/programmer.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">PROGRAMMER</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/siber.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">KEAMANAN SIBER</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/datamaining.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">PENAMBANGAN DATA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/desain.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">DESAIN PENGALAMAN PENGGUNA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/animasi.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">ANIMASI</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/kota_cerdas.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">KOTA CERDAS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/rpl.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">PENGEMBANGAN PERANGKAT LUNAK</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/karya_tulis.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">KARYA TULIS ILMIAH TIK</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/sistem_cerdas.png  ') }}" class=""
                                    alt="logo gemastik" style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">PIRANTI CERDAS, SISTEM BENAM & IOT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/programmer.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">GAME DEVELOPMENT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                                <img src="{{ asset('storage/bisnis.jpg') }}" class="" alt="logo gemastik"
                                    style="margin-top: 0em; width: auto; height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-center bold">PENGEMBANGAN BISNIS TIK</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- /.content-wrapper -->

                <!-- Main Footer -->
                {{-- <div class="jumbotron jumbotron-fluid fixed-bottom">
                    <div class="container">
                      <h1 class="display-4">Fluid jumbotron</h1>
                      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                  </div> --}}
                <footer class="main-footer">
                    <strong>Copyright &copy; 2023 <a href="#">KELOMPOK2</a>.</strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 3.2.0
                    </div>
                </footer>
            </div>
        </div>
        
    
    {{-- USER --}}
    @else
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/LogoUnsulbar.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background-color: #6096B4">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars text-white"></i><span style="color: white; margin-left: 5px">Sistem IT Competition Unsulbar</span></a>
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
                <span class="brand-text font-weight-light"><b>IT Competition</b></span>
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
                            <a href="{{ url('logout') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{ url('logout') }}" class="nav-link">
                                <!-- Icon untuk daftar -->
                                <i class="nav-icon fas fa-money-check-alt"></i>
                                <p>
                                    Payment
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
            <div class="jumbotron jumbotron-fluid" style="height: 450px; background-color: #a6bdca">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="display-4"
                                style="font-family: 'Roboto', sans-serif;font-size: 60pt; color: #ffffff;">
                                <b>IT COMPETITION</b>
                            </h1>
                            <p class="lead"><b>
                                Selamat datang di IT Competition, tempat di mana talenta dan inovasi bersatu!
                                Sambutlah kecerdasan, kreativitas, dan semangat juang para pahlawan teknologi! Di sini, kami membuka pintu bagi para penggemar IT, developer, desainer, dan semua yang bersemangat dalam dunia teknologi.
                                <br><br>
                                Bersiaplah mengembangkan solusi terobosan, menciptakan karya unik, dan mengubah dunia digital.
                                Selamat bergabung di IT Competition, tempat impianmu menjadi kenyataan. Mari berlomba, bersaing, dan menaklukkan dunia teknologi bersama-sama.
                                </b></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/gemastik.png') }}"class="img-fluid" alt="logo gemastik"
                                style="margin-top: -60px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-4 text-primary mb-5"
                            style="font-family: 'Roboto', sans-serif;font-size: 40pt">
                            <b style="border-bottom: 3px solid#2e739b; color: #2e739b">CATEGORY COMPETITION</b>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Content Header (Page header) -->
            <div class="container-fluid" style="margin-bottom: 3rem">
                <div class="row justify-content-center">
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/programmer.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">PROGRAMMER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/siber.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">KEAMANAN SIBER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/datamaining.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">PENAMBANGAN DATA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/desain.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">DESAIN PENGALAMAN PENGGUNA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/animasi.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">ANIMASI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/kota_cerdas.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">KOTA CERDAS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/rpl.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">PENGEMBANGAN PERANGKAT LUNAK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/karya_tulis.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">KARYA TULIS ILMIAH TIK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/sistem_cerdas.png  ') }}" class=""
                                alt="logo gemastik" style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">PIRANTI CERDAS, SISTEM BENAM & IOT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/programmer.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">GAME DEVELOPMENT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 mb-1">
                        <div data-aos="zoom-in-up" class="card" style="background-color: #a6bdca">
                            <img src="{{ asset('storage/bisnis.jpg') }}" class="" alt="logo gemastik"
                                style="margin-top: 0em; width: auto; height: 12rem;">
                            <div class="card-body">
                                <p class="card-text text-center bold">PENGEMBANGAN BISNIS TIK</p>
                            </div>
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
    @endif
@endsection
