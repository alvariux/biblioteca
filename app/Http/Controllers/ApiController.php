<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        # Validar los datos de inicio de sesión
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);        

        
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('api-token')->plainTextToken;

            return ['token' => $token];
        }

        return ['error' => 'Datos incorrectos.'];
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return ['data' => 'Sessión cerrada.'];
    }
}
