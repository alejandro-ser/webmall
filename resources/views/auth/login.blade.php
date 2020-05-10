@extends('layouts.front')

@section('content')

<div class="register-area ptb-50">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Login</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
        
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="login-toggle-btn">
                                        <button type="submit" class="default-btn floatright">
                                            {{ __('Login') }}
                                        </button>
                                        @if (Route::has('register'))
                                            <a class="default-btn floatright" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection