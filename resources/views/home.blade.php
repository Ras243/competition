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
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Category Competition</a></li>
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
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>IT COMPETITION</h1>
                    <h2>Selamat datang di IT Competition, tempat di mana talenta dan inovasi bersatu!
                        Sambutlah kecerdasan, kreativitas, dan semangat juang para pahlawan teknologi! Di sini, kami membuka
                        pintu bagi para penggemar IT, developer, desainer, dan semua yang bersemangat dalam dunia teknologi.
                    </h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=DayClBmZs4s" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row justify-content-center text-center" data-aos="zoom-in">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <figure>
                            <img src="assets/img/clients/LogoUnsulbar.png" class="img-fluid" alt="" />
                            <figcaption><b>UNSULBAR</b></figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <figure>
                            <img src="assets/img/clients/kmft.png" class="img-fluid" alt="" />
                            <figcaption><b>KMFT</b></figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <figure>
                            <img src="assets/img/clients/bem.png" class="img-fluid" alt="" />
                            <figcaption style="margin-top: 15px"><b>BEM</b></figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <figure>
                            <img src="assets/img/clients/himapsi.png" class="img-fluid" alt="" />
                            <figcaption><b>HIMAPSI</b></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cliens Section -->

        <!-- ======= Category Competition ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up">
                    <h2>Category Competition</h2>
                    <p>
                        Category Lomba adalah dari dunia IT, dimana semua lomba akan dilaksanakan berdasarkan bidangnya.
                    </p>
                </div>
                <div class="content-wrapper">
                    <div class="container" style="margin-bottom: 3rem">
                        <div class="row justify-content-center">

                            @php
                                $daftarLomba = App\Models\DaftarLomba::all();
                            @endphp
                            @foreach ($daftarLomba as $lomba)
                                <div class="col-md-3 mt-1 mb-4">
                                    <div data-aos="zoom-in-up" class="card card-bg" style="background-color: #37517e">
                                        <img src="{{ asset('storage/lomba/' . $lomba->sampul_lomba) }}" class=""
                                            alt="logo gemastik" style="margin-top: 0em; width: auto; height: 12rem;">
                                        <a href="{{ url('form_pendaftar') }}">
                                            <div class="card-body">
                                                <p class="card-text text-center bold text-white">{{ $lomba->nama_lomba }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
        </section>
        <!-- End Category Competition -->

    </main>
    <!-- End #main -->

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
