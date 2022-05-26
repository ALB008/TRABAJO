<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $userData = $request->vlidate([
            'email' => 'required|string|email|max:150|exists:users,email',
            'password' => 'required|string|min:8',
        ]);

        if (!Auth::attempt([$userData])){
            return response()->json('Credentials not match', 401);
        }

        $token = Auth::user()->createToken('my_awesome_api')->plainTextToken;

        return response()->json(['token'=>$token]);
    }
}
