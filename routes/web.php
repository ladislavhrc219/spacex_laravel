<?php
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\SpaceXflights;
// use App\Http\Controllers\FlightsController;
// use App\Http\Controllers\LaunchesController;

// use App\Http\Controllers\LaunchesController;


// Route::get('/', [LaunchesController::class, 'index']);
Route::get('/', 'App\Http\Controllers\LaunchesController@index');

Route::get('/launches/{launch}', 'LaunchesController@show')->name('launches.show');


// copied
Route::get('/login', [LoginController::class, 'index'])->name('login');



// use App\Http\Controllers\HomeController;
 
// Route::get('/home', [HomeController::class, 'index']);
// or
// Route::get('/home', 'App\Http\Controllers\HomeController@index');


// Route::view('/', 'index');
// Route::view('/flight', 'show');


// This works too
// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', 'FlightsController@index')->name('flights.index');
// Route::get('/flights/{movie}', 'FlightsController@show')->name('movies.show');
// Route::get('/flights/{flight}', [FlightsController::class, 'index']);

// Route::
