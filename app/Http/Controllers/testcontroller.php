<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class testcontroller extends Controller
{
    public function tampilin()
    {
    	$reservasi = DB::select('select * from db_reservation');
    	return view('testdb', ['reservasi' => $reservasi]);
    }
}
