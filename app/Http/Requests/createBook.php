<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createBook extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'author' => 'required',
            'pub_year' => 'required',
            'pub_name' => 'required',
            'translator_name' => 'required',
            'category' => 'required',
        ];

//        if(request()->route('user_id') && intval(request()->route('user_id'))>0){
//            unset($rules['password']);
//        }
        return $rules;
    }
}

