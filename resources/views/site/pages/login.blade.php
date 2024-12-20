@extends('site.master')

@section('title', 'Login')

@section('sub_page', 'Login')

@section('content')

    @include('site.layouts.breadcrumb_inside')
    <section class="registerForm loginForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto">
                    <h2>
                        LogIn
                    </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-12">{{ __('Email Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-12">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="loginLink text-center">
                            @if (Route::has('password.request'))
                                <a class="text-uppercase" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div> --}}
                        <button type="submit" class="registerBtn btn text-uppercase">
                            {{ __('Login') }}
                        </button>
                        <div class="loginLink text-center">
                            <a href="{{ route('register') }}" class="text-uppercase">
                                Or creat an account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
