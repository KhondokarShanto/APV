<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor;
use App\Models\User;

class DistributorController extends Controller
{
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
      'name'        =>$request->name,
      'price'       =>$request->price,
      'description' =>$request->description,
      'quantity'    =>$request->quantity,
      'brand'       =>$request->brand,
      'status'      =>$request->status,
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
      'name'        =>$request->name,
      'price'       =>$request->price,
      'description' =>$request->description,
      'quantity'    =>$request->quantity,
      'brand'       =>$request->brand,
      'status'      =>$request->status,
    ]);

    return redirect()->back();
  }

  public function delete($id){

    $data=Distributor::find($id);
    $data->delete();

    return back();
  }
}
