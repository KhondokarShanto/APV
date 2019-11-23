<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\User;


class AreaController extends Controller
{
    public function index(){
      $areas = Area::all();
      return view('backend.area',compact('areas'));
  }

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

    Area::create([
      'name'        =>$request->name,
      'postcode'       =>$request->postcode,
      'description' =>$request->description,

    ]);

    return back();
  }

  public function edit($id){

    $edit= Area::find($id);
    return view('backend.updateArea',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Area::findorFail($id);

    $data->update([
      'name'        =>$request->name,
      'postcode'       =>$request->postcode,
      'discription' =>$request->discription,

    ]);

    return redirect()->back();
  }

  public function delete($id){

    $data=Area::find($id);
    $data->delete();

    return back();
  }
}
