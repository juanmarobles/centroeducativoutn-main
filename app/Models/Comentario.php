<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios'; // Reemplaza 'nombre_de_la_tabla' con el nombre real de tu tabla en la base de datos.
    protected $primaryKey = 'IdComentario'; // Reemplaza 'IdComentario' con el nombre real de tu clave primaria.
    public $timestamps = false; // Si no tienes campos created_at y updated_at en tu tabla.

    protected $fillable = [
        'Autor',
        'Comentario',
    ];
}
