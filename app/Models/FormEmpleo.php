<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEmpleo extends Model
{
    use HasFactory;

    protected $table = 'empleos'; 
    protected $primaryKey = 'Id'; 
    public $timestamps = false; 

    protected $fillable = [
        'NombreyAp',
        'Email',
        'Tel',
        'Asunto',
        'Mje',
    ];
}
