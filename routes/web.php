<?php
use App\Models\StockModels;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes(['register' => true]);
Auth::routes(['auth' => true]);
Auth::routes(['verify' => true]);

Route::group(['prefix' => ''], function () {
    Route::get("/", 'StockController@index')->name('home');
//refresh stock every 5 second
    Route::get("/getstock", 'StockController@getstock')->name('getstock');
    Route::get("/recommendations", 'StockController@tech_analysis')->name('tadata');
    Route::get("/past_recommendations", 'StockController@tech_analysis')->name('past_tadata');
    // ->middleware('auth')
    Route::get("/useful_links", 'StockController@useful_links');
    Route::get("/newsletter", 'StockController@newsletter');
    Route::get("/contact_us", 'StockController@contact_us');
    Route::get("/refresh/{id}/{Ticker}/{Listed_at}", 'StockController@refreshapicall');
    Route::post("/view_by_month", 'StockController@view_by_month');
    Route::post("/sub_email", 'StockController@sub_email');
    Route::get("/unsubscribe/{sub_email}", 'StockController@unsubscribe');
    Route::get("/insertprotfolio/{ticker}/{user_id}", 'StockController@client_protfolio')->name('client_protfolio');
    
    //  about site
    Route::get('/terms-and-conditions', 'StockController@term_condition')->name('term_condition');

    //market mover single page
    Route::get("/marketmover/{mover}",'StockController@marketMovers');
    Route::get('/pagination', 'StockController@tech_analysis');
    
    Route::get('/pagination/fetch_data', 'StockController@fetch_data');
    Route::get('/pagination/fetch_api_data', 'StockController@fetch_api_data');
    Route::get('/fetch_by_date', 'StockController@fetch_by_date');

    Route::get('api_search_result','StockController@api_search_result')->name('api_search_result');

    Route::get('/autocomplete', 'ChartAPIController@index');
    Route::post('/autocomplete/fetch', 'ChartAPIController@fetch')->name('autocomplete.fetch');

 
});
 Route::post('laravel-send-email', 'EmailController@sendEmail');