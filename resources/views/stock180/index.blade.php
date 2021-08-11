@include('stock180.header')
<link rel="stylesheet" href="assets/css/marquee.css" />
<link rel="stylesheet" href="assets/css/example.css" />
<style>
   .content-blog {
    display: inline-block;
}
#tooltip {
  position: relative;
  display: inline-block;
}

#tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  margin-left:5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

#tooltip:hover .tooltiptext {
  visibility: visible;
}
.col-md-6 {
    padding-top: 12px;
}
table {
    border: 1px solid #bababa !important;
    table-layout: fixed;
    width: 285px;
    
}
tr{border-bottom: 1px solid #bababa !important;}
td,th{border-right-style: inherit;border-left-style:inherit;border-top-style: inherit; }
a:focus, a:hover {
    text-decoration: unset;
}
    .hide{
        display: none;
    }
            .modal-newsletter { 
            color: #999;
            width: 625px;
            max-width: 625px;
            font-size: 15px;
        }
        .modal-newsletter .modal-content {
            padding: 30px;
            border-radius: 0;       
            margin-top: 125px;
            border: none;
        }
        .modal-newsletter .modal-header {
            border-bottom: none;   
            position: relative;
            border-radius: 0;
        }
        .modal-newsletter h4 {
            color: #000;
            font-size: 30px;
            margin: 0;
            font-weight: bold;
        }
        .modal-newsletter .close {
            position: absolute;
            top: -15px;
            right: -15px;
            text-shadow: none;
            opacity: 0.3;
            font-size: 24px;
        }
        .modal-newsletter .close:hover {
            opacity: 0.8;
        }
        .modal-newsletter .icon-box {
            color: #7265ea;     
            display: inline-block;
            z-index: 9;
            text-align: center;
            position: relative;
            margin-bottom: 10px;
        }
        .modal-newsletter .icon-box i {
            font-size: 110px;
        }
        .modal-newsletter .form-control, .modal-newsletter .btn {
            min-height: 46px;
            border-radius: 0;
        }
        .modal-newsletter .form-control {
            box-shadow: none;
            border-color: #dbdbdb;
        }
        .modal-newsletter .form-control:focus {
            border-color: #f95858;
            box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
        }
        .modal-newsletter .btn {
            color: #fff;
            background: #f95858;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            padding: 6px 20px;
            min-width: 150px;
            margin-left: 6px !important;
            border: none;
        }
        .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
            box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
            background: #f72222;
            outline: none;
        }
        .modal-newsletter .input-group {
            margin-top: 30px;
        }
        .hint-text {
            margin: 100px auto;
            text-align: center;
        }
        .input-group {
            /* position: relative; */
            display: flex;
        }
        .content-masonry .card {
            margin: 15px 0;
            width: 100%;
            border-radius: 0;
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }
        .content-masonry .card img {
            padding: 15px;
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
        }
        .content-masonry .card .card-body {
            text-align: center;
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding-top: 0;
            position: relative;
            z-index: 1;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }.content-masonry .card .card-body h5 {
            position: relative;
            height: 100px;
            margin-bottom: 40px;
        }
        .card-title {
            margin-bottom: .75rem;
        }.content-masonry .card .card-body h5 a {
            margin: 0;
            font-size: 19px;
            font-weight: 600;
            color: #666666;
        }
        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }.content-masonry .card .card-body p {
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 20px;
            font-size: 15px;
            color: #666666;
        }
        .card-text:last-child {
            margin-bottom: 0;
        }.content-masonry .card .card-body {
            text-align: center;
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding-top: 0;
            position: relative;
            z-index: 1;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }.content-masonry .card .card-body span {
            padding: 0 30px;
            border-right: 0px solid #e6e6e6;
            font-size: 15px;
            color: #666666;
            z-index: 1;
        }
        #crypto {display: none;}
        #commodities,.mostactive_mob,.loser_mob,.gainer_mob,.mob_title{display: none;}
        #main_title{display:flex;justify-content: space-between;width: 106%;}

        h5>span{color: #007bff;cursor: pointer;}
        @media screen and (max-width: 600px) {
            .mob_view{
                display: none;
            }
            .modal-newsletter {
                    color: #999;
                    width: auto;
            }
            .img-responsive{
                width: 100%;
            }
        }
        @media screen and (max-width: 1023px) {
    .content-blog { display: flex; flex-flow: column; }
    .desktop{display: none;}
    .gainer_mob{display: table;}
    tbody>tr:nth-child(n+8){display:none;}
    .mob_title{display: flex;justify-content: space-between;}
    .two { order: 1; margin-top: 40px;}
    .one { order: 2; margin-top: 25px;}
    table{width: -webkit-fill-available;}
    #main_title{width: 99%;}
}
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    {{-- <div class="jumbotron text-center">
        <h1>Profit180</h1>
        <p style="text-align: center;">YOUR LIFE BOAT THAT KEEPS YOU SAFE & FLOATED IN YOUR STOCK MARKET JOURNEY</p>
    </div> --}}
    <div class="content">
        <div class="simple-marquee-container">
            <div class="marquee">
                <ul class="marquee-content-items">
                    @foreach ($tadata as $key => $data)
                        <li>{{ $data->Ticker }} : ${{ $data->CurrentPrice }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/marquee.js?v='.time())}}"></script>
    {{--  popup script for first time users  --}}
    <script>
        $(function() {
            $('.simple-marquee-container').SimpleMarquee();
        });
        $(window).on('load', function() {
            var isshow = localStorage.getItem('isshow');
            if (isshow== null) {
                localStorage.setItem('isshow', 1);

                // Show popup here
                $('#myModal').removeClass('fade');
            }
            else {
                $('#myModal').attr('style', 'display: none !important');
            }
        });
        var currentRequest = null;
            //refresh stock every 5 second
            var stockdata = function() {
                currentRequest= $.ajax({
                url: "{{ route('getstock') }}",
                beforeSend: function() {
                    if (currentRequest != null) {
                        currentRequest.abort();
                    }
                },
                type: 'GET',
                success: function(data) {
                    var a = JSON.parse(data);
                    $("#gainer> tbody").html(a.gainer);
                    $("#loser> tbody").html(a.loser);
                    $("#mostactive> tbody").html(a.active);
                    $("#commodities> tbody").html(a.commodites);
                    $("#crypto> tbody").html(a.crypto);
                    $("#major-index> tbody").html(a.m_index);
                },
                error: function(data){
                    console.log(data);
                }
                });
            }
            window.setInterval(function(){
                stockdata();
                }, 50000);
    
       function top_gainer_loser(id)
       {
        if(id==1){
            $("#major-index").css("display", "none");
            $("#crypto").css("display", "none");
            $("#commodities").css("display", "table");
        }else if(id==2){
            $("#major-index").css("display", "none");
            $("#crypto").css("display", "table");
            $("#commodities").css("display", "none");
        }else{
            $("#major-index").css("display", "table");
            $("#crypto").css("display", "none");
            $("#commodities").css("display", "none");
        }
        stockdata();
       }
       function mobile_view(id)
       {
        if(id==1){
            $(".loser_mob").css("display", "none");
            $(".mostactive_mob").css("display", "none");
            $(".gainer_mob").css("display", "table");
        }else if(id==2){
            $(".gainer_mob").css("display", "none");
            $(".loser_mob").css("display", "table");
            $(".mostactive_mob").css("display", "none");
        }else{
            $(".mostactive_mob").css("display", "table");
            $(".gainer_mob").css("display", "none");
            $(".loser_mob").css("display", "none");
        }
        stockdata();
       }
    </script>
    <!-- Container (home Section) -->
    <div class="container" style="padding-top:40px;">
        <div class="row content-blog">
                <div class="col-md-9 col-sm-12 one" style="margin-top: 15px;">
                    <div class="content-blog-center">
                        <div class="blog">
                            <div class="item-blog">
                                <img class="img-responsive" src="{{  $json[0]['image'] }}" width="100%" height="530px"alt="">
                                {{-- <a href=""><i class="far fa-heart"></i></a>
                                &nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp;  --}}
                                <span style="float:right;">
                                <i style="flot:right;" class="fa fa-calendar-alt"></i> &nbsp;{{date('d-M-Y g:i A', strtotime($json[0]['publishedDate']))}}
                                
                                </span>
                                <h2 style="padding-top: 10px;"><a href="{{ $json[0]['url'] }}" target="_blank">{{ $json[0]['title'] }}</a></h2>
                                <p style="display:block;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-align:center;
                                            text-overflow: ellipsis;
                                            max-width: 130ch;">
                                    {{ $json[0]['text']}}
                                </p>
                                {{-- <button class="btn float-left">READ MORE</button>
                                <div class="float-right">
                                    <table>
                                        <tbody><tr>
                                            <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                            <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                            <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                        </tr>
                                    </tbody></table>
                                </div> --}}
        
                            </div>
                        </div>
                        {{-- <div class="blog">
                            <div class="item-blog">
                                <img src="https://via.placeholder.com/870x530.jpg" alt="" style="margin-top: 50px;">
                                <a href=""><i class="far fa-heart"></i></a>&nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp; <i class="far fa-calendar-alt"></i> &nbsp; April 12, 2019
                                <h2>Temporibus autem quib</h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                    cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                    id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                </p>
                                <button class="btn float-left">READ MORE</button>
                                <div class="float-right">
                                    <table>
                                        <tbody><tr>
                                            <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                            <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                            <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                        </tr>
                                    </tbody></table>
                                </div>
        
                            </div>
                        </div>
                        <div class="item-blog" style="border: none;">
                            <img src="https://via.placeholder.com/870x530.jpg" alt="" style="margin-top: 50px;">
                            <a href=""><i class="far fa-heart"></i></a>&nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp; <i class="far fa-calendar-alt"></i> &nbsp; April 12, 2019
                            <h2>Temporibus autem quib</h2>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            </p>
                            <button class="btn float-left">READ MORE</button>
                            <div class="float-right">
                                <table>
                                    <tbody><tr>
                                        <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                        <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                        <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                    </tr>
                                </tbody></table>
                            </div>
        
                        </div>
        
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"> &gt; </a></li>
                        </ul> --}}
                    </div>
        <div class="content-masonry">
                    @foreach ($json as $key => $newsdata)
                    @if($key!==0)
                        <div class="feed">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="{{$newsdata['image']}}" width="335px" height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" ><a href="{{ $newsdata['url'] }}" target="_blank">{{ $newsdata['title'] }}</a></h5>
                                        <p class="card-text" style="display:block;
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 130ch;">{{$newsdata['text']}}</p>
                                    </div>
                                    <div class="card-body">
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i>{{date('d-M-Y g:i A', strtotime($newsdata['publishedDate']))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
                </div>
                <div class="col-md-3 col-sm-12 two">
                    <h5 id="main_title"><span  onclick="top_gainer_loser(3);">Major Index</span>
                                        <span  onclick="top_gainer_loser(1);">Commodites</span>
                                        <span onclick="top_gainer_loser(2);">Crypto</span></h5>
                                        <table id="commodities">
                                        <!--<thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>-->
                                            <tbody>
                                                @foreach($commodities as $data)
                                                @php
                                                $chanegpr = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                                                if($chanegpr > 0){
                                                    $commodities_color = "green";
                                                }elseif($chanegpr == 0){
                                                    $commodities_color = "black";
                                                }else{
                                                    $commodities_color = "red";
                                                }
                                                @endphp
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="#">{{$data->symbol}}</a><span class="tooltiptext">{{$data->name}}</span></td>
                                                    <td class="iyjjgb" style="color:{{$commodities_color}};">{{number_format($data->price,2)}}</td>
                                                    <td class="JgXcPd" style="color:{{$commodities_color}};">{{number_format($data->change,2)}}</td>
                                                    <td class="iyjjgb" style="color:{{$commodities_color}};">{{number_format(str_replace(array('(',')'),"",$data->changesPercentage),2)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table id='crypto'>
                                        <!--<thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>-->
                                            <tbody>
                                                @foreach($crypto as $data)
                                                @php
                                                $chanegpr_crypto = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                                                if($chanegpr_crypto > 0){
                                                    $crypto_color = "green";
                                                }elseif($chanegpr_crypto == 0){
                                                    $crypto_color = "black";
                                                }else{
                                                    $crypto_color = "red";
                                                }
                                                @endphp
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="#">{{$data->symbol}}</a><span class="tooltiptext">{{$data->name}}</span></td>
                                                    <td class="iyjjgb" style="color:{{$crypto_color}};">{{number_format($data->price,2)}}</td>
                                                    <td class="JgXcPd" style="color:{{$crypto_color}};">{{number_format($data->change,2)}}</td>
                                                    <td class="iyjjgb" style="color:{{$crypto_color}};">{{number_format(str_replace(array('(',')'),"",$data->changesPercentage),2)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table id="major-index">
                                        <!--<thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>-->
                                            <tbody>
                                                @foreach($major_index as $data)
                                                @php
                                                $major_index = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                                                if($major_index > 0){
                                                    $index_color = "green";
                                                }elseif($major_index == 0){
                                                    $index_color = "black";
                                                }else{
                                                    $index_color = "red";
                                                }
                                                @endphp
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="#" >{{substr($data->name,0,10)}}..</a><span class="tooltiptext">{{$data->name}}</span></td>
                                                    <td class="iyjjgb" style="color:{{$index_color}};width: 70px;">{{number_format($data->price,2)}}</td>
                                                    <td class="JgXcPd" style="color:{{$index_color}};width: 50px;">{{number_format($data->change,2)}}</td>
                                                    <td class="iyjjgb" style="color:{{$index_color}};width: 50px;">{{number_format(str_replace(array('(',')'),"",$data->changesPercentage),2)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                         <h5 class="mob_title" style="margin-top:20px;"><span  onclick="mobile_view(1);"> TOP GAINERS </span>
                                        <span onclick="mobile_view(2);">TOP LOSERS</span>
                                        <span onclick="mobile_view(3);">MOST ACTIVE</span></h5>
                                        <table id="gainer" class="gainer_mob">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($gainer as $data)
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    <td class="iyjjgb" style="color:green;">{{$data->price}}</td>
                                                    <td class="JgXcPd" style="color:green;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:green;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table id="loser" class="loser_mob">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($loser as $data)
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    <td class="iyjjgb" style="color:red;">{{$data->price}}</td>
                                                    <td class="JgXcPd" style="color:red;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:red;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table id="mostactive" class="mostactive_mob">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($active as $data)
                                                <tr>
                                                @php
                                                    $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                                                    @endphp
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    @if($chaneg > 0)
                                                    <td class="iyjjgb" style="color:green;">{{$data->price}}</td>
                                                    @elseif($chaneg == 0)
                                                    <td class="iyjjgb" style="color:black;">{{$data->price}}</td>
                                                    @else
                                                    <td class="iyjjgb" style="color:red;">{{$data->price}}</td>
                                                    @endif
                                                    @if($chaneg > 0)
                                                    <td class="JgXcPd" style="color:green;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:green;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @elseif($chaneg == 0)
                                                    <td class="JgXcPd" style="color:black;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:black;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @else
                                                    <td class="JgXcPd" style="color:red;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:red;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <h5 style="margin-top:25px" class="desktop">TOP GAINERS</h5>
                                        <table id="gainer" class="desktop">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($gainer as $data)
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    <td class="iyjjgb" style="color:green;">{{$data->price}}</td>
                                                    <td class="JgXcPd" style="color:green;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:green;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <h5 style="margin-top:25px" class="desktop">TOP LOSERS</h5>
                                        <table id="loser" class="desktop">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($loser as $data)
                                                <tr>
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    <td class="iyjjgb" style="color:red;">{{$data->price}}</td>
                                                    <td class="JgXcPd" style="color:red;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:red;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <h5 style="margin-top:25px" class="desktop">MOST ACTIVE</h5>
                                        <table id="mostactive" class="desktop">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($active as $data)
                                                <tr>
                                                @php
                                                    $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                                                    @endphp
                                                    <td class="JgXcPd" id="tooltip"><a href="{{ URL::to('api/chart?ticker=')}}{{$data->ticker}}">{{$data->ticker}}</a><span class="tooltiptext">{{$data->companyName}}</span></td>
                                                    @if($chaneg > 0)
                                                    <td class="iyjjgb" style="color:green;">{{$data->price}}</td>
                                                    @elseif($chaneg == 0)
                                                    <td class="iyjjgb" style="color:black;">{{$data->price}}</td>
                                                    @else
                                                    <td class="iyjjgb" style="color:red;">{{$data->price}}</td>
                                                    @endif
                                                    @if($chaneg > 0)
                                                    <td class="JgXcPd" style="color:green;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:green;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @elseif($chaneg == 0)
                                                    <td class="JgXcPd" style="color:black;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:black;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @else
                                                    <td class="JgXcPd" style="color:red;">{{$data->changes}}</td>
                                                    <td class="iyjjgb" style="color:red;">{{str_replace(array('(',')'),"",$data->changesPercentage)}}</td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <h5>Most Recent Quotes</h5>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">Machine Id</th>
                                                <th style="width: 50px;">User Id</th>
                                                <th style="width: 70px;">Ticker</th>
                                                <th>Quote Date</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($recent_quotes as $data)
                                                <tr>
                                                <td class="JgXcPd" id="tooltip">{{substr($data->machine_id,0,5)}}<span class="tooltiptext">{{$data->machine_id}}</span></td>
                                                <td>{{$data->user_id}}</td>
                                                <td>{{$data->ticker}}</td>
                                                <td >{{substr($data->quote_date,0,11)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if($user_id != '')
                                        <h5>Client Portfolio</h5>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 40px;">User Id</th>
                                                <th style="width: 60px;">Ticker</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($client_data as $data)
                                                <tr>
                                                <td >{{$data->user_id}}</td>
                                                <td>{{$data->ticker}}</td>
                                                <td >{{substr($data->created_at,0,11)}}</td>
                                                <td >{{substr($data->updated_at,0,11)}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @endif
                   </div>
            {{-- <div class="col-md-3 mob_view">
                <div class="content-blog-right">
                    <div class="blog">
                        <div class="item-blog">
                            <img class="img-responsive" src="{{  $json[0]['image'] }}" width="870px" height="530px"alt="">
                            <a href=""><i class="far fa-heart"></i></a>
                            &nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp; 
                            <i class="fas fas-calendar-alt"></i> &nbsp; April 12, 2019
                            <h2>{{ $json[0]['title'] }}</h2>
                            <p>
                                {{ $json[0]['text']}}
                            </p>
                            <button class="btn float-left">READ MORE</button>
                            <div class="float-right">
                                <table>
                                    <tbody><tr>
                                        <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                        <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                        <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                    </tr>
                                </tbody></table>
                            </div>
    
                        </div>
                    </div>
                    <div class="blog">
                        <div class="item-blog">
                            <img src="https://via.placeholder.com/870x530.jpg" alt="" style="margin-top: 50px;">
                            <a href=""><i class="far fa-heart"></i></a>&nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp; <i class="far fa-calendar-alt"></i> &nbsp; April 12, 2019
                            <h2>Temporibus autem quib</h2>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            </p>
                            <button class="btn float-left">READ MORE</button>
                            <div class="float-right">
                                <table>
                                    <tbody><tr>
                                        <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                        <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                        <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                    </tr>
                                </tbody></table>
                            </div>
    
                        </div>
                    </div>
                    <div class="item-blog" style="border: none;">
                        <img src="https://via.placeholder.com/870x530.jpg" alt="" style="margin-top: 50px;">
                        <a href=""><i class="far fa-heart"></i></a>&nbsp; Like 10 &nbsp;&nbsp;&nbsp;&nbsp; <i class="far fa-calendar-alt"></i> &nbsp; April 12, 2019
                        <h2>Temporibus autem quib</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                            id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        </p>
                        <button class="btn float-left">READ MORE</button>
                        <div class="float-right">
                            <table>
                                <tbody><tr>
                                    <td><a href=""><i class="fab fa-twitter"></i></a></td>
                                    <td><a href=""><i class="fab fa-facebook"></i></a></td>
                                    <td><a href=""><i class="fab fa-instagram"></i></a></td>
                                </tr>
                            </tbody></table>
                        </div>
    
                    </div>
    
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#"> &gt; </a></li>
                    </ul> 
                </div>
            </div> --}}
        </div>
    </div>
    <!--<div class="container">
        <div class="content-masonry">
            <div class="row fouth" >
                @foreach ($json as $key => $newsdata)
                    @if($key!==0)
                        <div class="feed">
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <img src="{{$newsdata['image']}}" width="335px" height="220px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" ><a href="{{ $newsdata['url'] }}" target="_blank">{{ $newsdata['title'] }}</a></h5>
                                        <p class="card-text" style="display:block;
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 130ch;">{{$newsdata['text']}}</p>
                                    </div>
                                    <div class="card-body">
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i>{{date('d-M-Y g:i A', strtotime($newsdata['publishedDate']))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>-->
    {{-- popup subscribe --}}
    <div class="modal fade show" id="myModal" role="dialog">
        <div class="modal-dialog modal-newsletter">
            <!-- Modal content-->
            <div class="modal-content">
                <form action="" method="post" id="sub_email_form">
                    <div class="modal-header">
                        <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Subscribe to our Technical Analysis</h4>
                    </div>
                    <div class="modal-body">
                        <p>Signup for our regular Technical Analysis updates to review recommendations delivered directly in your inbox.</p>
                        <div class="input-group">
                            <input type="email" name="sub_email" id="sub_email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <span id="save-error"></span>
                    </div>
                    <div class="modal-footer">
                        <div class="input-group-append">
                            <input type="button" class="btn btn-primary sub_btn" id="sub_btn" name="sub_btn" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('stock180.footer')

    <script>
        $( "#close" ).click(function() {
                $('#myModal').addClass('fade');
                $('#myModal').attr('style', 'display: none !important');
        });
        $(function() {
            
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('keypress',function(e) {
                if(e.which == 13){
                    $('#sub_btn').trigger('click');
                    // alert('You pressed a "enter" key in somewhere'); 
                    return false;     
                }
            });
            $(document).on('click', '#sub_btn', function(e) {
                var thisEle = $(this);
                save(thisEle);
                // alert('You pressed a "enter" key in somewhere'); 
            });

             

            function save(thisEle) {
                if (thisEle.data('requestRunning')) {
                    return;
                }
                thisEle.data('requestRunning', true);
                thisEle.prop("disabled", true);

                $('#save-error').removeClass('hide').html(
                    '<b style="color: green;text-align: center;position:relative;margin-left:25px;"><i class="fa-li fa fa-spinner fa-spin"></i></b>');
                var formData = $('#sub_email_form').serialize();
                var postUrl = "/sub_email";
                // var postUrl = "/admin/delete/{id}";

                $.ajax({
                    url: postUrl
                    , type: "POST"
                    , dataType: "JSON"
                    , data: formData
                    , success: function(response, textStatus, jqXHR) {
                        // console.log(response);return false;
                        if (response.status == "OK") {
                            $('#save-error').html(response.message).css({
                                "color": "green"
                                , "font-weight": "bold"
                            });
                            window.location = response.redirect_url;
                        } else {
                            $('#save-error').html(response.message).css({
                                "color": "red"
                                , "font-weight": "bold"
                            });
                        }
                    }
                    , error: function(jqXHR, textStatus, errorThrown) {
                        $('#save-btn-error').html('Failed to Process!!').css({
                            "color": "red"
                            , "font-weight": "bold"
                        });
                    }
                    , complete: function() {
                        thisEle.data('requestRunning', false);
                        thisEle.prop("disabled", false);
                    }
                });
            }
        });
    </script>

</body>
</html>
