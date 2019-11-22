<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requisition;
use App\Models\Product;
use App\Models\User;

class RequisitionController extends Controller
{
  public function index(){

    $products = Product::where('status','pending')->get();
    $suppliers= User::where('type','supplier')->get();
    return view('backend.product',compact('products','suppliers'));
  }
}
