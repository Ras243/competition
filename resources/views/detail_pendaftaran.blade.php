@extends('layouts.app_welc')

@section('title')
    IT Competition | Unsulbar
@endsection

@section('content_welc')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h2 class="logo me-auto">
                <a href="index.html">
                    <img src="{{ asset('storage/') }}" alt="" class="logo-image">
                    Informatika
                </a>
            </h2>

            <!-- navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Category Competition</a></li>
                    <li><a class="nav-link scrollto active" href="{{ url('detail_pendaftaran') }}">Detail Pendaftarn</a>
                    </li>
                    <li><a class="nav-link scrollto" href="https://informatika.unsulbar.ac.id/">Unsulbar</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <i class="nav-icon fas fa-user mr-1"></i>
                                <span class="ml-1">Profil</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="d-flex flex-column align-items-center profil-picture-container container">
                                    <img src="{{ asset('storage/LogoUnsulbar.png') }}" alt="Profile Picture"
                                        class="profile-picture rounded-circle"
                                        style="max-width: 35px; height: auto; background-color: rgb(9, 58, 132)">
                                    <h6>{{ Auth::user()->name }}</h6>
                                    {{-- <h6>{{ $user->name }}</h6> --}}
                                    <a href="{{ url('logout') }}" class="logout-button"><i
                                            class="nav-icon fas fa-sign-out-alt"></i>Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>


            <!-- end navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 ">
                    <div class="card">
                        <card class="body">
                            <h3>Detail Lomba Yang Didaftar</h3>
                            @if ($pendaftaran->bukti_pembayaran != null || $pendaftaran->bukti_pembayaran != '')
                                <img src="{{ asset('storage/buktiTransfer/' . $pendaftaran->bukti_pembayaran) }}"
                                    class="form-control" alt="">
                                <p>{{ $pendaftaran->status }}</p>
                            @else
                                <form action="{{ route('pendaftarLomba.update', $pendaftaran->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="file" name="bukti_pembayaran" id="">
                                    <button type="submit" class="btn btn-primary">upload</button>
                                </form>
                            @endif
                        </card>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Informatika Unsulbar</h3>
                        <p>
                            Fakultas Teknik <br />
                            Jalan Prof. Dr. Baharuddin Lopa, S.H, Talumung, Kabupaten Majene, Sulawesi Barat 91412
                            <br /><br />
                            <strong>Phone:</strong> +62 821 9469 2885<br />
                            <strong>Email:</strong> informatika@unsulbar.ac.id<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 2</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Rascoding</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
