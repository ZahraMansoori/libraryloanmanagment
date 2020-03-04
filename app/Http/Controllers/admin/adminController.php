<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createUserForm;
use App\User;
use http\Env\Request;

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


    public function store(createUserForm $createUserForm )
    {

        $user_data=[
        'name'=>request()->input("name"),
        'email'=>request()->input("email"),
        'password'=>request()->input("password")

    ];
       dd(User::create($user_data));
    }

}