<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Role;
use App\MOdels\User;

class SupplierController extends Controller
{

  public function index(){

    $suppliers = User::where('type','supplier')->get();
    $roles = Role::all();
    return view('backend.supplier',compact('suppliers','roles'));
  }

  public function details(){

    return view('backend.createSupplier');
  }


  public function create(){

  }

  public function store(Request $request){

  }

  public function edit($id){

    $edit= Supplier::find($id);
    return view('backend.updateSupplier ',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Supplier::findorFail($id);

    $data->update([
      'name'        =>$request->name,
      'price'       =>$request->price,
      'description' =>$request->description,
      'quantity'    =>$request->quantity,
      'brand'       =>$request->brand,
    ]);

    return redirect()->back();
  }

  public function delete($id){

    $data=User::find($id);
    $supplier = Supplier::where('user_id', $id)->get();

    /*$data->update([

      'status'  =>'pending',
    ]);*/

    $supplier->delete();

    return back();
  }
}
