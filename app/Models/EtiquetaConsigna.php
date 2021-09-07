<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaConsigna extends Model
{
   use HasFactory;

   protected $table = 'etiquetas_consignas';

   protected $fillable = [
      'nombre',
      'consigna_id'
   ];
}
