<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reservation;

class TesController extends Controller
{
    public function index(){
    	$model = Reservation::all();
    	return view('test')->with('data', $model);
    }

    public function tesapply(){
    	
    	return view('tesapply');
    }
}
