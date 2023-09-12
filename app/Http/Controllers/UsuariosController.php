<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function crearUsuario(Request $request)
    {
        // Validar los datos del formulario (puedes utilizar Laravel Validation)
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|',
            'pw' => 'required|string|',
            'rol' => 'required|string',
        ]);

        // Crear un nuevo usuario
        $usuarios = new Usuarios();
        $usuarios->NOMBRE = $request->get('nombre');
        $usuarios->APELLIDO = $request->get('apellido');
        $usuarios->EMAIL = $request->get('email');
        $usuarios->ROL = $request->get('rol');
        $usuarios->PASSWORD = Hash::make($request->get('pw'));
        $usuarios->save();

        // Redireccionar o realizar alguna acción después de guardar el usuario
        return view('login')->with('success', 'El formulario se envió con éxito.');
    }
}
