<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'cedula',
        'direccion',
        'edad', // Agrega cedula aquí
        // otros atributos que quieras permitir
    ];

}

