@extends('layouts.app_admin')

@section('content')

    <body style="background: #37517e">
        <div class="wrapper">
            <!-- Preloader -->
            {{-- <div class="preloader flex-column justify-content-center align-items-center" style="background: #37517e">
                <img class="animation__wobble" src="dist/img/LogoUnsulbar.png" alt="AdminLTELogo" height="60" width="60">
            </div> --}}

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
                                <a href="{{ url('login-admin') }}" class="nav-link active ">
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

            {{-- form create daftar Lomba --}}
            <div class="content-wrapper" style="margin-top: 0px;">
                <div class="jumbotron jumbotron-fluid" style="height: auto; background-color: #37517e">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center mt-0 text-white"><b>PENDAFTAR LOMBA</b></h3>
                                {{-- <h5 class="text-white">create</h5> --}}
                                <br>


                                <div class="card border-0 shadow-sm rounded">
                                    <div class="card-body mb-3 mt-3">
                                        <div class="d-flex justify-content-between">

                                            <a href="{{ route('pendaftarLomba.create') }}"
                                                class="btn btn-md btn-primary mb-3">Tambah Data</a>
                                            <div></div>

                                            <div class="input-group w-25">
                                                <input id="searchInput" type="text" class="form-control"
                                                    placeholder="Cari...">
                                                <div class="input-group-append">
                                                    <button id="searchButton" class="btn btn-primary" type="button">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <table id="pendaftarTable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th scope="col">Nama Pendaftar</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Instansi</th>
                                                    <th scope="col">Bukti Pembayaran</th>
                                                    <th scope="col">Status Pendaftar</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @forelse ($pendaftar as $data)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $data->nama_pendaftar }}</td>
                                                        <td>{{ $data->jenis_kelamin }}</td>
                                                        <td>{{ $data->instansi }}</td>
                                                        <td class="text-center">
                                                            <img src="{{ asset('storage/buktiTransfer/' . $data->bukti_pembayaran) }}"
                                                                class="rounded"
                                                                style="width: 100px; height: 100px; object-fit: cover;">
                                                        </td>
                                                        <td>{{ $data->status_pendaftar }}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{ route('pendaftarLomba.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-primary mr-2">
                                                                    <i class="fas fa-edit">edit </i>
                                                                </a>
                                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                                    action="{{ route('pendaftarLomba.destroy', $data->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                                        <i class="fas fa-trash-alt"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        Data pendaftar belum tersedia.
                                                    </div>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
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
    </body>

    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'Berhasil!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'Gagal!');
        @endif

        document.getElementById('searchButton').addEventListener('click', function() {
            var input = document.getElementById('searchInput').value.toLowerCase();
            var table = document.getElementById('pendaftarTable');
            var rows = table.getElementsByTagName('tr');

            for (var i = 0; i < rows.length; i++) {
                var name = rows[i].getElementsByTagName('td')[1];
                if (name) {
                    var textValue = name.textContent || name.innerText;
                    if (textValue.toLowerCase().indexOf(input) > -1) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
        });
    </script>
@endsection
