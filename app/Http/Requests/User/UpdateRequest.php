<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateRequest extends FormRequest
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
        return [
//            'password' =>[
//                'required', function ($attribute, $value, $fail) {
//                    if (!Hash::check($value, Auth::user()->password)) {
//                        $fail('Old Password didn\'t match');
//                    }
//                },
//            ],
            'email' => 'required',//|email|unique:users,email,'.$this->user->id,
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password', // this will check password
            'name' => 'required', // this will check password
            'fullname' => 'required', // this will check password
            'phone' => 'required',
//            'role' => 'required', // this will check password
//            'roles' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
          'password' => "OK"
        ];
    }
}
