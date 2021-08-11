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
          <p class="login-box-msg">Reset Password</p>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group has-feedback">
                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
          
             <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary" data-callback="onsubmit">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
             </div>
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>

          </form>
        </div>
        <!-- /.reset-box-body -->
      </div>
</div>
@endsection
