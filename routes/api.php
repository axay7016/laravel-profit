<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('chart', 'ChartAPIController@searchApi')->name('api.chart');
Route::get('refreshData', 'ChartAPIController@refreshData')->name('api.refreshData');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
