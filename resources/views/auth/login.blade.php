@extends('auth/log-master')

@section('konten')
<style>

    .login-logo {
        text-align: center;
    }

    .login-logo img {
        max-width: 100px; /* Sesuaikan ukuran logo sesuai preferensi Anda */
        height: auto;
        margin: 50px; /* Atur jarak sesuai keinginan Anda */
        margin-bottom: 0px;
    }
</style>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5 bg-login">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12 login-logo">
                            <!-- Let's add the logo here with CSS for size adjustment -->
                            <img src="{{ asset('storage/logo') }}/01.jpg" alt="Key_Dhan Pet Clinic Logo" style="max-width: 20%; height: auto;">
                        </div>
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <!-- Change "Welcome Back" to "Selamat Datang di Key_Dhan Pet Clinic" -->
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Key_Dhan Pet Clinic</h1>
                                </div>

                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-12 my-auto">
                                            <input id="email" placeholder="Email/Username" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password" type="password" placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-primary btn-user btn-danger btn-block" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
