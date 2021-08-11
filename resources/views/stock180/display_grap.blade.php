@include('stock180.header')
<?php date_default_timezone_set('Canada/Eastern'); ?>
<style>
    .hide {
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

    .modal-newsletter .form-control,
    .modal-newsletter .btn {
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

    .modal-newsletter .btn:hover,
    .modal-newsletter .btn:focus {
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

    .f196ee {
        background-color: #fff;
        border: 0px solid #dfe1e5;
        border-radius: 8px;
        width: 800px;
        padding-top: 75px;
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
        padding-left: 20px;
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
        margin-top: 10px;
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
        display: contents;
        font-size: 12px;
        font-weight: 400;
        vertical-align: top;
        width: 100%;
    }

    .ZSM8k table {
        border: 0;
        width: 100%;
    }

    .JgXcPd {
        color: rgba(0, 0, 0, .87);
        max-width: 100px;
        white-space: normal;
    }

    .iyjjgb {
        color: rgba(0, 0, 0, .62);
        max-width: 130px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .ZSM8k table {
        border: 0;
        width: 100%;
    }

    .chart_div{
        margin-left: -31px;width: 800px; height: 400px;
    }
    .image-col{
        width:20%;
        padding-bottom:10px;
    }
    .image-col img{
        width:220px;
        height:150px;
    }
    .detail-col{
        width:80%;
    }
    .nd_title{
        margin:0;
        margin-top:5px;
        margin-bottom:5px;
        font-size: 19px !important;
    }
    .ndsection{
        display:block;
    }
    .nd-subtitle{
        font-size:14px;
    }
    @media screen and (max-width: 1023px) {
            #test{
                display:none;
            }
            .f196ee{padding-top: 100px !important;}
            .JgXcPd{width: 50%;}
    }
    @media screen and (max-width: 600px) {
        .image-col img{
            width:100%;
            height:auto;
        }
         .image-col{
            width:100%;
        }
        .detail-col{
            width:100%;
            margin-bottom:10px;
        }
        .modal-newsletter {
            color: #999;
            width: auto;
        }
        .f196ee{
            width:auto;
        }
        .chart_div:nth-child(n+1){
            margin-left: -15.5px;width: 375px; height: 400px;
        }
        .QhLvnd {
        display: block !important;
        }
    }
    .ZSM8k>table>tbody>tr>td{text-align: left;}

</style>
{{-- <div class="jumbotron text-center">
    <h1>Profit180</h1>
    <p style="text-align: center;">YOUR LIFE BOAT THAT KEEPS YOU SAFE & FLOATED IN YOUR STOCK MARKET JOURNEY</p>
</div> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    // chart map
    var visitor = <?php echo $visitor ?>; // load google charts
    google.charts.load('current', {
        packages: ['annotationchart']
    }).then(function() {
        var arrayData = visitor;
        //console.log(arrayData);
        drawChart(arrayData);
    });

    var lasdate;
    var newlasdate;
    var dd;

    function drawChart(arrayData) {
        // convert string in first column to a date
        var newarr = arrayData;
        newarr.slice(0,2).map(function(row) {
            newlasdate = new Date(row[0]);
            dd = newlasdate.getDate();
            //console.log(lasdate);
        });
        arrayData = arrayData.map(function(row) {
            //console.log(dd);
            if (dd == new Date(row[0]).getDate() 
            && newlasdate.getMonth() == new Date(row[0]).getMonth()
            && newlasdate.getFullYear() == new Date(row[0]).getFullYear()
            )
            {
                //console.log('working');
                lasdate = new Date(row[0]);
            }
            else{
                //console.log('not working');
            }
            //console.log(lasdate);
            return [new Date(row[0]), row[1]];
        });
       // console.log(lasdate);
        var y = lasdate.getFullYear();
        var mm = lasdate.getMonth();
        var d = lasdate.getDate();
        var h = lasdate.getHours();
        var m = lasdate.getMinutes();
        // create google data table, chart, and options
        var data = google.visualization.arrayToDataTable(arrayData);
        var chart = new google.visualization.AnnotationChart(document.getElementById('chart_div'));
        var options = {
            displayAnnotations: true,
            table: {
                sortAscending: true,
                sortColumn: 0   
            },
            annotations: {
                alwaysOutside: true,
                textStyle: {
                fontName: 'Times-Roman',
                fontSize: 18,
                bold: true,
                italic: true,
                // The color of the text.
                color: '#871b47',
                // The color of the text outline.
                auraColor: '#d799ae',
                // The transparency of the text.
                opacity: 0.8
                }
            },
            vAxis: {
            title: 'Price', 
            titleTextStyle: {color: 'grey'},
            format: 'decimal'
            },
            thickness:5,
            thickness: 1,
            scaleType: 'maximized',
            displayDateBarSeparator: true,
            fill: 80,
            scaleFormat: '$',
            zoomStartTime: new Date(y, mm, d, 9, 30),
            zoomEndTime: new Date(y, mm, d, 16, 00),
            displayZoomButtons: false,
            allowHtml: true,
            displayRangeSelector: false,


        };
        //console.log(new Date(y, mm, d, 9, 30));
        // draw chart
        chart.draw(data, options);
        // chart.setVisibleChartRange(new Date(2021, 2, 2, 9, 30), new Date(2021, 2, 2, 16, 00))

    }
    $(function() {
        $('#1d').on('click', function() {
            // load google charts
            google.charts.load('current', {
                packages: ['annotationchart']
            }).then(function() {
                var arrayData = visitor;
                //console.log(arrayData);
                drawChart(arrayData);
            });

            // draw chart
            var lasdate;

            function drawChart(arrayData) {
                // convert string in first column to a date
                arrayData = arrayData.map(function(row) {
                    lasdate = new Date(row[0]);
                    return [new Date(row[0]), row[1]];
                });

                var y = lasdate.getFullYear();
                var mm = lasdate.getMonth();
                var d = lasdate.getDate();
                var h = lasdate.getHours();
                var m = lasdate.getMinutes();
                // create google data table, chart, and options
                var data = google.visualization.arrayToDataTable(arrayData);
                var chart = new google.visualization.AnnotationChart(document.getElementById(
                    'chart_div'));
                var options = {
                    annotations: {
                        alwaysOutside: true
                    },
                    displayAnnotations: true,
                    thickness: 1,
                    displayDateBarSeparator: true,
                    fill: 80,
                    scaleFormat: '$',
                    zoomStartTime: new Date(y, mm, d, 9, 30),
                    zoomEndTime: new Date(y, mm, d, 16, 00),
                    displayZoomButtons: false,
                    allowHtml: true,
                    displayRangeSelector: false,
                };

                // draw chart
                chart.draw(data, options);
                // chart.setVisibleChartRange(new Date(2021, 2, 2, 9, 30), new Date(2021, 2, 2, 16, 00))

            }
        });
    });

</script>

<div class="container f196ee">
    <div jscontroller="jgzyL" class="row sFLAmb" data-id="1" id="knowledge-finance-wholepage__entity-summary">
        <div class="col-12 aviV4d">
            <div data-ved="2ahUKEwi-wNTrpcDvAhVRyDgGHVjQBz8QuLwBMAB6BAgREAI">
                <info_card class="N9cLBc">
                    <div class="OiIFo" aria-level="3" role="heading">
                        <div class="E65Bx">
                            <div class="oPhL2e">{{ $data_res['name'] }}</div>
                            <div class="oPhL2e">{{ '(' . $data_res['ticker'] . ')' }}</div>
                            {{-- <div class="HfMth">NYSE: GOLD</div> --}}
                        </div>
                    </div>
                    <span>
                        <span jscontroller="q6ctOd" jsdata="Sosln;_;AL9Q9k" jsaction="rcuQ6b:npT2md;bHJcAf:SX8lEe"><span
                                jsname="vWLAgc" class="IsqQVc NprOob XcVN5d">{{ $data_res['lastPrice'] }}</span><span
                                jsname="T3Us2d" class="knFDje">
                                USD</span></span></span>
                    @if ($data_res['$grothPrice'] > 0)
                        <span class="WlRRw IsqQVc fw-price-up">
                            <span>+{{ number_format($data_res['$grothPrice'], 2) }} </span>
                            <span>
                                {{-- <span>(0.48%)</span> --}}
                                <span aria-hidden="true" class="u47KMb" style="height:12px;width:12px;padding-left:4px">
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
                            <span>{{ number_format($data_res['$grothPrice'], 2) }} </span>
                            <span>
                                {{-- <span>(0.48%)</span> --}}
                                <span aria-hidden="true" class="u47KMb" style="height:12px;width:12px;padding-left:4px">
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
                            <span jsname="ihIZgd">
                                {{ date('d M, g:i a', strtotime($data_res['closeDate'])) }}</span>
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
                            {{-- <button id="1d" type='button'>1D</button> --}}
                            <div id="chart_div" class="chart_div" style=""></div>
                        </div>
                        <info_card>
                            <!--<div class="zz63rd">
                                <div class="QhLvnd" jscontroller="a3mDic" jsaction="rcuQ6b:npT2md">
                                    <div class="ZSM8k">
                                        <table>
                                            <tbody>

                                                <tr>
                                                    <td class="JgXcPd">Symbol</td>
                                                    <td class="iyjjgb">{{ $data_res['ticker'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">MarketCap</td>
                                                    <td class="iyjjgb">{{ $data_res['marketCap'] }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="JgXcPd">Price</td>
                                                    <td class="iyjjgb">{{ $data_res['lastPrice'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">Open</td>
                                                    <td class="iyjjgb">{{ $data_res['open'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">52-wk High</td>
                                                    <td class="iyjjgb">{{ $data_res['high_52'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">PriceAvg50</td>
                                                    <td class="iyjjgb">{{ $data_res['priceAvg50'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">EPS</td>
                                                    <td class="iyjjgb">{{ $data_res['eps'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">TimeStamp</td>
                                                    <td class="iyjjgb">{{ $data_res['timestamp'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ZSM8k">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="JgXcPd">Name</td>
                                                    <td class="iyjjgb">{{ $data_res['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">SharesOutstanding</td>
                                                    <td class="iyjjgb">{{ $data_res['sharesOutstanding'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">ChangesPercentage</td>
                                                    <td class="iyjjgb">{{ $data_res['changesPercentage'] }}%</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">Low</td>
                                                    <td class="iyjjgb">{{ $data_res['low'] }}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="JgXcPd">52-wk Low</td>
                                                    <td class="iyjjgb">{{ $data_res['low_52'] }}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="JgXcPd">PriceAvg200</td>
                                                    <td class="iyjjgb">{{ $data_res['priceAvg200'] }}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="JgXcPd">PE</td>
                                                    <td class="iyjjgb">{{ $data_res['pe'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ZSM8k">
                                        <table >
                                            <tbody>
                                                <tr>
                                                    <td class="JgXcPd">Exchange</td>
                                                    <td class="iyjjgb">{{ $data_res['exchange'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">Volume</td>
                                                    <td class="iyjjgb">{{ $data_res['volume'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">PreviousClose</td>
                                                    <td class="iyjjgb">{{ $data_res['close'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">High</td>
                                                    <td class="iyjjgb">{{ $data_res['high'] }}</td>
                                                </tr>
                                                 <tr style="opacity: 0">
                                                    <td class="JgXcPd">ss</td>
                                                    <td class="iyjjgb"></td>
                                                </tr>
                                                 <tr style="opacity: 0">
                                                    <td class="JgXcPd">ss</td>
                                                    <td class="iyjjgb"></td>
                                                </tr>

                                                 <tr >
                                                    <td class="JgXcPd">Earnings Announcement</td>
                                                    <td class="iyjjgb">{{ $data_res['earningsAnnouncement'] }}</td>
                                                </tr>
                                                 <tr style="opacity: 0">
                                                    <td class="JgXcPd">ss</td>
                                                    <td class="iyjjgb"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>-->
                            @if($data_res['user_id'] != '')
                            <a href="{{route('client_protfolio',['ticker'=>$data_res['ticker'],'user_id'=>$data_res['user_id']])}}">signup</a>
                            @else
                            <!-- <a href="{{route('login')}}">login</a> -->
                            <button class="remove-user">login</button>
                            <script>
                    $("body").on("click",".remove-user",function(){
                                // var current_object = $(this);
                                swal({
                                    title: "Demo",
                                    text: "This is demo",
                                    confirmButtonText: "Log in",
                                    
                                    
                                })
                                // . then(function() {
                                // window. location = "redirectURL";
                                // });
                            });
                            </script>
                            @endif
                             <div class="zz63rd">
                                <div class="QhLvnd" jscontroller="a3mDic" jsaction="rcuQ6b:npT2md">
                                    <div class="ZSM8k">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="JgXcPd">Symbol</td>
                                                    <td class="iyjjgb">{{ $data_res['ticker'] }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Market Cap</td>
                                                    <td class="iyjjgb">{{ strtoupper($data_res['marketCap']) }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Price</td>
                                                    <td class="iyjjgb">{{ $data_res['lastPrice'] }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Open</td>
                                                    <td class="iyjjgb">{{ $data_res['open'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">52-wk High</td>
                                                    <td class="iyjjgb">{{ $data_res['high_52'] }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">50 Day Avg</td>
                                                    <td class="iyjjgb">{{ $data_res['priceAvg50'] }}</td>
                                                </tr> 
                                                <tr>
                                                <td class="JgXcPd" >Earnings Announcement</td>
                                                <td class="iyjjgb">{{ $data_res['earningsAnnouncement'] }}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="JgXcPd">VolAvg</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['volAvg'] }}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="ZSM8k">
                                            <table>
                                                <tr> 
                                                    <td class="JgXcPd">Name</td>
                                                    <td class="iyjjgb">{{ $data_res['name'] }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Shares Outstanding</td>
                                                    <td class="iyjjgb">{{ $data_res['sharesOutstanding'] }}</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Change %</td>
                                                    <td class="iyjjgb">{{ $data_res['changesPercentage'] }}%</td>
                                                </tr> 
                                                <tr>
                                                    <td class="JgXcPd">Low</td>
                                                    <td class="iyjjgb">{{ $data_res['low'] }}</td>
                                                </tr> 
                                                <tr>
                                                     <td class="JgXcPd">52-wk Low</td>
                                                    <td class="iyjjgb">{{ $data_res['low_52'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">200 Day Avg</td>
                                                    <td class="iyjjgb">{{ $data_res['priceAvg200'] }}</td>
                                                </tr>
                                                <tr > <td class="JgXcPd">LastDiv</td>
                                                    <td class="iyjjgb">{{ number_format($outlook['profile']['lastDiv'],2,'.','') }}</td>
                                                </tr>
                                                <tr style="opacity:0;" id="test">
                                                    <td class="JgXcPd">Website</td>
                                                    <td class="iyjjgb"><a href="{{ $outlook['profile']['website'] }}">{{ $outlook['profile']['website'] }}</a></td>
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        <div class="ZSM8k">
                                            <table>
                                                <tr>
                                                    <td class="JgXcPd">Exchange</td>
                                                    <td class="iyjjgb">{{ $data_res['exchange'] }}</td>
                                                </tr>
                                                <tr>
                                                     <td class="JgXcPd">Volume</td>
                                                    <td class="iyjjgb">{{ $data_res['volume'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">Previous Close</td>
                                                    <td class="iyjjgb">{{ $data_res['close'] }}</td>
                                                </tr>
                                                <tr>
                                                     <td class="JgXcPd">High</td>
                                                    <td class="iyjjgb">{{ $data_res['high'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">EPS</td>
                                                    <td class="iyjjgb">{{ $data_res['eps'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="JgXcPd">PE</td>
                                                    <td class="iyjjgb">{{ $data_res['pe'] }}</td>
                                                </tr>
                                                <tr >
                                               <td class="JgXcPd">Website</td>
                                                    <td class="iyjjgb"><a href="{{ $outlook['profile']['website'] }}">{{ $outlook['profile']['website'] }}</a></td>
                                                </tr>
                                                 <tr style="opacity:0;" id="test">
                                                    <td class="JgXcPd">CUSIP</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['cusip'] }}</td>
                                                </tr>
                                                </tbody>
                                                </table>
                                                </div>
                                                <!-- <tr>
                                                    <td class="JgXcPd" >Earnings Announcement</td>
                                                    <td class="iyjjgb">{{ $data_res['earningsAnnouncement'] }}</td>

                                                    <td class="JgXcPd"></td>
                                                    <td class="iyjjgb"></td>

                                                    <td class="JgXcPd"></td>
                                                    <td class="iyjjgb"></td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
                                    
                                    
                                </div>
                            </div>

                            <div class="zz63rd" >
                                <h5 style="margin-left: 30px;">{{$outlook['profile']['companyName']}} Outlook</h5>
                                <div class="QhLvnd" jscontroller="a3mDic" jsaction="rcuQ6b:npT2md" id="outlook">
                                    <div class="ZSM8k">
                                        <table>
                                            <tbody>

                                                <!-- <tr>
                                                    <td class="JgXcPd">Symbol</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['symbol'] }}</td>
                                                    
                                                    <td class="JgXcPd">Company Name</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['companyName'] }}Outlook</td>

                                                    <td class="JgXcPd">Exchange ShortName</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['exchangeShortName'] }}</td>
                                                </tr> -->
                                                <tr style="height:60px;">
                                                    <td class="JgXcPd">Description</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['description'] }}</td>
                                                </tr>
                                               
                                                     <!-- <td class="JgXcPd">Price</td>
                                                    <td class="iyjjgb">{{ number_format($outlook['profile']['price'],2,'.','') }}</td> -->
                                                <tr>
                                                    <td class="JgXcPd">Currency</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['currency'] }}</td>
                                                </tr>
                                                 <tr>
                                                     <td class="JgXcPd">ISIN</td>
                                                    <td class="iyjjgb">{{exec('getmac') }}</td>
                                                </tr>
                                               
                                            </tbody>
                                            </table>
                                        </div>
                                                <div class="ZSM8k">
                                            <table>
                                            <tbody>
                                                <tr style="height:60px;">
                                                    <td class="JgXcPd">Industry</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['industry'] }}</td>
                                                    </tr>
                                                <tr>
                                                <tr>
                                                    <td class="JgXcPd">Changes</td>
                                                    <td class="iyjjgb">{{ number_format($outlook['profile']['changes'],2,'.','') }}</td>
                                                </tr>
                                                <tr>
                                                     <!-- <td class="JgXcPd">MktCap</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['mktCap'] }}</td> -->
                                                    <td class="JgXcPd">CUSIP</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['cusip'] }}</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                                <div class="ZSM8k">
                                            <table>
                                            <tbody>
                                                <tr style="height:60px;">
                                                    <td class="JgXcPd">Range</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['range'] }}</td>
                                                </tr>
                                                <tr>   
                                                    <td class="JgXcPd">Beta</td>
                                                    <td class="iyjjgb">{{ number_format($outlook['profile']['beta'],2,'.','') }}</td>
                                                </tr>
                                                <tr>
                                                     <td class="JgXcPd">CIK</td>
                                                    <td class="iyjjgb">{{ $outlook['profile']['cik'] }}</td>
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
<div class="container">
<h4 style="margin: 15px 0px 20px 30px;">
@if($newsdata != null)
<h4 style="margin: 15px 0px 20px 30px;font-size: 17px;">{{$outlook['profile']['companyName']}} News</h4>
@endif
    <div id="" class="" style="max-width: 900px;">
            @foreach ($newsdata as $key => $nd)
                    <div class="container">
                        <div class="row ndsection">
                            <div class="col-md-6 col-sm-12 image-col" style="padding-right:10px">
                                <img src="{{ $nd['image'] }}" width='220px' height='150px' >
                            </div>
                            <div class="col-md-6 col-sm-12 detail-col">
                                <div class="" style="font-size:11px;">
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d-M-Y g:i A', strtotime($nd['publishedDate']))}}</span>
                                        <h3 class="nd_title"><a
                                                href="{{ $nd['url'] }}" target='blank'><u class="StretchedBox"></u>
                                                <!-- react-text: 555 -->
                                                {{ $nd['title'] }}
                                                <!-- /react-text --></a>
                                        </h3>
                                        <p class="nd-subtitle" style="display:block;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-align:left;
                                            text-overflow: ellipsis;
                                            max-width: 130ch;">{{$nd['text']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
    </div>
</div>
@include('stock180.footer')
