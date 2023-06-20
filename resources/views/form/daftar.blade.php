@extends('layouts.app_form')

@section('title')
    IT COMPETITION | Registration Page
@endsection

@section('content_form')
    <div class="jumbotron jumbotron-fluid" style="background: #37517e">
        <div class="text-center">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/gemastik.png') }}"class="img-fluid margin-top moving-image"
                        alt="logo gemastik">
                </div>
                <div class="col-md-6">
                    <div class="register-box">
                        <div class="card">
                            {{-- <div class="card-body register-card-body"> --}}
                            <div class="card-body login-card-body"
                                style="background: #37517e; border: 1px solid white; box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.3);">
                                <p class="login-box-msg text-white">Register a new membership</p>

                                <form action="{{ url('registrasi') }}" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Full name" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock text-white"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="tgl_lahir" class="form-control"
                                            placeholder="(dd/mm/yyyy)" id="birthdate-input" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-calendar text-white"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        // Menampilkan kalender saat input di-klik
                                        document.getElementById("birthdate-input").addEventListener("click", function() {
                                            this.type = "date";
                                        });

                                        // Mengubah kembali tipe input menjadi teks saat kehilangan fokus (blur)
                                        document.getElementById("birthdate-input").addEventListener("blur", function() {
                                            this.type = "text";
                                        });
                                    </script>

                                    <div class="input-group mb-3">
                                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" style="background-color: transparent; color: white;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-marker-alt text-white"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary text-white">
                                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                                <label for="agreeTerms">
                                                    I agree to the <a href="#" class="text-white">terms</a>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="user">
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                <div class="social-auth-links text-center text-white">
                                    <p>- OR -</p>
                                    {{-- <a href="#" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i>
                                        Sign up using Facebook
                                    </a> --}}
                                    <a href="#" class="btn btn-block btn-danger">
                                        <i class="fab fa-google-plus mr-2 text-white"></i>
                                        Sign up using Google+
                                    </a>
                                </div>

                                <a href="{{ url('masuk') }}" class="text-center text-white">I already have a membership</a>
                            </div>
                            <!-- /.form-box -->
                        </div><!-- /.card -->
                    </div>
                    <!-- /.register-box -->
                </div>
            </div>
        </div>
    </div>
@endsection
