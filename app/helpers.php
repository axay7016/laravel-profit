<?php

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

  //gainer api
 function gainer()
 {
 	 $client=new \GuzzleHttp\Client();
 	$gainer_request = $client->get('https://financialmodelingprep.com/api/v3/gainers?limit=5&apikey=5e73cb5c198ff087f5b3e59afab15e08');
        $gainer_responce = $gainer_request->getBody();
    $gainer_json = json_decode($gainer_responce);
    return $gainer_json;
 }
 //loser api
 function loser()
 {
 	 $client=new \GuzzleHttp\Client();
 	 $loser_request = $client->get('https://financialmodelingprep.com/api/v3/losers?apikey=5e73cb5c198ff087f5b3e59afab15e08');
     $loser_responce = $loser_request->getBody();
     $loser_json = json_decode($loser_responce);
     return $loser_json;
 }

//active api
 function active()
 {
 	 $client=new \GuzzleHttp\Client();
 	 $active_request = $client->get('https://financialmodelingprep.com/api/v3/actives?apikey=5e73cb5c198ff087f5b3e59afab15e08');
     $active_responce = $active_request->getBody();
     $active_json = json_decode($active_responce);
     return $active_json;
 }

//Commodites 
 function commodities()
 {
 	 $client=new \GuzzleHttp\Client();
 	 $commodities_request = $client->get('https://financialmodelingprep.com/api/v3/quotes/commodity?apikey=5e73cb5c198ff087f5b3e59afab15e08');
        $commodities_responce = $commodities_request->getBody();
        $commodities_json = json_decode($commodities_responce);
     return $commodities_json;
 }

 //Crypto 
 function crypto()
 {
 	 $client=new \GuzzleHttp\Client();
 	  $crypto_request = $client->get('https://financialmodelingprep.com/api/v3/quotes/crypto?apikey=5e73cb5c198ff087f5b3e59afab15e08');
        $crypto_responce = $crypto_request->getBody();
        $crypto_json = json_decode($crypto_responce);
     return $crypto_json;
 }

//Major Index
function major_index()
{
     $client=new \GuzzleHttp\Client();
       $index_request = $client->get('https://financialmodelingprep.com/api/v3/quotes/index?apikey=5e73cb5c198ff087f5b3e59afab15e08');
       $index_responce = $index_request->getBody();
       $index_json = json_decode($index_responce);
      $major_indexs = array("^GSPC"=>"S&P 500","^IXIC"=>"NASDAQ COMPOSITE","^DJI"=>"DOW JONES INDUSTRIAL","^RUT"=>"RUSSEL 2000","^NDX"=>"NASDAQ 100","^VIX"=>"CBOE Volatility Index","^GSPTSE"=>"S&P/TSX Composite index");
      $datas=[];
       foreach ($index_json as $key=>$data) 
       {
           if(array_key_exists($data->symbol,$major_indexs))
           {

             $index_json[$key]->name=$major_indexs[$data->symbol];
             if($data->symbol=="^GSPC")
             {$datas[0] = $index_json[$key];}
             elseif($data->symbol=="^IXIC")
             {$datas[1] = $index_json[$key];}
             elseif($data->symbol=="^DJI")
             { $datas[2] = $index_json[$key];}
             elseif($data->symbol=="^RUT")
             { $datas[3] = $index_json[$key];}
             elseif($data->symbol=="^NDX")
             { $datas[4] = $index_json[$key];}
             elseif($data->symbol=="^VIX")
             { $datas[5] = $index_json[$key];}
             elseif($data->symbol=="^GSPTSE")
             { $datas[6] = $index_json[$key];}
           }
           else{unset($index_json[$key]);}  
       }
       ksort($datas);
    return $datas;
}
 


