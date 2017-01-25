<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ViewScheduleController extends Controller
{
    // public function index(){
    // 	return view('viewschedule');
    // }
    public function index(){
    $listkalender = DB::select('select re.id as idr, re.id_user as idu, ro.room_name as rname, extract(day from re.startdate) as tanggalmulai, extract(day from re.enddate) as tanggalselesai, re.event_name as vname 
    		from db_reservation re, db_room ro 
    		where re.id_room = ro.id');
    	return view('viewschedule', ['listkalender' => $listkalender]);
    	

    }
}
