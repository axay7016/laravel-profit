@extends('layouts.app')

@section('content')

<style>
    .login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
}.login-box, .register-box {
    width: 360px;
    margin: 7% auto;
}.login-logo, .register-logo {
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300;
}
</style>
<div class="container">
    <div class="login-box">
        <div class="login-logo">
          <a href="{{ route('home') }}"><b>Profit</b>180</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg"> {{__('Verify Your Email Address')}} </p>
          @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-xs-12">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('click here to request another') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        <!-- /.reset-box-body -->
      </div>
</div>
@endsection
