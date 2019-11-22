<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class DashboardContactController extends Controller
{
    function index()
    {
      $contacts = Contact::all();
      return view('dashboardpage.dashcontactpage.index',compact('contacts'));

    }
}
