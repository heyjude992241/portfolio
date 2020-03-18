<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function card(){
        return view('portfolio.card');
    }

    public function businessCard(){
        return view('portfolio.business-card');
    }

    public function navbar1(){
        return view('portfolio.navbar.nav1');
    }

    public function navbar2(){
        return view('portfolio.navbar.nav2');
    }

    public function navbar3(){
        return view('portfolio.navbar.nav3');
    }
}
