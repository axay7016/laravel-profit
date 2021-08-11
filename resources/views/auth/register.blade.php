@extends('layouts.app')

@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .login-box-body,
        .register-box-body {
            background: #fff;
            padding: 20px;
            border-top: 0;
            color: #666;
        }

        .login-box,
        .register-box {
            width: 400px;
            margin: 7% auto;
        }

        .login-logo,
        .register-logo {
            font-size: 35px;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .checkbox label,
        .radio label {
            padding-left: 33px;
            text-align: initial;
        }
        .invalid-feedback{
            color: red;
        }
        #gcode{
            display: none;
        }
        @media (min-width: 768px){
            .modal-dialog {
                width: 400px;
                text-align: justify;
                margin: 30px auto;
            }
        }
    </style>
    <div class="container">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{route('home')}}"><b>Profit</b>180</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>
                <form method="POST" action="{{ route('register') }}" id="register-form">
                    @csrf
                    <div class="form-group has-feedback">
                        <input id="name" placeholder="Full Name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="password" type="password" placeholder="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="password-confirm" type="password" placeholder="Retype Password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">

                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                   
                     <div class="row">
                        <div class="col-xs-12">
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                                        style="position: relative;">
                                        
                                        <input type="checkbox" name="subscribe"
                                            style="position: absolute; top: -20%; left: -20%;
                                             display: block; width: 30%; margin: 7px -6px; padding: 0px; 
                                             background: rgb(255, 255, 255); border: 0px; opacity: 1;">
                                        <ins class="iCheck-helper"
                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 30%; margin: 7px -6px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;"></ins>
                                    </div>Subscribe to our website for regular updates on new recommendation or updates.
                                </label>
                                <input type="submit" id="gcode" class="g-recaptcha" data-sitekey="6Lf6SF4aAAAAAAkWSsWcBOGxpYXQ_xYcLJQK9FWf" name="submit" data-callback='onSubmit' 
                                data-action='submit'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8" style="text-align:justify;">
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                                        style="position: relative;">
                                        
                                        <input type="checkbox" id="checkbox_show"
                                            style="position: absolute; top: -20%; left: -24%;
                                             display: block; width: 30%; margin: 4px -6px; padding: 0px; 
                                             background: rgb(255, 255, 255); border: 0px; opacity: 1;">
                                        <ins class="iCheck-helper"
                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 30%; margin: 7px -6px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 1;"></ins>
                                    </div><a style="cursor: default;">I agree with Profit180</a> <a data-toggle="modal"
                                        data-target="#exampleModalLong" style="color: #337ab7;">terms and conditions</a>
                                </label>
                                <input type="submit" id="gcode" class="g-recaptcha" data-sitekey="6Lf6SF4aAAAAAAkWSsWcBOGxpYXQ_xYcLJQK9FWf" name="submit" data-callback='onSubmit' 
                                data-action='submit'>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" 
                            class="btn btn-primary btn-block btn-flat"
                            id="submit_btn"
                            
                            
                            disabled>Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                   
                </form>

                <a href="{{ route('tadata') }}" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
       
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> <strong> Risk Disclosure: </strong> Trading in equity stocks involves high risks including the risk of losing some, or
                        all, of your investment amount, and may not be suitable for all investors. Trading on margin
                        increases the financial risks. <br>
                        Before deciding to trade in equity stocks you should be fully informed of the risks and costs
                        associated with trading the financial markets, carefully consider your investment objectives, level
                        of experience, and risk appetite, and seek professional advice where needed.<br>
                        Profit180 would like to remind you that the data contained in this website is not necessarily
                        real-time nor accurate. The data and prices on the website are not necessarily provided by any
                        market or exchange, but may be provided by market makers, and so prices may not be accurate and may
                        differ from the actual price at any given market, meaning prices are indicative and not appropriate
                        for trading purposes. Profit180 and any provider of the data contained in this website will not
                        accept liability for any loss or damage as a result of your trading, or your reliance on the
                        information contained within this website.<br>
                        It is prohibited to use, store, reproduce, display, modify, transmit or distribute the data
                        contained in this website without the explicit prior written permission of Profit180 and/or the data
                        provider. All intellectual property rights are reserved by the providers and/or the exchange
                        providing the data contained in this website.<br>
                        Profit180 may be compensated by the advertisers that appear on the website, based on your
                        interaction with the advertisements or advertisers.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary"  data-dismiss="modal" id="term_accept">Accept</button> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
      
        
        $(function() {

            var checker = document.getElementById('checkbox_show');
            var sendbtn = document.getElementById('submit_btn');
            checker.onchange = function() {
            sendbtn.disabled = !this.checked;
                
            };
            function onSubmit(token) {
            document.getElementById("register-form").submit();
            }
        

        
        //   $("#submit_btn").reattr("disabled", true);
        //   alert("Register");
        });
      </script>
@endsection
