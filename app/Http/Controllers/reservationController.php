<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservations;

class reservationController extends Controller
{
    
    public function index()
    {
        $reserve = reservations::all();
        return view('/reservation' , compact('reserve')); 
    }
}
