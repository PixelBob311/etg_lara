<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerNewUser(RegisterUserRequest $request)
    {
        $data = $request->validated();
        $data['name'] = 'User';
        $data['second_name'] = 'User';
        $data['middle_name'] = 'User';
        $user = User::create($data);
    }
}
