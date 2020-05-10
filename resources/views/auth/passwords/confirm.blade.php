@extends('layouts.front')

@section('content')
<div class="register-area ptb-50">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>{{ __('Confirm Password') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            {{ __('Please confirm your password before continuing.') }}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <button type="submit" class="default-btn floatright">
                                            {{ __('Confirm Password') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
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
