<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createUserForm;
use App\User;
use http\Env\Request;

//use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function showList()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    public function create()
    {
        return view('admin.user.createuser');
    }


    public function store(createUserForm $createUserForm)
    {

        $user_data = [
            'name' => request()->input("name"),
            'email' => request()->input("email"),
            'password' => request()->input("password")

        ];
        $new_user_obj = User::create($user_data);
        if ($new_user_obj instanceof User) {
            return redirect()->route('admin.userlist')->with('success', 'کاربر جدید با موفقیت ثبت شد.');
        }
    }

    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User) {
                $userItem->delete();
                return redirect()->route('admin.userlist')->with('success', 'کاربر مورد نظر با موفقیت حذف شد.');
            }
        }
    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User) {
                return view('admin.user.edit', compact('userItem'));
            }
        }
    }

    public function update(createUserForm $createUserForm, $user_id)
    {
        $user_data = [
            'name' => request()->input("name"),
            'email' => request()->input("email"),
            'password' => request()->input("password")

        ];

        if (!Request()->has('password')) {
            unset($user_data['password']);
        }

        $userItem = User::find($user_id);
        $userItem->update($user_data);
        return redirect()->route('admin.userlist')->with('success', 'کاربر مورد نظر با موفقیت به روز رسانی شد.');

    }



}