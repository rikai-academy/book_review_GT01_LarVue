<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(UserRequest $request){

        $user_validation = $request->all();

        $user_save = User::create($user_validation);
        if($user_save){
            return response()->json([
                'alert_succses' => __('message.register_success')
            ]);
        }else{
            return response()->json([
                'alert_succses' => __('message.register_fail')
            ]);
        }
    }
}
