<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\DateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     return View::make('components.home');
// });

Route::get('home', [FlightsController::class , 'show']);



Route::get('/your-endpoint/{variable1}', [DateController::class, 'yourMethod']);



