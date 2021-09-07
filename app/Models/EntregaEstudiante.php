<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaEstudiante extends Model
{
   use HasFactory;

   protected $fillable = [
      'entrega_id',
      'estudiante_nombre'
   ];
}
