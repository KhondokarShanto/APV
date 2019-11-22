<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
  function index()
  {
    return view ('frontpage.orderpage.index');
  }
  function showOrder()
  {
    $orders = Order::all();
    return view('backend.order',compact('orders'));
  }
  function createOrder()
  {
    return view('backend.createOrder');
  }
  function create(Request $request)
  {
    Order::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'order'=>$request->order,
    ]);
    return back();
  }
  function edit($id)
  {
    $edit= Order::find($id);
            return view('backend.updateOrder',compact('edit'));

  }

  function update(Request $request,$id)
  {
    $data=Order::findorFail($id);
    $data->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'order'=>$request->order,
    ]);

    return redirect()->route('dashorder');
  }
  function delete($id)
  {
    $data=Order::find($id);
        $data->delete();
    return back();
  }
}
