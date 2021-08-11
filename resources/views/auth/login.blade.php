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
          <p class="login-box-msg">Don't have a login yet, Sign up free for <span style="font-weight:600; color:green; text-decoration:underline;">45 days</span>  before you decide.</p>
      
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
           
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label>
                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%;     margin: 7px -5px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                        <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%;    margin: 7px -5px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
        @endif
        </div>
        <!-- /.login-box-body -->
      </div>
</div>
@endsection
