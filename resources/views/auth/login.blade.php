@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-wrapper">
        <div class="login-card">
            <h1 class="login-title">Firman</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Log In') }}
                    </button>
                </div>

                <div class="form-group text-center">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
        <div class="login-footer">
            <span>Don't have an account? <a href="{{ route('register') }}">Sign up</a></span>
        </div>
    </div>
</div>
@endsection
