<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function create(){
        return "yes";
    }
}

