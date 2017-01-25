<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reservation;

use DB;

class HeadMajorGivePermissionController extends Controller
{
    // public function index(){
    // 	$listreservasi = DB::select('select * from db_reservation');
    // 	return view('admnistratorgivepermission', ['listreservasi' => $listreservasi]);
    // }

    public function index(){
    	$model = Reservation::all();
    	return view('headmajorgivepermission')->with('data', $model);
    }

    public function update(Request $request, $id)
    {
        //update user set ...... = ... where id = $id
        Reservation::find($id)->update($request->all());
        return redirect('headmajorgivepermission');

    }
}
