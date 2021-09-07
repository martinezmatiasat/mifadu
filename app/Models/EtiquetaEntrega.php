<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaEntrega extends Model
{
   use HasFactory;

   protected $table = 'etiquetas_entregas';

   protected $fillable = [
      'nombre',
      'entrega_id'
   ];
}
