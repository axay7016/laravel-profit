<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\StockModels;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

date_default_timezone_set('Canada/Eastern');

class ApiCallUpdate extends Command
{
    use DispatchesJobs;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:cron_apicallupdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // dd(now());

        $query = StockModels::where('status', 'unhide');
        $query->selectRaw("id,Ticker,Listed_at");
        $records = $query->get();
        if ($records->count() > 0) {
            $this->info('Records found: ' . $records->count());
            foreach ($records as $rec) {
                $id = $rec->id;
                $Ticker = $rec->Ticker;
                $Listed_at = $rec->Listed_at;
                // $this->info($Listed_at);
                
                     // api call
                     $client = new \GuzzleHttp\Client();
                     $request = $client->get('https://financialmodelingprep.com/api/v3/quote/' . $Ticker . '?apikey=5e73cb5c198ff087f5b3e59afab15e08');
                     $response = $request->getBody();
                     $json = json_decode($response, true);
                     if (isset($json[0]['price']) && isset($json[0]['previousClose'])) {
                         $CurrentPrice = $json[0]['price'];
                         //    dd($CurrentPrice);
                         $previous_close = $json[0]['previousClose'];
                         $this->info($Listed_at.'==>'.$previous_close.'-'.$Ticker.'-'.$CurrentPrice);
                         // update to table current price
                         StockModels::where('Ticker', $Ticker)
                             ->update(['CurrentPrice' => $CurrentPrice, 'previous_close' => $previous_close]);
                     } 
                     else{
                        $this->info('Api call not working for Tiker-'.$Ticker);
                    }
                     // end api call tsx
                
                
            }
        }
    }
}
