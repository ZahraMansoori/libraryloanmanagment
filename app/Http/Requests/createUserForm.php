<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserForm extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ];

        if(request()->route('user_id') && intval(request()->route('user_id'))>0){
            unset($rules['password']);
        }
        return $rules;
    }

}
