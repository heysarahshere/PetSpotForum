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

Route::get('/', [
    'uses' => 'Controller@getHome',
    'as' => 'home'
]);

Route::post('/send-message', [
    'uses' => 'Controller@postSendMessage',
    'as' => 'send-message'
]);


Route::group(['prefix' => 'projects'], function () {

    Route::get('/petspot', [
        'uses' => 'Controller@getPetspot',
        'as' => 'get-petspot'
    ]);

    Route::get('/geekstore', [
        'uses' => 'Controller@getGeekstore',
        'as' => 'get-geekstore'
    ]);

    Route::get('/catalyst', [
        'uses' => 'Controller@getCatalyst',
        'as' => 'get-catalyst'
    ]);

    Route::get('/bidpro', [
        'uses' => 'Controller@getBidpro',
        'as' => 'get-bidpro'
    ]);

    Route::get('/roshambill', [
        'uses' => 'Controller@getRoshambill',
        'as' => 'get-roshambill'
    ]);

    Route::get('/battleship', [
        'uses' => 'Controller@getBattleship',
        'as' => 'get-battleship'
    ]);

    Route::get('/calculator', [
        'uses' => 'Controller@getCalculator',
        'as' => 'get-calculator'
    ]);
});




