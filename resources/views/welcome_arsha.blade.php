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

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Category Competition</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('masuk') }}">Sign in</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('daftar') }}">Sign up</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
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
        {{-- <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Category Competition</h2>
                    <p>
                        Category Lomba adalah dari dunia IT, dimana semua lomba akan dilaksanakan berdasarkan bidangnya.
                    </p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/programmer.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info ">
                            <h4>Programmer</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/programmer.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="programmer"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/desain.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Ui/Ux</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/animasi.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Ui/Ux"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/siber.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Cyber Security</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/siber.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="tess"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/datamaining.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Data Maining</h4>
                            <p>Data Maining</p>
                            <a href="{{ asset('storage/datamaining.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/animasi.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Animasi Desain</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/animasi.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Animasi Desain"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/kota_cerdas.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Kota Cerdas</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/kota_cerdas.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Kota Cerdas"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/rpl.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Pengembangan Perangkat Lunak</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/rpl.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Pengembangan Perangkat Lunak"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/animasi.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Karya Tulis Ilmiah Tik</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/animasi.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Karya Tulis Ilmiah Tik"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/sistem_cerdas.png') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Artificial Intelegence</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/sistem_cerdas.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Artificial Intelegence"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/game.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Game Development</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/game.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Game Development"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('storage/bisnis.jpg') }}" class="img-fluid"
                                alt="" style="margin-top: 0em; width: 20rem; height: 12rem;" /></div>
                        <div class="portfolio-info">
                            <h4>Pengambangan Bisnis Tik</h4>
                            <p>Card</p>
                            <a href="{{ asset('storage/bisnis.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Pengambangan Bisnis Tik"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
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
                                    <img src="{{ asset('storage/lomba/' . $lomba->sampul_lomba) }}" class="" alt="logo gemastik"
                                        style="margin-top: 0em; width: auto; height: 12rem;">
                                    <a href="{{ url('masuk') }}">
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
