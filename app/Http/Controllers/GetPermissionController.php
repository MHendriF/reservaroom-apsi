<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class GetPermissionController extends Controller
{
    public function index(){
    	$user = Auth::user()->id;
        $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev, re.proposal as proposal
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id_user = '$user'");
        return view('getpermission', ['data' => $model]);
    }

    public function show($id)
    {
        $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev, re.proposal as proposal
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id= '$id'");
        return view('status', ['data' => $model]);
    }
}
