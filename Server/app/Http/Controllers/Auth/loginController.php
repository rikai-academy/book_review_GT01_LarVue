<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function login(UserRequest $request){

        $user_validation = $request->only(['email','password']);

        $user = User::where('email', $user_validation['email'])->first();
        if(!$user || !Hash::check($user_validation['password'], $user->password)){
            throw ValidationException::withMessages([
                'email'=> [__('message.email_error')],
            ]);
        };

        return $user->createToken('Token Name')->accessToken;
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
    }
}
