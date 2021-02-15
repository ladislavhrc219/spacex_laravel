<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    //

    public function index(){

        // return view('flights');
        return Http::get('https://api.spacexdata.com/v3/history?title');
    }
}
