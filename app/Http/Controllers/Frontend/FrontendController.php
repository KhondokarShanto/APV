<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class FrontendController extends Controller
{
    public function showHome()
    {
        return view('frontend.home');
    }

    public function showLogin()
    {
        return view('frontend.login');
    }

    public function showRegistration()
    {
        $roles = Role::all();
        return view('frontend.registration', compact('roles'));
    }
}
