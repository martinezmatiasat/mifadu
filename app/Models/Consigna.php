<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consigna extends Model
{
   use HasFactory;

   protected $fillable = [
      'numero',
      'nombre',
      'descripcion_corta',
      'descripcion',
      'archivo_consigna',
      'fecha_entrega',
      'pdf',
      'img',
      'link',
      'grupal'
   ];
}
