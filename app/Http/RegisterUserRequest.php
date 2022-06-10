<?php

namespace App\Http;

class RegisterUserRequest extends \Illuminate\Foundation\Http\FormRequest
{

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }

}
