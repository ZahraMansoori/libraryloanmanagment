<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

//use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function create()
    {
        return view('admin.user.createuser');
    }


    public function store()
    {
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|password|min:6|max:12'
    ]);
        $user_data=[
            'name'=>request()->input("name"),
            'email'=>request()->input("email"),
            'password'=>request()->input("password")

        ];
       dd(User::create($user_data));
    }

}