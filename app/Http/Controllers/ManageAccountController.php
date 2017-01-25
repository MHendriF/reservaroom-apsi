<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class ManageAccountController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $model = User::all();
        return view('manage')->with('data', $model);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //select * from user where id = $id
        $model = User::find($id);
        return view('manage_edit_account')->with('data', $model);
    }


    public function edit($id)
    {
        //select * from user where id = $id
        $model = User::find($id);
        return view('manage_edit_account')->with('data', $model);
    }

    public function update(Request $request, $id)
    {
        //update user set ...... = ... where id = $id
        User::find($id)->update($request->all());
        return redirect('manage');
        //cara lain
        // $table = User::find($id);
        // $table->name = $request->Input('name');
        // $table->nrp = $request->Input('nrp');
        // $table->phone = $request->Input('phone');
        // $table->status = $request->Input('status');
        // $table->save();
        //return view('manage')->with('data', $model);
        
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('manage');
    }
}
