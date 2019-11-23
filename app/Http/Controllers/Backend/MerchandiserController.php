<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchandiser;
use App\Models\User;


class MerchandiserController extends Controller
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

    Merchandiser::create([
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

    $edit= Merchandiser::find($id);
    return view('backend.updateMerchandiser',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Merchandiser::findorFail($id);

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

    $data=Merchandiser::find($id);
    $data->delete();

    return back();
  }
}
