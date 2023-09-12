<?php

namespace App\Http\Controllers;
use App\Models\FormEmpleo;

use Illuminate\Http\Request;

class FormEmpleoController extends Controller
{
    public function procesarInscripcionEmpleo(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'cel' => 'required|string',
            'asunto' => 'required|string',
            'mje' => 'required|string',
    ]);

        // Crea una nueva instancia del modelo Inscripcion y asigna los valores
        $empleos = new FormEmpleo();
        $empleos->NombreyAp = $request->get('nombre');
        $empleos->Email = $request->get('email');
        $empleos->Tel = $request->get('cel');
        $empleos->Asunto = $request->get('asunto');
        $empleos->Mje = $request->get('mje');
        // Asigna otros campos según tus campos de inscripción

        // Guarda la inscripción en la base de datos
        $empleos->save();

        // Después de guardar los datos

        
        // Después de guardar los datos en el controlador
// Después de guardar los datos en el controlador
return view('indexinvitado')->with('success', 'El formulario se envió con éxito.');
    }
}
