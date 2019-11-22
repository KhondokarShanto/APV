<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
  public function index(){

    $users = User::all();
    $roles = Role::all();
    return view('backend.User.index',compact('users','roles'));
  }

  public function details($id){

    $user= User::find($id);
    $roles = Role::all();
    return view('backend.User.details', compact('user','roles'));
  }

  public function create(){

  }

  public function store(Request $request){

    $validator= Validator ::make($request->all(), [
      'first_name'  => 'required',
      'last_name'   => 'required',
      'user_name'   => 'required',
      'email'       => 'required|email|unique:users,email',
      'password'    => 'required|min:6|confirmed',
    ]);

    if ($validator->fails()){

      return redirect()->back()->withErrors($validator)->withInput();
    }

    $user=User::create([

      'first_name'    => trim($request->input('first_name')),
      'last_name'     => trim($request->input('last_name')),
      'user_name'     => trim($request->input('user_name')),
      'phone_no'      => trim($request->input('phone_no')),
      'email'         => strtolower(trim($request->input('email'))),
      'type'          => trim($request->input('type')),
      'nid'           => trim($request->input('nid')),
      'birth_date'    => trim($request->input('birth_date')),
      'address'       => trim($request->input('address')),
      'guardian_name' => trim($request->input('guardian_name')),
      'guardian_phone'=> trim($request->input('guardian_phone')),
      'status'        => trim($request->input('status')),
      'password'      => bcrypt(trim($request->input('password'))),
    ]);


    if($user->type=='supplier'){
      Supplier::create([
        'user_id'=>$user->id,
      ]);

    }elseif($user->type=='distributor'){
      Distributor::create([
        'user_id'=>$user->id,
      ]);

    }elseif($user->type=='marchandisar'){
      Marchandisar::create([
        'user_id'=>$user->id,
      ]);
    }

    return redirect()->back();
  }


  public function edit($id){


  }


  public function update(Request $request,$id){

    $data = User::findorFail($id);

    $data->update([
      'first_name'    => trim($request->input('first_name')),
      'last_name'     => trim($request->input('last_name')),
      'user_name'     => trim($request->input('user_name')),
      'phone_no'      => trim($request->input('phone_no')),
      'email'         => strtolower(trim($request->input('email'))),
      'type'          => trim($request->input('type')),
      'nid'           => trim($request->input('nid')),
      'birth_date'    => trim($request->input('birth_date')),
      'address'       => trim($request->input('address')),
      'guardian_name' => trim($request->input('guardian_name')),
      'guardian_phone'=> trim($request->input('guardian_phone')),
      'status'        => trim($request->input('status')),
      'password'      => bcrypt(trim($request->input('password'))),
    ]);

    return redirect()->back();
  }


  public function delete($id){

    $data=User::find($id);
    $data->delete();
    return back()->with('success','User Deleted successfully.');
  }
}