<?php

namespace App\Http\Controllers;
use App\Models\Comentario;

use Illuminate\Http\Request;


class ComentarioController extends Controller
{
    public function index()
    {
        // Recuperar todos los comentarios de la base de datos
        $comentarios = Comentario::all();

        // Retornar una vista que muestre los comentarios
        return view('comentarios', ['comentarios' => $comentarios]);
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'comentario' => 'required|string',
        ]);

        // Crear un nuevo comentario
        $nuevoComentario = new Comentario();
        $nuevoComentario->Autor = $request->get('nombre');
        $nuevoComentario->Comentario = $request->get('comentario');
        
        // Guardar el comentario en la base de datos
        $nuevoComentario->save();

        // Redirigir de regreso a la página de comentarios con un mensaje de éxito
        return redirect()->route('comentarios')->with('success', 'Comentario enviado con éxito');
    }
}
