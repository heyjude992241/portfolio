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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card', 'PortfolioController@card');

Route::get('/business-card', 'PortfolioController@businessCard');

Route::get('/navbar-1', 'PortfolioController@navbar1');

Route::get('/navbar-2', 'PortfolioController@navbar2');

Route::get('/navbar-3', 'PortfolioController@navbar3');
