<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // El usuario ha iniciado sesión correctamente
            return redirect()->route('index'); // Redirige al usuario a index.blade.php
        }

        // Si la autenticación falla, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('index')->with('error', 'Credenciales incorrectas');
    }
}
