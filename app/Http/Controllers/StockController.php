<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StockModels;
use App\Models\Leads;
use App\Models\Recentquotes;
use App\Models\ClientProtfolio;
use Illuminate\Support\Facades\Auth;
use App\Models\Newsletter;
use App\Models\UsefulLink;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Cookie;
use Validator;
use Session;
use Carbon\Carbon;
use App\Mail\SubMail;
use Illuminate\Support\Facades\Mail;
use URL;
use Illuminate\Support\Facades\Route;

date_default_timezone_set('Canada/Eastern');
class StockController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
        // $this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        /******************************
         ********* home page*****************
         ***********************************/
        $data = [];
        $tadata = StockModels::where('status', 'unhide')->get();

        $client = new \GuzzleHttp\Client();
        //news
        $request = $client->get('https://financialmodelingprep.com/api/v3/stock_news?tickers=SPY,DIA,TSLA,AAPL,FB,GOOG,AMZN,NFLX,XOM,MSFT,GE,CAT,BRK-B,BA&limit=70&apikey=5e73cb5c198ff087f5b3e59afab15e08');
        $response = $request->getBody();
        $json = json_decode($response, true);
        $news = [];
        foreach ($json as $key=>$data) {
            # code...,
            if(!(in_array($data['symbol'],$news)))
            {
                array_push($news,$data['symbol']);
            }
            else{unset($json[$key]);}  
        }
        $json = array_slice($json, 0, 11);
        //gainer api
        $gainer_json = gainer();
        $gainer_json = array_slice($gainer_json, 0, 10);

        //loser api
        $loser_json = loser();
        $loser_json = array_slice($loser_json, 0, 10);
        
        //active api
        $active_json = active();
        $active_json = array_slice($active_json, 0, 10);

        //Commodites 
      
        $commodities_json = commodities();
        $commodities_json = array_slice($commodities_json, 0, 10);

        //Crypto 
        $crypto_json = crypto();
        $crypto_json = array_slice($crypto_json, 0, 10);

        //Major Index 
        $index_json = major_index();

        //recent quetos
        $recentData = new Recentquotes();
        $recent_quotes = $recentData->getData();

        //view portfolio
        $user_id = isset(Auth::user()->id) ? Auth::user()->id : null;
        $client_data = ClientProtfolio::where('user_id',$user_id)->get();
        
        $data = array(
            'tadata'=>$tadata,
            'json'=>$json,
            'gainer'=>$gainer_json,
            'loser'=>$loser_json,
            'active'=>$active_json,
            'commodities'=>$commodities_json,
            'crypto'=>$crypto_json,
            'recent_quotes'=>$recent_quotes,
            'major_index'=>$index_json,
            'client_data' => $client_data,
            'user_id' => $user_id,
        );

        return view('stock180.index',$data);
    }
    //refresh stock every 5 second
    public function getstock()
    {
         $datas = [];
        //gainer api
        $gainer_json = gainer();
        $gainer_json = array_slice($gainer_json, 0, 10);

        //loser api
        $loser_json = loser();
        $loser_json = array_slice($loser_json, 0, 10);
        
        //active api
        $active_json = active();
        $active_json = array_slice($active_json, 0, 10);

        //Commodites 
        $commodities_json = commodities();
        $commodities_json = array_slice($commodities_json, 0, 10);

        //Crypto 
        $crypto_json = crypto();
        $crypto_json = array_slice($crypto_json, 0, 10);

        //Major Index 
        $index_json = major_index();
        $gainers="";$loser="";$active="";$commodites="";$crypto="";$m_index="";
        foreach($gainer_json as $data)
        {
                $gainers.='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="'.URL::to("api/chart?ticker=").''.$data->ticker.'">'.$data->ticker.'</a><span class="tooltiptext">'.$data->companyName.'</span></td>
                    <td class="iyjjgb" style="color:green;">'.$data->price.'</td>
                    <td class="JgXcPd" style="color:green;">'.$data->changes.'</td>
                    <td class="iyjjgb" style="color:green;">'.str_replace(array("(",")"),"",$data->changesPercentage).'</td>
            </tr>';
        }
            foreach($loser_json as $data)
        {
                $loser.='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="'.URL::to("api/chart?ticker=").''.$data->ticker.'">'.$data->ticker.'</a><span class="tooltiptext">'.$data->companyName.'</span></td>
                    <td class="iyjjgb" style="color:red;">'.$data->price.'</td>
                    <td class="JgXcPd" style="color:red;">'.$data->changes.'</td>
                    <td class="iyjjgb" style="color:red;">'.str_replace(array("(",")"),"",$data->changesPercentage).'</td>
            </tr>';
        }
            foreach($active_json as $data)
        {
            $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
                $active.='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="'.URL::to("api/chart?ticker=").''.$data->ticker.'">'.$data->ticker.'</a><span class="tooltiptext">'.$data->companyName.'</span></td>';
                if($chaneg > 0){
                    $active.='<td class="iyjjgb" style="color:green;">'.$data->price.'</td> 
                    <td class="JgXcPd" style="color:green;">'.$data->changes.'</td>
                    <td class="iyjjgb" style="color:green;">'.str_replace(array("(",")"),"",$data->changesPercentage).'</td>';
                }elseif($chaneg == 0){
                    $active.='<td class="iyjjgb" style="color:black;">'.$data->price.'</td> 
                    <td class="JgXcPd" style="color:black;">'.$data->changes.'</td>
                    <td class="iyjjgb" style="color:black;">'.str_replace(array("(",")"),"",$data->changesPercentage).'</td>';
                }else{
                    $active.='<td class="iyjjgb" style="color:red;">'.$data->price.'</td> 
                    <td class="JgXcPd" style="color:red;">'.$data->changes.'</td>
                    <td class="iyjjgb" style="color:red;">'.str_replace(array("(",")"),"",$data->changesPercentage).'</td>';
                }
                    
            $active.='</tr>';
        }
         foreach($commodities_json as $data)
        {
            $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
            if($chaneg > 0){
                $color = "green";
            }elseif($chaneg == 0){
                $color = "black";
            }else{
                $color = "red";
            }
                $commodites.='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="#">'.$data->symbol.'</a><span class="tooltiptext">'.$data->name.'</span></td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format($data->price,2).'</td>
                    <td class="JgXcPd" style="color:'.$color.';">'.number_format($data->change,2).'</td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format(str_replace(array("(",")"),"",$data->changesPercentage),2).'</td>
            </tr>';
        }

        foreach($crypto_json as $data)
        {
            $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
            if($chaneg > 0){
                $color = "green";
            }elseif($chaneg == 0){
                $color = "black";
            }else{
                $color = "red";
            }
                $crypto .='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="#">'.$data->symbol.'</a><span class="tooltiptext">'.$data->name.'</span></td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format($data->price,2).'</td>
                    <td class="JgXcPd" style="color:'.$color.';">'.number_format($data->change,2).'</td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format(str_replace(array("(",")"),"",$data->changesPercentage),2).'</td>
            </tr>';
        }

        foreach($index_json as $data)
        {
            $chaneg = str_replace(array('(',')','+','%'),"",$data->changesPercentage);
            if($chaneg > 0){
                $color = "green";
            }elseif($chaneg == 0){
                $color = "black";
            }else{
                $color = "red";
            }
                $m_index .='<tr>
                    <td class="JgXcPd" id="tooltip"><a href="#">'.$data->name.'</a><span class="tooltiptext">'.$data->name.'</span></td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format($data->price,2).'</td>
                    <td class="JgXcPd" style="color:'.$color.';">'.number_format($data->change,2).'</td>
                    <td class="iyjjgb" style="color:'.$color.';">'.number_format(str_replace(array("(",")"),"",$data->changesPercentage),2).'</td>
            </tr>';
        }
         $datas = array
         (
             'gainer'=>$gainers,
             'loser'=>$loser,
             'active'=>$active,
             'commodites'=>$commodites,
             'crypto'=>$crypto,
             'm_index'=>$m_index
         );
        echo json_encode($datas);
    }

    //add client protfolio
    public function client_protfolio($ticker,$id){
        $data = ClientProtfolio::where('user_id',$id)->get();
        $ticker_name = $data[0]->ticker;
        $user_id = $data[0]->user_id;
        if($ticker != $ticker_name || $user_id != $id){
            ClientProtfolio::insert([
                'user_id'=>$id,
                'ticker'=>$ticker
            ]);
            $message = "add successfull";
        }else{
            $message = "It's already Added";
        }
        return $message;

    }

    //marketmovers
    public function marketMovers($mover){
        return view('stock180.market_mover',['data'=>$mover]);
    }
    public function api_search_result()
    {
        return view('stock180.api_search_result');
    }
    public function view_by_month(Request $request)
    {
        /******************************
         ********* View by month funtion*****************
         ***********************************/
        $posted_data = request()->all();

        $datepickerOne = $posted_data['datepickerOne'];
        $datepicker = $datepickerOne . '-01';
        $d = strtotime($datepicker);
        $curMonth = date('Y-m-d', $d);
        Session::put('datedata', $datepickerOne);

        //    dd($newformat);
        $final = strtotime("+1 month", strtotime($curMonth));
        $nextMonth = date('Y-m-d', $final);
        Session::put('nextmonth', $nextMonth);


        $tadata = StockModels::whereDate('OnDate', '>=', $datepicker)->where('status', '>=', 'unhide')->whereDate('OnDate', '<=', $nextMonth)->orderBy('ondate','DESC')->paginate(20);
        // dd($datepicker,$tadata);

        $data = [
            'from_date' => $datepickerOne,
            'tadata' => $tadata
        ];

        if (!$tadata->isEmpty()) {
            return view('stock180.tech_analysis', $data);
        } else {
            return view('stock180.tech_analysis', $data);
        }
    }

    public function refreshapicall($id,$Ticker,$Listed_at)
    {
        
        /*********************** get quote funtion on click*******************/
        // $Listed_at0 = 'TSX';
        $Listed_at1 = 'TSXV';
        $tadata = new StockModels();
        if (Session::get('datedata')) {
            $datedata = Session::get('datedata');
            $nextmonth = Session::get('nextmonth');
           
            if ($Listed_at  == $Listed_at1) 
            {
                
            } 
            else 
            {
                $client = new \GuzzleHttp\Client();
                $request = $client->get('https://financialmodelingprep.com/api/v3/quote/' . $Ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
                $response = $request->getBody();
                $json = json_decode($response, true);
                if (isset($json[0]['price']) && isset($json[0]['previousClose'])) {
                    $CurrentPrice = $json[0]['price'];
                    $previous_close = $json[0]['previousClose'];
                    StockModels::where('Ticker', $Ticker)
                        ->update(['CurrentPrice' => $CurrentPrice, 'previous_close' => $previous_close]);
                        
                }
            } 
     
            $data = StockModels::select('*')->get();
            $json = json_decode($data, true);
            foreach ($json as $key => $value) {
                $id = $value['id'];
                $Action = $value['Action'];
                $SL_Exit =  $value['SL_Exit'];
                $ondate = $value['OnDate']; 
                $AtPrice = $value['AtPrice']; //buy price
                $Gain_Loss = $value['Gain_Loss'];
                $CurrentPrice = $value['CurrentPrice'];
                $glprice = $value['glprice'];
                if (strcmp(strtolower($Action),strtolower('Exit')) == 0) {
                    $Gain_Loss = 'Realised';
                    $numofshares = 1000 / $AtPrice;
                    $CurrentValue = $numofshares * $SL_Exit;
                    $glprice = $CurrentValue - 1000;    
                   
                } else {
                    $Gain_Loss = 'Unrealised';
                    $numofshares = 1000 / $AtPrice;
                    $CurrentValue = $numofshares * $CurrentPrice;
                    $glprice =  $CurrentValue - 1000;         // (this is to be displayed to the user in Gain/Loss $)
          
                }
               
                StockModels::where('id', $id)  // find your data by their id
                    // ->limit(1)  // optional - to ensure only one record is updated.
                    ->update(array('glprice' => $glprice,'Gain_Loss'=> $Gain_Loss, 'Action' => $Action));
            }

            $status = 'unhide';
            $data = StockModels::where('status', $status)->where('Ondate', '>', $datedata)->where('Ondate', '<', $nextmonth)->orderBy('ondate', 'DESC')->paginate(20);
            return view('stock180.tech_analysis', compact('data'));

            // ***********************************************************
            $nextmonth = Session::forget('nextmonth');
            $datedata = Session::forget('datedata');
        } 
        else 
        {
            if(strcmp(strtolower($Listed_at),strtolower($Listed_at1)) == 0)
            {
                // do nothing
                // dd('do nothing');
            } 
            else 
            {
                //    dd($Ticker, $Listed_at);
                $client = new \GuzzleHttp\Client();
                $request = $client->get('https://financialmodelingprep.com/api/v3/quote/' . $Ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
                $response = $request->getBody();
                $json = json_decode($response, true);
                // dd($json);
                if (isset($json[0]['price']) && isset($json[0]['previousClose'])) {
                    $CurrentPrice = $json[0]['price'];
                    $previous_close = $json[0]['previousClose'];
                    // dd($previous_close);
                    StockModels::where('id', $id)
                        ->update(['CurrentPrice' => $CurrentPrice, 'previous_close' => $previous_close]);
                }
            } 

            $data = StockModels::where('status','unhide')->select('*')->get();
            $json = json_decode($data, true);

            foreach ($json as $key => $value) {
                $id = $value['id'];
                $Action = $value['Action'];
                $SL_Exit =  $value['SL_Exit'];
                $ondate = $value['OnDate'];
                $AtPrice = $value['AtPrice'];
                $Gain_Loss = $value['Gain_Loss'];
                $CurrentPrice = $value['CurrentPrice'];
                $glprice = $value['glprice'];
                // dd($Action);
                if (strcmp(strtolower($Action),strtolower('Exit')) == 0) {
                    $Gain_Loss = 'Realised';
                    $numofshares = 1000 / $AtPrice;
                    $CurrentValue = $numofshares * $SL_Exit;
                    $glprice = $CurrentValue - 1000;   
                    // dd($glprice);
                   
                } else {
                    $Gain_Loss = 'Unrealised';
                    $numofshares = 1000 / $AtPrice;
                    $CurrentValue = $numofshares * $CurrentPrice;
                    $glprice = $CurrentValue - 1000; 
                    // dd($glprice); 
                           
                }
               
                StockModels::where('id', $id)->where('status','unhide')    
                    ->update(array('glprice' => $glprice, 'Gain_Loss'=> $Gain_Loss, 'Action' => $Action));  // update the record in the DB. 
                    // dd($glprice); 
            }

            $status = 'unhide';
            
        $data = StockModels::where('status', $status)->orderBy('ondate', 'DESC')->paginate(20);
            return view('stock180.tech_analysis', compact('data'));
        }
    }
    public function tech_analysis(Request $request)
    {
        
        
        if (Auth::check()) {
            // The user is logged in...
        }
        $view = '';
        $q = '';
        
        if(Route::currentRouteName() == "tadata"){
            $view = 'stock180.tech_analysis';
            $data = StockModels::orderBy('OnDate', 'DESC')
                ->Where(function($query) {
                    $query->whereNull('exit_date')
                            ->orwhere(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'<=',30);
                })
                ->paginate(20);
            }elseif(Route::currentRouteName() =="past_tadata"){
               $view = 'stock180.past_recommendation';  
               $data = StockModels::orderBy('OnDate', 'DESC')
                ->Where(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'>=',30)
                ->paginate(20);
            }
            
            
        $view_data['q'] = $q;
        $view_data['data'] = $data;
            return view($view)->with($view_data);
        
        
    }
    function fetch_data(Request $request)
    {
        $view = "";
        $request_data = $request->all();
        $page = $request_data['page'];
        $this->records_per_page = 20;

        if($request->ajax())
        {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        if ($sort_by=='' || $sort_type== '') {
            $sort_by = 'id';
            $sort_type = 'asc';
        }
        $query = $request->get('query');
        
        $query = str_replace(" ", "%", $query);

        $flag = $request->get('flag');

        if($flag != ''){
            $view= 'stock180.past_render';
            $data1 = StockModels::Where(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'>=',30)
                        ->where(function($s) use ($query){
                            $s->Where('Ticker', 'like', '%'.$query.'%')
                            ->orWhere('CompanyName', 'like', '%'.$query.'%')
                            ->orWhere('SL_Exit', 'like', '%'.$query.'%')
                            ->orWhere('Gain_Loss', 'like', '%'.$query.'%')
                            ->orWhere('Listed_at', 'like', '%'.$query.'%')
                            ->orWhere('glprice', 'like', '%'.$query.'%')
                            ->orWhere('Action', 'like', '%'.$query.'%');
                        })
                        ->orderBy($sort_by, $sort_type);
        }else{
            $data1 = StockModels::Where(function($query) {
                $query->whereNull('exit_date')
                        ->orwhere(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'<=',30);
                        })
                        ->where(function($s) use ($query){
                            $s->Where('Ticker', 'like', '%'.$query.'%')
                            ->orWhere('CompanyName', 'like', '%'.$query.'%')
                            ->orWhere('SL_Exit', 'like', '%'.$query.'%')
                            ->orWhere('Gain_Loss', 'like', '%'.$query.'%')
                            ->orWhere('Listed_at', 'like', '%'.$query.'%')
                            ->orWhere('glprice', 'like', '%'.$query.'%')
                            ->orWhere('Action', 'like', '%'.$query.'%');
                        })
                        ->orderBy($sort_by, $sort_type);
                        $view= 'stock180.search_data';
        }
                        //$record_starts = $this->records_per_page * ($page - 1) + 1;
                        //$record_ends = $this->records_per_page * ($page - 1) + count($data);
                         //$view_data['record_starts'] = $record_starts;
                        //$view_data['record_ends'] = $record_ends;

            if ($query == '') {
                $data = $data1->paginate($this->records_per_page);
            }
            else{
                $data = $data1->get();
            }
            $view_data['page'] = $page;
            $view_data['data'] = $data;
            $view_data['q'] = $query;
        return view($view)->with($view_data)->render();
        }
    }
    function fetch_api_data(Request $request)
    {
      $ticker_id = 0;
      $view = ""; 
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
      if ($sort_by=='' || $sort_type== '') {
        $sort_by = 'id';
        $sort_type = 'asc';
      }
      $query = $request->get('query');
      
      $query = str_replace(" ", "%", $query);
      $q = $query;
     
        $ticker_id=1;
        $Ticker='';
        $Listed_at='';
        $ticker_id = $request->get('ticker_id');
        $Action='';
        $AtPrice='';
        $SL_Exit='';
        $flag = $request->get('flag');

        $data = StockModels::Where('id', '=',  $ticker_id)->first();

        $Ticker = $data['Ticker'];
        $Listed_at = $data['Listed_at'];
        $Action = $data['Action'];
        $AtPrice = $data['AtPrice'];
        $glprice = $data['glprice'];
        $SL_Exit = $data['SL_Exit'];
        
            if (strcmp(strtolower($Action),strtolower('Exit')) == 0) {
                $Gain_Loss = 'Realised';
                $numofshares = 1000 / $AtPrice;
                $CurrentValue = $numofshares * $SL_Exit;
                $glprice = $CurrentValue - 1000;    
            }
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://financialmodelingprep.com/api/v3/quote/' . $Ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
        $response = $request->getBody();
        $json = json_decode($response, true);
        

        if (isset($json[0]['price']) && isset($json[0]['previousClose'])) {
            $CurrentPrice = $json[0]['price'];
            $previous_close = $json[0]['previousClose'];
            //dd($ticker_id,$Ticker);
            StockModels::where('Ticker', $Ticker)->where('id',$ticker_id)
                ->update(['CurrentPrice' => $CurrentPrice, 'previous_close' => $previous_close, 'glprice'=>$glprice]);
                
        }
        if($flag != ''){
            $view= 'stock180.past_render';
            $data = StockModels::Where('Ticker', 'like', '%'.$query.'%')
            ->Where(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'>=',30)
            ->Where('id', '=',  $ticker_id)
            ->orderBy($sort_by, $sort_type)
            ->paginate(20);
        }else{
      
      $data = StockModels::Where('Ticker', 'like', '%'.$query.'%')
                    ->Where(function($query) {
                        $query->whereNull('exit_date')
                                ->orwhere(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'<=',30);
                    })
                    ->Where('id', '=',  $ticker_id)
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(20);
                    $view = 'stock180.search_data';
                }
        $view_data['q'] = $q;
        $view_data['data'] = $data;
        return view($view)->with($view_data)->render();

        //  return view('stock180.search_data', compact('data'))->render();
     }
    }
    function fetch_by_date(Request $request)
    {
        $view = "";
     if($request->ajax())
     {
      $datepickerOne = $request->get('date');
      $datepicker = $datepickerOne . '-01';
      $d = strtotime($datepicker);
      $q = '';
      $curMonth = date('Y-m-d', $d);
      Session::put('datedata', $datepickerOne);

      //    dd($newformat);
      $final = strtotime("+1 month", strtotime($curMonth));
      $nextMonth = date('Y-m-d', $final);
      Session::put('nextmonth', $nextMonth);
    
      if($flag != ''){
        $view= 'stock180.past_render';
        $data = StockModels::Where('OnDate', '>=', $datepicker)
        ->Where(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'>=',30)
        ->where('status', '>=', 'unhide')
        ->whereDate('OnDate', '<=', $nextMonth)->orderBy('ondate', 'DESC')->paginate(20);
    }else{
        $data = StockModels::Where('OnDate', '>=', $datepicker)
        ->Where(function($query) {
                              $query->whereNull('exit_date')
                                    ->orwhere(DB::raw('DATEDIFF(CURRENT_TIME,exit_date)'),'<=',30);
                  })
        ->where('status', '>=', 'unhide')
        ->whereDate('OnDate', '<=', $nextMonth)->orderBy('ondate', 'DESC')->paginate(20);
        $view = 'stock180.search_data';
    }

      $view_data['q'] = $q;
      $view_data['data'] = $data;
      return view($view)->with($view_data)->render();
     }
    }

    public function useful_links()
    {
        /******************************
         ********* useful link page*****************
         ***********************************/
        $status = 'Show';
        $useful_links = UsefulLink::where('Visible', $status)->orderByDesc("created_at")->paginate(20);
        return view('stock180.useful_links', compact('useful_links'));
    }
    public function newsletter()
    {
        /******************************
         ********* newsletter page *****************
         ***********************************/
        $status = 'Show';
        $newsletter = Newsletter::where('Visible', $status)->orderByDesc("created_at")->paginate(20);
        return view('stock180.newsletter', compact('newsletter'));
    }
    public function contact_us()
    {

        /******************************
         ********* contect us page *****************
         ***********************************/
        return view('stock180.contact_us');
    }

    public function term_condition()
    {

        /******************************
         ********* term_condition us page *****************
         ***********************************/
        return view('stock180.about-us.terms-and-conditions');
    }
    #sub email function
    public function sub_email(Request $request)
    {
        $posted_data = request()->all();
        $validator = Validator::make($posted_data, array(
            'sub_email' => 'required|email',
           

        ), array(
            'sub_email.required' => 'Enter your email address.'
        ));
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'ERROR',
                'message' => 'Please give valid email!!',
                'errors' => $validator->errors()
            ]);
        }


        $sub_email = $posted_data['sub_email'];
        try{
            $leads_data = new Leads();
            $leads_data->email = $sub_email;
            $leads_data->DoNotSend = 0;
            $leads_data->Unsubscribe = 0;
            $leads_data->created_at = Carbon::now();
            $leads_data->save();
            $data=['sender'=>$sub_email];
            Mail::to($sub_email)
            
            ->send(new SubMail($data));
            return response()->json([
                'status' => 'OK',
                'message' => 'Thank You for Subscribing our newsletter ',
                'redirect_url' => url('/')
            ]);
        }
        catch (\Exception $e){
            return response()->json([
                'status' => 'ERROR',
                'message' => 'Failed!!',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function unsubscribe($sub_email)
    {
        #email unsubscribe function
        $data = [];
        try {
            $res = Leads::where('email',$sub_email)
                ->limit(1)
                ->update(array('Unsubscribe' => 1));
                if ($res) {

                    $data['Unsubscribe'] = 'Unsubscribed';
                    return view('stock180.unsubcribed',$data);
                }else{
                    $data['Unsubscribe'] = 'Already unsubscribed';
                    return view('stock180.unsubcribed',$data);
                }
               
        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
  
}