<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Profit180</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session::has('flash_message'))        
<script type="text/javascript">
  $( document ).ready(function() {
 swal("Ticker Not Found","","error");
});
</script>
@endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/png">
    <!-- style css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=' . time()) }}">
    <style>
        .logout {
            float: left;
            padding: 1px 15px;
            text-decoration: none !important;
        }
        .stock-search-result {
            position: absolute;
            z-index: 999;
            margin-top: -3px;
            background-color: #fff;
            width: 100%;
            max-height: 0;
            overflow: auto;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
            box-shadow: 0 20px 15px 0 rgb(0 0 0 / 9%);
            transition: all .4s;
        }
        .search-result-item.category {
            font-weight: 900;
            background-color: #e0eef9;
            color: #018def;
            cursor: auto;
        }
        .search-result-item {
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            padding: .5em 1em;
            transition: all .3s;
            text-align: left;
        }
      
        .ticker_res{
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            padding: .5em 1em;
            transition: all .3s;
            text-align: left;
        }
        
        .ticker_res:hover{
            background-color:rgb(140, 217, 240)!important;
        }
        a.ticker_name:hover{
            background-color:rgb(140, 217, 240)!important;
            background:rgb(140, 217, 240)!important;
            text-decoration:none!important;
        }
        .res_ticker{
            font-weight: 900;
            width: 22%;
        }
        .container{padding-right: 0px!important;
        padding-left: 0px!important;} 
          @media screen and (max-width: 1023px) {
            .mob_view{
                padding: 13px 17px 2px 17px !important;
                display: flex!important;
            }
            .show {
                display: block;
                text-align: center!important;
                width: -webkit-fill-available!important;
                position: inherit!important;
                margin-top: 0px !important;
            }
            .table_div{overflow-x: auto;}
            .show>.logout{float: unset!important;}
        }
        .container-fluid>.navbar-collapse,.row, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header{
            margin-left: 0px!important;
            margin-right: 0px!important;
        }
       .show {display: block!important;}
       th{cursor: pointer;}
    </style>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ '/' }}">
                <img class="brand_logo" src="{{ asset('/assets/images/logo_profit180.png?v=' . time()) }}" alt=""
                    srcset="">
            </a>
            <div class="input-group rounded search_box mob_view" style="padding-top:8px;">
                        <input type="search" class="form-control rounded"  id="ticker" placeholder="Search Ticker or Company Name"/>
                        {{-- @csrf --}}
                        {{-- <span class="input-group-text border-0" id="search-addon"> --}}
                            {{-- <i class="fa fa-search"></i> --}}
                        {{-- <i class="fa fa-spinner" aria-hidden="true"></i> --}}
                            {{-- </span> --}}
                        
            </div> 
            <div class="mob_view" id="tickerList"  style="text-align: -webkit-center;">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="input-group rounded search_box web_view" style="padding-top:8px;">
                        <input type="search" class="form-control rounded"  id="ticker" placeholder="Search Ticker or Company Name"/>
                        {{-- @csrf --}}
                        {{-- <span class="input-group-text border-0" id="search-addon"> --}}
                            {{-- <i class="fa fa-search"></i> --}}
                        {{-- <i class="fa fa-spinner" aria-hidden="true"></i> --}}
                            {{-- </span> --}}
                        
                    </div> 
                    <div class="web_view" id="tickerList"  style="text-align: -webkit-center;">
                    </div>

                </li>
                <!-- <li><a href="#services">About Us</a></li> -->
                <!--<li><a href="{{ '/tech_analysis' }}">Recommendations</a></li>-->
                <script type="text/javascript">
                    $(document).ready(function(){
                    $(".nav-item").hover(function(){
                        $(this).children(".dropdown-menu").addClass("show");
                            }, function(){
                        $(this).children(".dropdown-menu").removeClass("show");
                    });
                });
                </script>
                <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle recommendation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Recommendations <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: max-content">
                            <a class="dropdown-item logout"  href="{{route('tadata') }}" style=" color:#444444!important;">
                                Current Recommendations
                        </a>
                        <br>
                         <a class="dropdown-item logout" href="{{route('past_tadata')}}" style=" color:#444444!important;">
                                Past Recommendations
                        </a>
                        </div>
                </li>
                {{-- <li><a href="{{ '/newsletter' }}">Newsletter</a></li> --}}
                <li><a href="{{ '/useful_links' }}">Useful links</a></li>
                <!-- <li><a href="#Subscription">Subscription</a></li> -->
                <li><a href="{{ '/contact_us' }}">Talk to us</a>
                </li>
                
                <!-- Authenticdddddation Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" title="Login">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> --}}
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                                style=" color:#444444!important;">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none; color:#444444;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function(){
       // $.ajaxSetup({
        //    headers: {
         //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //    }
       // });
       $(function(){
        $('#ticker').val('');
        $('#ticker').keyup(function(){ 
                var query = $(this).val();
                //console.log("ff");
                if(query != '')
                {
                var _token = $('input[name="_token"]').val();

                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                
                data:{query:query, _token:_token},
                //headers: {
               //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               // },
                success:function(data){
                    $('#tickerList').fadeIn();  
                    $('#tickerList').html(data);
                    sessionStorage.clear();
                }
                });
                }
        });
       });
        $(document).on('click', '#tickerList', function(){  
            $('#ticker').val($(this).text());  //to select current value of list
            $('#tickerList').fadeOut();  
            
            var updateChart = function() {
                var query = $('#ticker').val();
                $('#ticker').val('Ticker Loading...');
                //var splittedSource = query.replace(/\s{2,}/g, ' ').split(' ');
                //console.log(splittedSource[0]);
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url: "{{ route('api.chart') }}",
                type: 'GET',
                dataType: 'json',
                data:{query:query, _token:_token},
              //  headers: {
                 //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               // },
                success: function(data) {
                    $('.myCharthide').removeClass('hide');
                    //console.log(data);
                    window.location.href = data.redirecturl;

                },
                error: function(data){
                    console.log(data);
                }
                });
            }
            
            updateChart();
        });  
        
    
    });

    $(document).ready(function() {
        if($(window).width() >= 524) {
            $('.mob_view').remove();
            $('.web_view').show()
        }
        if($(window).width() < 900) {
            $('.mob_view').show();
            $('.web_view').remove()
        }
    });

</script>