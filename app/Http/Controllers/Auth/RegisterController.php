<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\UserService;

class RegisterController extends Controller
{

    private $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(Request $request){
        $userData = $request->validate([
            'name' => 'required|string|max:70',
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = $this->userService->store($userData);

        $token = $user->createtoken('my_awesome_token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}


