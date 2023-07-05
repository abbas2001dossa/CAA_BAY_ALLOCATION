<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flight;
use Session;

class FlightsController extends Controller
{
    public function show()
    {  
        $data = Flight::all();
        return view('components.home' , ['flightsData'=>$data]);
    }
    

}
