@extends('layouts.app_form')

@section('title')
    IT COMPETITION | Log In Page
@endsection

@section('content_form')
<div class="jumbotron jumbotron-fluid" style="background: #37517e">
    <div class="text-center">
        <div class="row">
            <div class= "col-md-6">
                <img src="{{ asset('storage/gemastik.png') }}" class="img-fluid moving-image" alt="logo gemastik">
            </div>
            <div class="col-md-6" >
                <div class="login-box">
                    <!-- /.login-logo -->
                    <div class="card">
                        {{-- <div class="card-body register-card-body"> --}}
                        <div class="card-body login-card-body" style="background: #37517e; border: 1px solid white; box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.3);">
                            <p class="login-box-msg text-white">Sign in to start your session</p>

                            <form action="{{ url('validasiLogin') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" style="background-color: transparent; color: white;">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope text-white"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password" style="background-color: transparent; color: white;">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock text-white"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember">
                                            <label for="remember" class="text-white">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block text-white">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <div class="social-auth-links text-center mb-3 text-white">
                                <p>- OR -</p>
                                {{-- <a href="#" class="btn btn-block btn-primary">
                                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                                </a> --}}
                                <a href="#" class="btn btn-block btn-danger">
                                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                                </a>
                            </div>
                            <!-- /.social-auth-links -->

                            <p class="mb-1">
                                <a href="forgot-password.html" class="text-white">I forgot my password</a>
                            </p>
                            <p class="mb-0">
                                <a href="{{ url('daftar') }}" class="text-center text-white">Register a new membership</a>
                            </p>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
                <!-- /.login-box -->
            </div>
        </div>
    </div>
</div>
@endsection

