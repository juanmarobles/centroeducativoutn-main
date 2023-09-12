<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones'; 
    protected $primaryKey = 'IdMje'; 
    public $timestamps = false; 

    protected $fillable = [
        'NombreyAp',
        'Email',
        'Tel',
        'Mje',
    ];
}