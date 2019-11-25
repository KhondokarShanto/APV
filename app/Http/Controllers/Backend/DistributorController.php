<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor;
use App\Models\Role;
use App\MOdels\User;

class DistributorController extends Controller
{


  public function index(){
    $distributors = Distributor::all();
    return view('backend.Distributor.distributor',compact('distributors'));
  }
  /*public function index(){

    return view ('frontpage.productpage.index');
  }*/

  // public function index(){
  //
  //   $products = Product::where('status','active')->get();
  //   $suppliers= User::where('type','supplier')->get();
  //   return view('backend.product',compact('products','suppliers'));
  // }
  //
  // public function details($id){
  //
  //   $product= Product::with('supplier')->find($id);
  //   return view('backend.detailsProduct', compact('product'));
  // }


  public function create(){

  }

  public function store(Request $request){

    Distributor::create([
      'user_id'         =>$request->user_id,
      'first_name'      =>$request->first_name,
      'last_name'       =>$request->last_name,
      'user_name'       =>$request->user_name,
      'image'           =>$request->image,
      'phone'           =>$request->phone,
      'email'           =>$request->email,
      'nid'             =>$request->nid,
      'birth_date'      =>$request->birth_date,
      'age'             =>$request->age,
      'address'         =>$request->address,
      'sex'             =>$request->sex,
      'blood_group'     =>$request->blood_group,
      'guardian_name'   =>$request->guardian_name,
      'guardian_phone'  =>$request->guardian_phone,
      'guardian_address'=>$request->guardian_address,
    ]);

    return back();
  }

  public function edit($id){

    $edit= Distributor::find($id);
    return view('backend.Distributor.updateDistributor',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Distributor::findorFail($id);

    $data->update([
      'user_id'         =>$request->user_id,
      'first_name'      =>$request->first_name,
      'last_name'       =>$request->last_name,
      'user_name'       =>$request->user_name,
      'image'           =>$request->image,
      'phone'           =>$request->phone,
      'email'           =>$request->email,
      'nid'             =>$request->nid,
      'birth_date'      =>$request->birth_date,
      'age'             =>$request->age,
      'address'         =>$request->address,
      'sex'             =>$request->sex,
      'blood_group'     =>$request->blood_group,
      'guardian_name'   =>$request->guardian_name,
      'guardian_phone'  =>$request->guardian_phone,
      'guardian_address'=>$request->guardian_address,
    ]);

    return redirect()->back();
  }

  public function delete($id){

    $data=Distributor::find($id);
    $data->delete();

    return back();
  }
  public function index(){

    $suppliers = User::where('type','supplier')->get();
    $roles = Role::all();
    return view('backend.Supplier.supplier',compact('suppliers','roles'));
  }

  public function details(){

    return view('backend.Supplier.createSupplier');
  }


  public function create(){

  }

  public function store(Request $request){

  }

  public function edit($id){

    $edit= Supplier::find($id);
    return view('backend.Supplier.updateSupplier ',compact('edit'));

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
