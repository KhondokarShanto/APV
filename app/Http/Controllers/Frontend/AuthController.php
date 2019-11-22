<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Models\Distributor;
use App\Models\Supplier;
use App\Models\Marchandisar;

class AuthController extends Controller
{


/*
|--------------------------------------------------------------------------
| Process Registration Form
|--------------------------------------------------------------------------
*/


  	public function processRegistration(Request $request){

     	$validator      = Validator ::make($request->all(), [
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

      if(auth()->user()->type=='admin'){

        return redirect()->back();

      }else{

        session()->flash('message','Registration successfull');
        return redirect('/login');
      }
    }


/*
|--------------------------------------------------------------------------
| login validation
|--------------------------------------------------------------------------
*/

  public function processLogin(Request $request){

          $validator = Validator::make($request->all(), [
              'email' => 'required|email',
              'password' => 'required',
          ]);

          if ($validator->fails()) {
              
              return redirect()->back()->withErrors($validator)->withInput();
          }
        
          $credentials = $request->except('_token');

          if (auth()->attempt($credentials)) {

              session()->flash('message', 'Logged in successfully.');

              return redirect()->route('panel');
          }else
          {
            session()->flash('message', 'invalid User');
            return redirect()->back();
          }   
        }

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/
 
  	public function logout(){
        auth()->logout();
        session()->flush();
        return redirect('/login');
    }

}
