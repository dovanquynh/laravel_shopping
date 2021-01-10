<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function login()
    {
        return view('backend.login');
    }

    public function postLogin(Request $request)
    {

    }
}
