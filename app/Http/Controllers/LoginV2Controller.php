<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class IngredientController
 * @package App\Http\Controllers
 */
class LoginV2Controller extends Controller
{

    public function showLoginForm() {
        return view('auth.login', ['status' => '', 'user' => null]);
    }

    public function login(Request $request)
    {
        $response = Http::post('http://localhost/radcookproject1/public/api/login/v2', [
            'email' => $request->email,
            'password' => $request->password
        ]);

        $statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody()->getContents());

        if ($statusCode != 200) {
            return view('auth.login', ['status' => 'Credenciales inválidas']);
        }

       $request['token'] = $body->access_token;
       $user = JWTAuth::parseToken()->authenticate();

        return view('home', [
            'user' => $user,
            'success' => true
            ]
        );
    }
}
