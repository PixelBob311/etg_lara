<?php

namespace App\Http\Controllers;

use App\Http\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerNewUser(RegisterUserRequest $request)
    {
        $data = $request->validated();
        $data['name'] = 'User';
        $user = User::create($data);
    }
}
