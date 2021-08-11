


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
    
    
    <script type="text/javascript" src="{{asset('assets/js/marquee.js?v='.time())}}"></script>
    {{--  popup script for first time users  --}}
    
    <!-- Container (home Section) -->
    <div class="container" style="padding-top:40px;">
        <div class="row content-blog">
                <div class="col-md-9 col-sm-12 one" style="margin-top: 15px;">
                    <div class="content-blog-center">
                        <div class="blog">
                            <div class="item-blog">
                               <h5>TOP GAINERS</h5>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <td>Company</td>
                                                <td>Price</td>
                                                <td>Change</td>
                                                <td>% Chg</td>
                                            </tbody>
                                        </table>
        
                            </div>
                        </div>
                       
                    </div>
        
                </div>
                <div class="col-md-3 col-sm-12">
                                        <h5>MOST ACTIVE</h5>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                               
                                                <tr>
                                               <td>Company</td>
                                                <td>Price</td>
                                                <td>Change</td>
                                                <td>% Chg</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>     
                                        <h5>MOST ACTIVE</h5>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Change</th>
                                                <th>% Chg</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                               
                                                <tr>
                                               <td>Company</td>
                                                <td>Price</td>
                                                <td>Change</td>
                                                <td>% Chg</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>   
                   </div>
        </div>
    </div>
    @include('stock180.footer')

    <script>
       
    </script>

</body>
</html>
