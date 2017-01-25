<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reservation;
use DB;
use Auth;

class FinishBorrowingController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user()->id;
         $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev, re.proposal as proposal
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id_user = '$user'");
        return view('finishborrowing', ['data' => $model]);

    	// $model = Reservation::all();
    	// return view('finishborrowing')->with('data', $model);
    }

    public function show ($id){
        //$iduser = $id;
        $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id_user = '$id'");
        return view('finishborrowing', ['data' => $model]);
    }

    // $listkalender = DB::select('select re.id as idr, re.id_user as idu, ro.room_name as rname, extract(day from re.startdate) as tanggalmulai, extract(day from re.enddate) as tanggalselesai, re.event_name as vname 
    //         from db_reservation re, db_room ro 
    //         where re.id_room = ro.id');
    //     return view('viewschedule', ['listkalender' => $listkalender]);

    public function update(Request $request, $id)
    {
        //update user set ...... = ... where id = $id
        Reservation::find($id)->update($request->all());
        return redirect('finishborrowing');

    }
}
