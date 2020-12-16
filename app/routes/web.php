<?php

use Illuminate\Support\Facades\Route;

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

    // Route::get('/{any}', function () {
    //     return view('sample');
    // })->where('any', '.*');

    Route::get('/', function () {
        return view('sample');
    });

    // view
    Route::get('/sample', function () {
        return view('sample');
    });
    Route::get('/download', function () {
        return view('download');
    });

    //api
    Route::get('/sample/statget', 'App\Http\Controllers\SampleController@statget');
    Route::post('/sample/place', 'App\Http\Controllers\SampleController@place');
    Route::get('/download/windows', 'App\Http\Controllers\SampleController@download');