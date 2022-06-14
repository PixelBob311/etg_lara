<?php

namespace App\Http;

class RegisterUserRequest extends \Illuminate\Foundation\Http\FormRequest
{

    public function rules()
    {
        return [
            'login' => 'required|string',
            'password' => 'required|string'
        ];
    }

}
