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
     return $index_json;
 }
 


