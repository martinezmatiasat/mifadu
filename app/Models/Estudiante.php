<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   use HasFactory;

   protected $fillable = [
      'nombre',
      'apellido',
      'email',
      'clave',
      'celular',
      'dni',
      'fecha_nacimiento',
      'comision_id',
      'exalumno',
      'sobre_mi',
      'imagen'
   ];
}
