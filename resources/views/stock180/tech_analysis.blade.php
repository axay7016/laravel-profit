    @include('stock180.header')
    <link rel="stylesheet" href="{{asset('/assets/css\fontawesome-free-5.15.2-web\css\all.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <style>
        .low {
            color: #fff;
            color: red;
            font-weight: 500;
        }

        .low:before {
            content: "(";
            font-size: 13px;
        }

        .low:after {
            content: ")";
            font-size: 13px;
        }

        .high {}
        A{
            color: #fff ;
        }
        A:active {
            color: rgb(85, 114, 243);
        }

        A[tabindex]:focus {
            color:blue;
            outline: none;
        }
        .refresh_link{
            color:blue;
        }
        td {
            font-size: 13px;
            text-align: left;
        }

        table.dataTable thead th:active,
        table.dataTable thead td:active {
            outline: none;
        }

        table.dataTable thead .sorting {
            background-image: url(/assets/images/sort_both.png);
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc_disabled {
            cursor: pointer;
            *cursor: hand;
            background-repeat: no-repeat;
            background-position: center right;
        }

        table.dataTable thead th:active,
        table.dataTable thead td:active {
            outline: none;
        }

        table.dataTable thead .sorting_asc {
            background-image: url(/assets/images/sort_asc.png);
        }

        table.dataTable thead .sorting_desc {
            background-image: url(/assets/images/sort_desc.png);
        }

        table.dataTable,
        table.dataTable th,
        table.dataTable td {
            box-sizing: content-box;
        }

        .table>thead>tr>th {
            vertical-align: inherit;
            border-bottom: 2px solid #ddd;
            padding-right: 10px;
            text-align: left;
        }
        .comp_name{
            width: 160px;
        }
        .tick_name{
            width: 0px;
        }
        .asc
        .fa-sort:before {
        content: "\f0dc";
        font-size: 16px;

        background: -webkit-gradient(linear, left top, left bottom, from(rgb(2, 39, 250)), to(rgb(255, 255, 255)));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
        .desc
        .fa-sort:before {
        content: "\f0dc";
        font-size: 16px;
        background: -webkit-gradient(linear, left top, left bottom, from(rgb(255, 255, 255)), to(#000));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
        a{
     color: #007bff;
    text-decoration:none;}
    a:hover{text-decoration:none;}
    #view_by_month{
            padding: 6px 6px !important;
            margin-left: 5px !important;
    }
    @media screen and (max-width: 1023px) {
        #orders{ display: flex; flex-flow: column; }
        .three { order: 3; }
        .two { order: 1; }
        .one { order: 2; }
        .container{padding-top: inherit;}
    }
    </style>
    <!-- Container (TechnicalAnalysis Section) -->

    <div id="TechnicalAnalysis" class="container-fluid  bg-grey">
        <br>

    
        
        <div class="container" >
            <div class="row" id="orders">
                
                <div class="col-md-4 col-sm-12 one">
                    <div class="form-group">
                        <input type="text" name="serach" id="serach" class="form-control" placeholder="Search Recommendations" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 two">
                    <p style="    font-size: 20px;
    text-align: center;
    text-transform: uppercase;
    color: #1e94f4;
    font-weight: 600;"> Current Recommendations</p>
                </div>
                <div class="col-md-4 col-sm-12 text-center three">
                    <span style="display: inline-flex;"> View By Month:
                        <input type='month' class="date_picker" id="date_picker" name='datepickerOne' value="{{ $from_date ?? '' }}" placeholder="">
                        <a href="{{route('tadata')}}">
                            <div class="btn-group btn-group-xs">   
                                <button type="submit" class="btn btn-primary" id="view_by_month">View All</button>
                            </div> 
                        </a>
                    </span>
                </div>
            
            </div>
        </div>
        
        <div class="table_div">
            <table id="" class="table table-condensed display" style="width:100%">
                <thead>
                    <tr style=" background-color:#1e94f4;color:#fff;">
                         <th class="sorting" data-sorting_type="asc" data-column_name="Ticker" data-col_name="Ticker" id="Ticker_icon" rowspan="2">Ticker <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="CompanyName" data-col_name="Company Name" id="CompanyName_icon" rowspan="2">Company Name <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="Listed_at" data-col_name="Listed At" id="Listed_at_icon" rowspan="2">Listed At <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="OnDate" data-col_name="On Date" id="OnDate_icon" rowspan="2">On date <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="Currency" data-col_name="Currency" id="Currency_icon" rowspan="2">Currency <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="AtPrice" data-col_name="Buy Price" id="AtPrice_icon" rowspan="2">Buy Price <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="previous_close" data-col_name="Previous Close" id="previous_close_icon" rowspan="2">Previous Close <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="CurrentPrice" data-col_name="Current Price" id="CurrentPrice_icon" rowspan="2">Current Price <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="SL_Exit" data-col_name="Exit" id="SL_Exit_icon" rowspan="2">Exit <i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="Gain_Loss" data-col_name="Gain/Loss" id="Gain_Loss_icon" rowspan="2">Gain/Loss <i class="fas fa-caret-down"></i></th>
                        <th colspan="2" style="text-align:center;">As of Today </th>
                        <!--<th class="sorting" data-sorting_type="asc" data-column_name="exit_date" data-col_name="exit_date" id="exit_date" rowspan="2">Exit Date <i class="fas fa-caret-down"></i></th>--> 
                    </tr>
                    <tr style=" background-color: #1e94f4;color:#fff;">
                        <th class="sorting" data-sorting_type="asc" data-column_name="glprice" data-col_name="if $1000 Invested" id="glprice_icon">Return / $1000<i class="fas fa-caret-down"></i></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="Action" data-col_name="Action" id="Action_icon" >Action <i class="fas fa-caret-down"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @include('stock180.search_data')
                </tbody>
            </table>
        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    
        </div>
        {{--  <p style="text-align: center;">{!! $tadata ?? ('')->links() !!}</p>  --}}

    </div>

    <script>
        var  ticker_id='';
        $(document).ready(function(){
        
        function clear_icon()
        {
        $('#id_icon').html('');
        $('#post_title_icon').html('');
        }
         var currentRequest = null;
        function fetch_data(page, sort_type, sort_by, query='')
        {
            // console.log(ticker_id); return false;
            // var url="/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&ticker_id="+ticker_id+"&query="+query;
            // console.log(url); return false;
       
          currentRequest =  $.ajax({
        url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
        beforeSend : function()    {           
        if(currentRequest != null) {
            currentRequest.abort();
        }
    },
        success:function(data)
        {
            $('tbody').html('');
            $('tbody').html(data);
        }
        })
        }
        function fetch_api_data(page, sort_type, sort_by, ticker_id,query='')
        {
            // console.log(ticker_id); return false;
            // var url="/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&ticker_id="+ticker_id+"&query="+query;
            // console.log(url); return false;
        if (query=='') {
           $.ajax({
            url:"/pagination/fetch_api_data?sortby=&sorttype="+sort_type+"&ticker_id="+ticker_id+"&query="+query,
            success:function(data)
            {
                var price="$"+data.split("</td>")[7].split("$")[1].split("<")[0];
                $('#icon_'+ticker_id).parent().html(price+" <i style='color:blue;' id='icon_"+ticker_id+"' class='fa fa-refresh' aria-hidden=true></i>");
            }
            });
        }
        else{
            $.ajax({
            url:"/pagination/fetch_api_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&ticker_id="+ticker_id+"&query="+query,
            success:function(data)
            {
                $('tbody').html('');
                $('tbody').html(data);
            }
            });
        }
    }
        function fetch_by_date_data(date)
        {
            // console.log(ticker_id); return false;
            // var url="/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&ticker_id="+ticker_id+"&query="+query;
            // console.log(url); return false;
        
         currentRequest = $.ajax({
        url:"/fetch_by_date?date="+date,
        beforeSend : function()    {           
        if(currentRequest != null) {
            currentRequest.abort();
        }
    },
            success:function(data)
        {
            $('tbody').html('');
            $('tbody').html(data);
        }
        })
        }
        $(document).on('change', '#date_picker', function(){
            $('#serach').val('');
            var date = $('#date_picker').val();
           // console.log(date);
            fetch_by_date_data(date);
        });
            $(document).on('keyup', '#serach', function(){
                $('#date_picker').val('');
                var query = $('#serach').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                fetch_data(page, sort_type, column_name, query);
            });
        
            $(document).on('click', '.sorting', function(){
                var column_name = $(this).data('column_name');
                var col_name = $(this).data('col_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';

                if(order_type == 'asc')
                {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#'+column_name+'_icon').html(col_name+'<i class="fas fa-caret-down"></i>');
                }
                if(order_type == 'desc' )
                {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#'+column_name+'_icon').html(col_name+'<i class="fas fa-caret-up"></i>');
                }
            
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#serach').val();
                fetch_data(page, reverse_order, column_name, query);
            });

            $(document).on('click', '.refresh_price', function(){
                var ticker_id = $(this).data('ticker_id');
                $('#icon_'+ticker_id).addClass('fa-spin');
                // console.log('#icon_'+ticker_id);
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var ticker_id = $(this).data('ticker_id');
                var reverse_order = '';
                if(order_type == 'asc')
                {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
                }
                if(order_type == 'desc' )
                {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
                }
            
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                fetch_api_data(page, reverse_order, column_name,ticker_id);
            });
        
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var query = $('#serach').val();
                $('li').removeClass('active');
                        $(this).parent().addClass('active');
                fetch_data(page, "desc", "OnDate", query);
            });
        });
    </script>
    
    @include('stock180.footer')

