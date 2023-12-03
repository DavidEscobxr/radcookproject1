<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{



    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
       /* if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = auth()->guard('api')->attempt($credentials);


            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'name' => $user->name,
                'access_token' => $token
                 ], 200);
        }


        return response()->json(['message' => 'Credenciales inválidas'],401);*/

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }


        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                 'success' => false,
                 'status' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
            return $e;
            return response()->json([
                 'success' => false,
                 'status' => 'Could not create token.',
                ], 500);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => config('jwt.ttl') * 60
        ]);
    }
}
