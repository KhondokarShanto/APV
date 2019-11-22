<?php

namespace App\Http\Controllers\Merchandiser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchandiser;

class MerchandiserController extends Controller
{
  function index()
  {
    return view ('frontpage.merchandiserpage.index');
  }
  function showMerchandiser()
  {
    $merchandisers = Merchandiser::all();
    return view('backend.merchandiser',compact('merchandisers'));
  }
  function createMerchandiser()
  {
    return view('backend.createMerchandiser');
  }
  function create(Request $request)
  {
    Merchandiser::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'details'=>$request->details,
    ]);
    return back();
  }
}
