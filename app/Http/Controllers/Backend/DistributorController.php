<?php

namespace App\Http\Controllers\Distributor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
  function index()
  {
    return view ('frontpage.distributorpage.index');
  }
  function showDistributor()
  {
    $distributors = Distributor::all();
    return view('backend.distributor',compact('distributors'));
  }
  function createDistributor()
  {
    return view('backend.createDistributor');
  }
  function create(Request $request)
  {
    Distributor::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'details'=>$request->details,
    ]);
    return back();
  }
}
