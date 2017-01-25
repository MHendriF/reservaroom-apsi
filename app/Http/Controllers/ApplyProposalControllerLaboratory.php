<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Reservation;
use App\User;
use Auth;
use DB;

class ApplyProposalControllerLaboratory extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user()->id;
        // $model = Reservation::all();
        // return view('applyproposal')->with('data', $model);

         $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev, re.proposal as proposal
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id_user = '$user'");
        return view('applyproposallaboratory', ['data' => $model]);
    }


    public function create(){
        $model = DB::select("SELECT *
            FROM db_room
            WHERE type = 'Laboratory'");
        return view('add_applyproposallaboratory')->with('data', $model);
    }

    public function store(Request $request)
    {
        // //'id_user', 'id_room', 'event_date', 'keperluan', 'endstatus', 'proposal', 'permission_status', 'proposal_status',
         $this->validate($request, array(
            'id_user'       => 'required',
            'id_room'       => 'required',
            'event_name'    => 'required',
            'startdate'    => 'required',
            'enddate'    => 'required'
            ));

        // Reservation::create($request->all());
        // return redirect('applyproposal'); 
          
        //cara lain
        $reserv = new Reservation(array(
            'id_user' => $request->get('id_user'),
            'id_room' => $request->get('id_room'),
            'event_name' => $request->get('event_name'),
            'startdate' => $request->get('startdate'),
            'enddate' => $request->get('enddate'),
            'permission_status' => 'Pending',
            'proposal_status'=> 'Pending',
            'endstatus' => 'On Going'
            ));

        //cara 2
        $file       = $request->file('proposal');
        $fileName   = $file->getClientOriginalName();
        $request->file('proposal')->move("dokumen/", $fileName);
        $reserv->proposal = $fileName;

        $reserv->save();
        
        return redirect()->to('applyproposallaboratory'); 
    }

 	public function show($id)
    {
        $model = DB::select("SELECT re.id as idrev, usr.name as uname, ro.room_name as rname, re.event_name as namerev, re.startdate as srev, re.enddate as erev, re.permission_status as psrev, proposal_status as prrev, re.endstatus as enrev, re.proposal as proposal
            FROM db_reservation re, db_room ro, users usr 
            WHERE re.id_user = usr.id and re.id_room = ro.id and re.id_user = '$id'");
        return view('applyproposallaboratory', ['data' => $model]);
    }

    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
       
    }

    
    public function destroy($id)
    {
        
    }
}
