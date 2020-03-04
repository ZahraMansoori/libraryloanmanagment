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
        return [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ];
    }
}
