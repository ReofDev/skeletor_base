<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    /**
     * Register a new user.
     */
    public function register(UserRequest $request)
    {   
        /**
         * create user
         */
        $user  = User::create(
            [
                'email' => $request->email,
                'name' => $request->name,
                'password' =>  bcrypt($request->password),
            ]
        );

        /**
         * create token 
         */
        $token = $user->createToken('auth')
            ->accessToken;

        return response()->json(
            [
                'user' => $user,
                'access_token' => $token,
                'message' => 'Successfully registered'
            ],200
        );
    }

    /**
     *  login a user.
     */
    public function login(UserRequest $request)
    {
        //create credentials
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('auth')
                ->accessToken;
            
            return response()->json(
                [
                    'user' => $user,
                    'token' => $token,
                ], 200
            );
        }else
        return response()->json(
            [
                'message' => 'Invalid credentials'
            ],403
        );
    }

}
