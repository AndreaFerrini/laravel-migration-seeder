<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function getTrains(){
        $trains = Train::All();

        return view( "welcome", compact( "trains" ));
    }
}
