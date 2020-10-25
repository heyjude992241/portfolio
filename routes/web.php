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

Route::prefix('card')->group(function(){
    Route::get('lily', 'PortfolioController@card');
    Route::get('business', 'PortfolioController@businessCard');
});

Route::get('navbar/{id}', function($id){
    switch($id){
        case 1: return view('portfolio.navbar.nav1');
        break;

        case 2: return view('portfolio.navbar.nav2');
        break;

        case 3: return view('portfolio.navbar.nav3');
        break;
    }
});

Route::prefix('anim')->group(function(){
    Route::get('clock', function(){
        return view('anim.clock');
    });
});

Route::get('/home', function(){
    return view('main.layout');
});
