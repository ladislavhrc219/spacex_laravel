<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class SpaceXflights extends Controller
{
    //
    public function index(){

        // return view('flights');
        return Http::get('https://api.spacexdata.com/v3/history?title');
    }
}
