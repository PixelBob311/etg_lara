<?php

namespace App\Http\Requests;

class LoginUserRequest extends \Illuminate\Foundation\Http\FormRequest
{
    public function rules()
    {
        return [
            'login' => 'required|string',
            'password' => 'required|string'
        ];
    }
}
