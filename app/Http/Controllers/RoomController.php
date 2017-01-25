<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Room;
use Session;

class RoomController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $model = Room::all();
        return view('room')->with('data', $model);
    }

   
    public function create()
    {
        return view('add_room');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'room_name'     => 'required|max:100',
            'type'          => 'required',
            'cost'          => 'required',
            'capacity'      => 'required'
            ));

        Room::create($request->all());

        Session::flash('new', 'New room was successfully added!');
        return redirect('room'); 
    }

   
    public function show($id)
    {
        //$model = Room::find($id);
        //return view('room_detail')->with('data', $model);
    }

   
    public function edit($id)
    {
        $model = Room::find($id);
        return view('edit_room')->with('data', $model);
    }

    
    public function update(Request $request, $id)
    {
        Session::flash('update', 'The room was successfully updated!');
        Room::find($id)->update($request->all());
        return redirect('room');
    }

    
    public function destroy($id)
    {
        Room::find($id)->delete();
        Session::flash('delete', 'The room was successfully deleted!');
        return redirect('room');
    }
}
