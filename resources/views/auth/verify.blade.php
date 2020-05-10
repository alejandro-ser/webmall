@extends('layouts.front')

@section('content')

<div class="register-area ptb-50">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>{{ __('Verify Your Email Address') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <div class="button-box">
                                <div class="login-toggle-btn">
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="default-btn floatright">{{ __('click here to request another') }}</button>.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
