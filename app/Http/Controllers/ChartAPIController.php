<?php
namespace App\Http\Controllers;
use App\Models\StockModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\Recentquotes;
use Carbon\Carbon;
use Redirect;
use Session;
date_default_timezone_set('Canada/Eastern');
class ChartAPIController extends Controller
{
    public function getMacLinux() {
        exec('netstat -ie', $result);
         if(is_array($result)) {
          $iface = array();
          foreach($result as $key => $line) {
            if($key > 0) {
              $tmp = str_replace(" ", "", substr($line, 0, 10));
              if($tmp <> "") {
                $macpos = strpos($line, "HWaddr");
                if($macpos !== false) {
                  $iface[] = array('iface' => $tmp, 'mac' => strtolower(substr($line, $macpos+7, 17)));
                }
              }
            }
          }
          return $iface[0]['mac'];
        } else {
          return "notfound";
        }
      }
    public function searchApi(Request $request)
    { 
        $date = Carbon::now();
        // //Get date and time
        // $date->toDateTimeString();
        //Get date
        //chart cantroller
        try {
            
        if($request->get('ticker'))
        {
          $user_id = isset(Auth::user()->id) ? Auth::user()->id : null ;
            if(URL::previous() != url()->full()){
                $macAddr = exec('getmac');
            Recentquotes::insert([
                'machine_id'=>strtok($macAddr, ' '),
                'ticker'=>$request->get('ticker'),
                'user_id'=> $user_id,
                'quote_date'=> Carbon::now()->toDateTimeString()
            ]);
            }
        $ticker = $request->get('ticker');
                $client = new \GuzzleHttp\Client();
                $request = $client->get('https://financialmodelingprep.com/api/v3/historical-chart/5min/' . $ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
                $rtq = $client->get('https://financialmodelingprep.com/api/v3/quote/' . $ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
                
                $response = $request->getBody();
                $response3 = $rtq->getBody();
                $json = json_decode($response, true);
                $json3 = json_decode($response3, true);

                $symbol = $json3[0]['symbol'];
                $name = $json3[0]['name'];
                $realTimePrice =number_format((float)$json3[0]['price'], 2, '.', '');

                $closeDate = $json[0]['date'];
                $open = number_format((float)$json3[0]['open'], 2, '.', '');
                $close =number_format((float)$json3[0]['previousClose'], 2, '.', '');
                $high =number_format((float)$json3[0]['dayHigh'], 2, '.', '');
                $low =number_format((float)$json3[0]['dayLow'], 2, '.', '');
                $volume = $json3[0]['volume'];
                $eps=number_format((float)$json3[0]['eps'], 2, '.', '');
                $timestamp=$json3[0]['timestamp'];
                $priceAvg50= number_format((float)$json3[0]['priceAvg50'], 2, '.', '');
                $sharesOutstanding=$json3[0]['sharesOutstanding'];
                $changesPercentage=$json3[0]['changesPercentage'];
                $priceAvg200= number_format((float)$json3[0]['priceAvg200'], 2, '.', '');
                $pe= number_format((float)$json3[0]['pe'], 2, '.', '');
                $exchange=$json3[0]['exchange'];
                $earningsAnnouncement=Carbon::parse($json3[0]['earningsAnnouncement'])->format('Y-m-d');

                $low_52 =number_format((float)$json3[0]['yearLow'], 2, '.', ''); 
                $high_52 =number_format((float)$json3[0]['yearHigh'], 2, '.',''); 
                $marketCap = $json3[0]['marketCap'];
                $grothPrice = $json3[0]['open']-$json3[0]['previousClose'];
                // dd($grothPrice);
                $result[] = ['Time','Price'];
                foreach($json as $key => $value) {
                    $result[] = [$value['date'], $value['close']];
                }
                //    convert number into k,l,b,t format
                function thousandsCurrencyFormat($num) {

                    if($num>1000) {
                  
                          $x = round($num);
                          $x_number_format = number_format($x);
                          $x_array = explode(',', $x_number_format);
                          $x_parts = array('k', 'm', 'b', 't');
                          $x_count_parts = count($x_array) - 1;
                          $x_display = $x;
                          $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
                          $x_display .= $x_parts[$x_count_parts - 1];
                  
                          return $x_display;
                  
                    }
                    return $num;
                    // for example thousandsCurrencyFormat(3000) - 3k
                }
                $client = new \GuzzleHttp\Client();
                $request = $client->get('https://financialmodelingprep.com/api/v3/stock_news?tickers='. $ticker .'&limit=11&apikey=5e73cb5c198ff087f5b3e59afab15e08');
                $response = $request->getBody();
                $newsdata = json_decode($response, true);

                $company_request = $client->get('https://financialmodelingprep.com/api/v4/company-outlook?symbol='. $ticker .'&apikey=5e73cb5c198ff087f5b3e59afab15e08');
                $outlook_response =$company_request->getBody();
                $companyoutlook = json_decode($outlook_response, true);
                $range_number = explode('-',$companyoutlook['profile']['range']);
                $companyoutlook['profile']['range'] = number_format($range_number[0],2,'.','').' - '.number_format($range_number[1],2,'.','');
               
                $data_res = array(
                    'ticker' => $symbol,
                    'name' => $name,
                    'lastPrice' => $realTimePrice,
                    'closeDate' => $closeDate,
                    '$grothPrice' => $grothPrice,
                    'open' => $open,
                    'close' => $close,
                    'low' => $low,
                    'eps'=>$eps,
                    'priceAvg50'=>$priceAvg50,
                    'sharesOutstanding'=>number_format($sharesOutstanding),
                    'changesPercentage'=>$changesPercentage,
                    'exchange'=>$exchange,
                    'earningsAnnouncement'=>$earningsAnnouncement,
                    'priceAvg200'=>$priceAvg200,
                    'pe'=>$pe,
                    'timestamp'=>$timestamp,
                    'high' => $high,
                    'high_52' => $high_52,
                    'low_52' => $low_52,
                    'volume' => number_format($volume),
                    'marketCap' => thousandsCurrencyFormat($marketCap),
                    'user_id'=>$user_id
                );
                // dd(json_encode($result));

                return view('stock180.display_grap',array('data_res' => $data_res, 'newsdata' => $newsdata,'outlook'=>$companyoutlook))->with('visitor',json_encode($result));  
                   
        } 
    }
        catch (\Exception $e) {
        return redirect()->back()->with('flash_message', 'Task successfully added!');
          }
        
    }
    //
    function index()
    {
     return view('stock180.index');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      //$data = StockModels::where('Ticker', 'LIKE', "%{$query}%")->take(3)->get();
      $client = new \GuzzleHttp\Client();
      $request = $client->get('https://financialmodelingprep.com/api/v3/search?query=' . $query . '&limit=5&apikey=5e73cb5c198ff087f5b3e59afab15e08');
      $response = $request->getBody();
      $json = json_decode($response, true);
      $output = '<div id="search-box-result" class="stock-search-result" style="max-height: 450px;">';
      foreach($json as $row)
      {
       $output .= '<a class="ticker_name" style="color:#000!important;" href="'.url('/').'/api/chart?ticker='.$row["symbol"].'" tag="div" class="search-result-item"><div class="ticker_res">
       <span class="">'.$row["symbol"].'-'.$row["name"].'</span></div></a>';
      }
      $output .= '</div>';
      echo $output;
     }
    }
}
