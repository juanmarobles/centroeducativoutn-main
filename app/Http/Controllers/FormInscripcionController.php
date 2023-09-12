<?php

namespace App\Http\Controllers;
use App\Models\FormInscripcion;

use Illuminate\Http\Request;

class FormInscripcionController extends Controller
{
    public function procesarInscripcion(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'cel' => 'required|string',
            'mje' => 'required|string',
    ]);

        // Crea una nueva instancia del modelo Inscripcion y asigna los valores
        $inscripciones = new FormInscripcion();
        $inscripciones->NombreyAp = $request->get('nombre');
        $inscripciones->Email = $request->get('email');
        $inscripciones->Tel = $request->get('cel');
        $inscripciones->Mje = $request->get('mje');
        // Asigna otros campos según tus campos de inscripción

        // Guarda la inscripción en la base de datos
        $inscripciones->save();

        // Después de guardar los datos

        // Redirige a una página de éxito o muestra un mensaje
// Después de guardar los datos en el controlador
return view('indexinvitado')->with('success', 'El formulario se envió con éxito.');
    }
}
