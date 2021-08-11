
<?php
date_default_timezone_set('Canada/Eastern');
?>
@include('stock180.header')
<style>
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
        @media screen and (max-width: 600px) {
            .modal-newsletter {
                    color: #999;
                    width: auto;
            }
        }
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="jumbotron text-center">
        <h1>Profit180</h1>
        <p style="text-align: center;">YOUR LIFE BOAT THAT KEEPS YOU SAFE & FLOATED IN YOUR STOCK MARKET JOURNEY</p>
    </div>
    
    {{-- api search --}}
    <div class="container">
        <form action="{{ route('api.chart') }}" method="get">
            <div class="form-group" style="display:inline-flex">
                <input type="text" name="ticker" id="ticker" class="form-control input-lg" placeholder="Search Ticker " />
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button> 
            </div> 
             <div id="tickerList">
             </div>
           {{ csrf_field() }}
           </form>
    </div>

<style>
    .f196ee {
        background-color: #fff;
        border: 1px solid #dfe1e5;
        border-radius: 8px;
        width: 800px;
    }

    .aviV4d {
        padding: 16px 16px 4px 16px;
    }

    .N9cLBc {
        font-size: 12px;
        padding-bottom: 12px;
        font-weight: 400;
    }

    .OiIFo {
        color: rgba(0, 0, 0, .62);
        display: flex;
        flex: 1;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .E65Bx {
        flex: 1;
        min-width: 0;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    .oPhL2e {
        display: inline-block;
    }

    .HfMth {
        display: block;
        font-size: 16px;
    }

    .NprOob {
        font-size: 27px;
        padding-right: 4px;
        color: rgba(0, 0, 0, .87);
    }

    .knFDje {
        font-size: 16px;
        color: rgba(0, 0, 0, .62);
    }

    .fw-price-up.IsqQVc {
        color: #34a853;
    }

    .fw-price-dn.IsqQVc {
        color: rgb(255, 94, 94);
    }

    .u47KMb {
        display: inline-block;
        fill: currentColor;
    }

    .TgMHGc {
        color: rgba(0, 0, 0, .62);
    }

    .qFiidc {
        font-size: 12px;
        color: rgba(0, 0, 0, .62);
    }

    .cQv6re {
        margin-left: -16px;
        margin-right: -16px;
    }

    .QcYZxe {
        border-bottom: 1px solid #dadce0;
    }

    .NDTw3e {
        font-size: 13px;
        color: rgba(0, 0, 0, .62);
        display: table;
        table-layout: fixed;
        height: 32px;
        padding-left:20px;
        line-height: 24px;
        width: 100%;
    }

    .PVZpFf {
        display: table-cell;
    }

    .knowledge-finance-wholepage-chart__fw-uch {
        position: relative;
        padding: 40px 16px 20px;
        font-size: 13px;
    }

    .VADlJf {
        position: relative;
    }

    .knowledge-finance-wholepage-chart__fw-uch .uch-svg {
        color: rgba(0, 0, 0, .62);
    }

    .yvg0ob span {
        background: #fff;
        position: absolute;
        white-space: nowrap;
    }

    .uch-svg svg {
        height: 100%;
        width: 100%;
        overflow: visible;
    }

    .uch-path {
        position: relative;
    }

    .uch-svg svg {
        height: 100%;
        width: 100%;
        overflow: visible;
    }

    .knowledge-finance-wholepage-chart__highlight-line {
        width: 1px;
        height: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, .38) 50%, rgba(255, 255, 255, 0) 0%);
        background-position: right;
        background-size: 1px 4px;
        background-repeat: repeat-y;
    }

    .kno-kp.mnr-c.g,
    .g-blk.g,
    .KIy09e {
        width: 652px;
    }

    #center_col .kp-blk {
        position: relative;
    }

    .kp-blk {
        box-shadow: none;
        background: #fff;
        border: 1px solid #dfe1e5;
        border-radius: 8px;
    }

    .kno-ftr {
        margin-left: 0px;
        padding: 4px 16px 0;
    }

    .kno-ftr {
        clear: both;
        color: #70757a;
        font-size: 12px;
        line-height: 1.34;
        overflow: hidden;
    }

    .OwRFvb {
        float: right;
        margin-left: 2em;
    }

    .kno-ftr a {
        color: #70757a;
        text-decoration: none;
    }

    .info_card {
        display: block;
    }

    .zz63rd {
        padding-bottom: 10px;
        margin-left: -16px;
        margin-right: -16px;
    }

    .QhLvnd {
        margin-left: 16px;
        display: flex;
        margin-right: 16px;
        background: aliceblue;
    }
    tr:nth-child(even) {
        background-color: aliceblue;
        color: #fff;
    }
    .ZSM8k {
        display: inline-block;
        font-size: 12px;
        font-weight: 400;
        vertical-align: top;
        width: 50%;
    }

    .ZSM8k table {
        border: 0;
        width: 100%;
    }

    .JgXcPd {
        color: rgba(0, 0, 0, .87);
        max-width: 100px;
    }

    .iyjjgb {
        color: rgba(0, 0, 0, .62);
    }

    .ZSM8k {
        display: inline-block;
        font-size: 12px;
        font-weight: 400;
        vertical-align: top;
        width: 50%;
    }

    .ZSM8k table {
        border: 0;
        width: 100%;
    }
    info_card {
        display: block;
    }
</style>



<div class="container f196ee">
    <div jscontroller="jgzyL" class="row sFLAmb" data-id="1" id="knowledge-finance-wholepage__entity-summary">
        <div class="col-12 aviV4d">
                <div data-ved="2ahUKEwi-wNTrpcDvAhVRyDgGHVjQBz8QuLwBMAB6BAgREAI">
                    <info_card class="N9cLBc">
                        <div class="OiIFo" aria-level="3" role="heading">
                            <div class="E65Bx">
                                <div class="oPhL2e">{{$data_res['name']}}</div>
                                <div class="oPhL2e">{{"(".$data_res['ticker'].")"}}</div>
                            </div>
                        </div>
                        <span>
                            <span jscontroller="q6ctOd" jsdata="Sosln;_;AL9Q9k"
                                jsaction="rcuQ6b:npT2md;bHJcAf:SX8lEe"><span jsname="vWLAgc"
                                    class="IsqQVc NprOob XcVN5d">{{$data_res['lastPrice']}}</span><span jsname="T3Us2d" class="knFDje">
                                    USD</span></span></span> 
                                    @if ($data_res['$grothPrice']>0)
                                         <span class="WlRRw IsqQVc fw-price-up">
                                        <span>+{{ number_format($data_res['$grothPrice'],2) }} </span>
                                        <span>
                                            <span aria-hidden="true" class="u47KMb"
                                            style="height:12px;width:12px;padding-left:4px">
                                                <svg version="1.1" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path
                                                    d="M6,0.002L0 6.002 4.8 6.002 4.8 11.9996 7.2 11.9996 7.2 6.002 12 6.002z">
                                                </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    @else
                                    <span class="WlRRw IsqQVc fw-price-dn">
                                        <span>{{ number_format($data_res['$grothPrice'],2) }} </span>
                                        <span>
                                            <span aria-hidden="true" class="u47KMb"
                                            style="height:12px;width:12px;padding-left:4px">
                                                <svg version="1.1" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path
                                                    d="M6,0.002L0 6.002 4.8 6.002 4.8 11.9996 7.2 11.9996 7.2 6.002 12 6.002z">
                                                </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    @endif
                                   
                                <div>
                                    <span class="TgMHGc">
                                        <span jsname="lb3Vg">Closed: </span>
                                        <span jsname="ihIZgd"> {{date('d M, g:i a', strtotime($data_res['closeDate']))}}</span>
                                    </span>
                                </div>
                    </info_card>
                </div>
            <div jsname="j9uF1e" class="OqM2Gb">
                    <div>
                        <div>
                            <div tabindex="0" id="fw-_mqlWYL6LLNGQ4-EP2KCf-AM35" class="yf">
                                <style>
                                    .knowledge-finance-wholepage-chart__fw-uch {
                                        position: relative;
                                        padding: 40px 16px 20px;
                                        font-size: 13px
                                    }

                                    .pLtfr.knowledge-finance-wholepage-chart__fw-uch {
                                        padding: 24px 0 0 0;
                                        font-size: 11px
                                    }

                                    .Lr6dtd .knowledge-finance-wholepage-chart__fw-uch {
                                        padding: 24px 0 0 0;
                                        font-size: 11px
                                    }

                                    .knowledge-finance-wholepage-chart__hover-card {
                                        top: 26px !important
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch .uch-svg {
                                        color: rgba(0, 0, 0, .62)
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch .uch-psvg {
                                        stroke-width: 2
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch .uch-xa span {
                                        visibility: hidden;
                                        line-height: 13px
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch .uch-xa-gl {
                                        stroke: #70757a;
                                        stroke-width: 1;
                                        visibility: hidden
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch .b38at {
                                        stroke: #f6f6f6;
                                        stroke-width: 1
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch:not(.kNoobe) .ZQt4G {
                                        stroke: #70757a
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch:not(.kNoobe) .BFMWAe {
                                        stroke-dasharray: 1.5, 7.5;
                                        stroke: rgba(0, 0, 0, .62)
                                    }

                                    .kNoobe .BFMWAe {
                                        stroke: #70757a
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch:not(.V30e3e) .uch-path {
                                        margin-right: 5px !important
                                    }

                                    .knowledge-finance-wholepage-chart__fw-uch:not(.V30e3e) .uch-xa {
                                        margin-right: 5px !important
                                    }

                                    .knowledge-finance-wholepage-chart__uch-hdot {
                                        border-radius: 5px;
                                        border-radius: 5px;
                                        width: 8px;
                                        height: 8px;
                                        margin-left: -4px;
                                        margin-top: -4px
                                    }

                                    .knowledge-finance-wholepage-chart__highlight-line {
                                        width: 1px;
                                        height: 100%;
                                        background-image: linear-gradient(rgba(0, 0, 0, .38) 50%, rgba(255, 255, 255, 0) 0%);
                                        background-position: right;
                                        background-size: 1px 4px;
                                        background-repeat: repeat-y
                                    }

                                    .knowledge-finance-wholepage-chart__hover-card {
                                        background-color: #fff;
                                        top: 0px;
                                        left: 0px;
                                        font-weight: 400;
                                        font-size: 12px;
                                        height: 28px;
                                        line-height: 28px;
                                        padding-left: 8px;
                                        padding-right: 8px;
                                        position: absolute;
                                        visibility: hidden;
                                        border-radius: 2px;
                                        box-shadow: 0 1px 3px rgba(0, 0, 0, .2), 0 1px 1px rgba(0, 0, 0, .14);
                                        z-index: 2;
                                        direction: ltr
                                    }

                                    .knowledge-finance-wholepage-chart__hover-card-value {
                                        color: rgba(0, 0, 0, .87)
                                    }

                                    .knowledge-finance-wholepage-chart__hover-card-time {
                                        color: rgba(0, 0, 0, .67)
                                    }

                                    .a4vfUd {
                                        display: none
                                    }

                                    .jdUcZd {
                                        display: inline-block;
                                        padding-bottom: 4px;
                                        padding-left: 4px
                                    }

                                    .fw-price-up.IsqQVc {
                                        color: #34a853
                                    }

                                    .fw-price-dn.IsqQVc {
                                        color: #d93025
                                    }

                                    .fw-price-nc.IsqQVc {
                                        color: rgba(0, 0, 0, .54)
                                    }

                                    .u47KMb {
                                        display: inline-block;
                                        fill: currentColor
                                    }

                                    .u47KMb svg {
                                        display: block;
                                        height: 100%;
                                        width: 100%
                                    }

                                    .fw-price-dn .u47KMb svg {
                                        transform: rotate(180deg)
                                    }

                                    .fw-price-nc .u47KMb {
                                        display: none
                                    }

                                    .VADlJf {
                                        position: relative
                                    }

                                    .uch-svg {
                                        position: relative
                                    }

                                    .uch-svg span {
                                        -webkit-user-select: none;
                                        user-select: none
                                    }

                                    .uch-svg svg {
                                        height: 100%;
                                        width: 100%;
                                        overflow: visible
                                    }

                                    .yvg0ob {
                                        position: relative
                                    }

                                    .uch-path {
                                        position: relative
                                    }

                                    .uch-xa {
                                        position: relative
                                    }

                                    .yvg0ob span {
                                        background: #fff;
                                        position: absolute;
                                        white-space: nowrap
                                    }

                                    .iHd7Ld {
                                        transform: translateY(-50%);
                                        left: 0
                                    }

                                    .iHd7Ld.c5yBKf {
                                        right: 0
                                    }

                                    .uch-path path {
                                        vector-effect: non-scaling-stroke
                                    }

                                    .uch-path span {
                                        transform: translateX(-50%);
                                        white-space: nowrap;
                                        position: absolute
                                    }

                                    .T2LXe {
                                        position: absolute;
                                        z-index: 1;
                                        transform: translate(-50%, -50%)
                                    }

                                    .T2LXe.c5yBKf {
                                        transform: translate(50%, -50%)
                                    }

                                    .hVEUTe .BZcy7 {
                                        position: absolute;
                                        transform: translate(-50%, -130%)
                                    }

                                    .hVEUTe .BZcy7.c5yBKf {
                                        transform: translate(50%, -130%)
                                    }

                                    .dgVA6e .BZcy7 {
                                        position: absolute;
                                        transform: translate(-50%, 30%)
                                    }

                                    .dgVA6e .BZcy7.c5yBKf {
                                        transform: translate(50%, 30%)
                                    }

                                    svg.c5yBKf {
                                        transform: scaleX(-1)
                                    }

                                    .uch-xa-tl {
                                        background: #fff;
                                        position: absolute;
                                        transform: translateX(-50%);
                                        white-space: nowrap;
                                        text-align: center
                                    }

                                    .uch-xa-tl.c5yBKf {
                                        transform: translateX(50%)
                                    }

                                    .WfRoqd {
                                        background: #fff;
                                        position: absolute;
                                        transform: translateX(-50%);
                                        white-space: nowrap;
                                        text-align: center
                                    }

                                    .WfRoqd.c5yBKf {
                                        transform: translateX(50%)
                                    }

                                    .eCjWOc {
                                        width: 100%
                                    }

                                    .eCjWOc .owVaQe {
                                        display: table;
                                        width: 100%
                                    }

                                    .eCjWOc .YrePq {
                                        text-align: center;
                                        display: table-cell;
                                        vertical-align: middle
                                    }

                                </style>
                                <select id="input">
                                    <option value="AAPL">Apple</option>
                                    <option value="GOOG">Google</option>
                                    <option value="MSFT">Microsoft</option>
                                    <option value="BRK.A">Berkshire Hathaway</option>
                                    <option value="FB">Facebook</option>
                                    <option value="JPM">JPMorgan</option>
                                </select>
                                <!-- <input id="input" placeholder="Enter a stock"></input> -->
                                <button type="button" onclick="displayPricesHr();chart.destroy();">Get Prices</button><br><br>

                                <label for="spacing">Duration:</label>
                                <div class="slider">
                                <datalist id="steplist">
                                    <option label="1" value="1">
                                    <option label="3" value="3">
                                    <option label="6" value="6">
                                    <option label="9" value="9">
                                    <option label="12" value="12">
                                    <option label="15" value="15">  
                                    <option label="18" value="18">
                                    <option label="21" value="21">
                                    <option label="24" value="24">
                                </datalist>
                                {{-- <input onchange="displayPrices()" list="steplist" 
                                        id="duration" type="range" min="1" max="24" step="2" value="12">   --}}
                                </div>
                                <button onclick="displayPricesHr();chart.destroy();" id="duration" type="submit" min="09" max="16" step="3" value="12">1h</button>
                                <button onclick="displayPricesDays();chart.destroy();" id="duration1" type="button" min="3" max="12" step="1" value="10">1d</button>
                                <h2>Stock Prices</h2><div id="prices"></div>
                                <canvas id="myChart"></canvas>
                                <script src="https://d3js.org/d3.v5.min.js"></script>
                                <script>
                                    var visitor = <?php echo $visitor; ?>;
                                    displayPricesHr();
                                    function displayPricesHr(){
                                        let duration = document.getElementById("duration").value;
                                        console.log(duration);
                                        let name = document.getElementById("input").value;
                                        var xmlhttp = new XMLHttpRequest(),
                                        url = 'https://financialmodelingprep.com/api/v3/historical-chart/5min/' + name + '?apikey=5e73cb5c198ff087f5b3e59afab15e08';
                                           
                                        // url = 'https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY&symbol=' + name + '&apikey=PVY8MCGPGIBP69X4';
                                        xmlhttp.open('GET', url, true);
                                        xmlhttp.onload = function() {
                                        // const dates = lastWeek();
                                            if (this.readyState == 4 && this.status == 200) {
                                                json=JSON.parse(this.responseText);
                                                let keys=[];
                                                var pricesClose = [];

                                                json.forEach(function(key, index){
                                                    keys.push(key.date);
                                                    pricesClose.push(key.close);
                                                    // console.log(key.date);
                                                    // console.log(key.close); 
                                                });
                                                // console.log(json);
                                                // document.getElementById('stock').innerHTML =
                                                //   json['Meta Data']['2. Symbol'];
                                                // get an array of object keys
                                                // let keys = Object.keys(json['Monthly Time Series']);

                                                var dates = [];
                                                const months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", 
                                                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
                                                // get prices for last no. of months
                                                for (let i=0; i<duration; i++) {
                                                let key = keys[i];
                                                // key.slice(5, 7)-1  ##to get month in number
                                                // key.slice(2, 4)  ##to get year in number
                                                // key.slice(11, 14)  ##to get hr in number
                                                // console.log(key);
                                                // console.log((key.slice(11, 14)) + key.slice(14, 16));
                                                // dates.push(months[Number(key.slice(5, 7) - 1)] + key.slice(2, 4));
                                                dates.push((key.slice(11, 14)) + key.slice(14, 16)); //##time push
                                                }
                                                // console.log(dates);
                                                // console.log(pricesClose);
                                                displayChart(name, dates, pricesClose)
                                            }
                                        };
                                        xmlhttp.send();
                                    }
                                    function displayPricesDays(){
                                        let duration = document.getElementById("duration1").value;
                                        console.log(duration);
                                        let name = document.getElementById("input").value;
                                        var xmlhttp = new XMLHttpRequest(),
                                        url = 'https://financialmodelingprep.com/api/v3/historical-chart/1hour/' + name + '?apikey=5e73cb5c198ff087f5b3e59afab15e08';
                                           
                                        // url = 'https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY&symbol=' + name + '&apikey=PVY8MCGPGIBP69X4';
                                        xmlhttp.open('GET', url, true);
                                        xmlhttp.onload = function() {
                                        // const dates = lastWeek();
                                            if (this.readyState == 4 && this.status == 200) {
                                                json=JSON.parse(this.responseText);
                                                let keys=[];
                                                var pricesClose = [];

                                                json.forEach(function(key, index){
                                                    keys.push(key.date);
                                                    pricesClose.push(key.close);
                                                    // console.log(key.date);
                                                    // console.log(key.close); 
                                                });
                                                // console.log(json);
                                                // document.getElementById('stock').innerHTML =
                                                //   json['Meta Data']['2. Symbol'];
                                                // get an array of object keys
                                                // let keys = Object.keys(json['Monthly Time Series']);

                                                var dates = [];
                                                const months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", 
                                                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
                                                // get prices for last no. of months
                                                for (let i=0; i<duration; i++) {
                                                let key = keys[i];
                                                // key.slice(5, 7)-1  ##to get month in number
                                                // key.slice(2, 4)  ##to get year in number
                                                // key.slice(11, 14)  ##to get hr in number
                                                // console.log(key);
                                                // console.log((key.slice(11, 14)) + key.slice(14, 16));
                                                // dates.push(months[Number(key.slice(5, 7) - 1)] + key.slice(2, 4));
                                                dates.push((key.slice(11, 14)) + key.slice(14, 16)); //##time push
                                                }
                                                // console.log(dates);
                                                // console.log(pricesClose);
                                                displayChart(name, dates, pricesClose)
                                            }
                                        };
                                        xmlhttp.send();
                                    }
                                    let chart;
                                    function displayChart(name, dates, pricesClose) {
                                        let labels = dates.reverse();
                                        let data = pricesClose.reverse();
                                        let ctx = document.getElementById('myChart').getContext('2d');
                                        chart = new Chart(ctx, {
                                            // The type of chart we want to create
                                            type: 'line',
                                    
                                            // The data for our dataset
                                            data: {
                                                labels: labels,
                                                datasets: [{
                                                    label: name,
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    data: data,
                                                    lineTension: 0,
                                                }]
                                            },
                                    
                                            // Configuration options go here
                                            options: {}
                                        });
                                       
                                    }
                                    
                                </script>
                            </div>
                            <info_card>
                                <div class="zz63rd">
                                    <div class="QhLvnd" jscontroller="a3mDic" jsaction="rcuQ6b:npT2md">
                                        <div class="ZSM8k">
                                            <table>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td class="JgXcPd">High</td>
                                                        <td class="iyjjgb">{{$data_res['high']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="JgXcPd">Low</td>
                                                        <td class="iyjjgb">{{$data_res['low']}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="JgXcPd">52-wk High</td>
                                                        <td class="iyjjgb">{{$data_res['high_52']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="JgXcPd">52-wk Low</td>
                                                        <td class="iyjjgb">{{$data_res['low_52']}}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="ZSM8k">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="JgXcPd">Open</td>
                                                        <td class="iyjjgb">{{$data_res['open']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="JgXcPd">Prev close</td>
                                                        <td class="iyjjgb">{{$data_res['close']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="JgXcPd">Mkt cap</td>
                                                        <td class="iyjjgb">{{$data_res['marketCap']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="JgXcPd">volume</td>
                                                        <td class="iyjjgb">{{$data_res['volume']}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </info_card>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@include('stock180.footer')