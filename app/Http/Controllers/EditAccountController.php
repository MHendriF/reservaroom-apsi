<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;

class EditAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$model = User::all();
    	return view('edit_profile')->with('data', $model);
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
        // $model = User::find($id);
        // return view('edit_profile')->with('data', $model);
    }

    public function edit($id)
    {
        //select * from user where id = $id
        $model = User::find($id);
        return view('edit_profile')->with('data', $model);
    }

    public function profile()
    {
        return view('profile', array('user' => Auth::user()) );
    }

    public function update(Request $request, $id)
    {
        //update user set ...... = ... where id = $id
        User::find($id)->update($request->all());

        return redirect('edit');
    }
}
