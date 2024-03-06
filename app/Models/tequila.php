<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tequila extends Model
{
    use HasFactory;
    protected $fillable = [
        'Marca',
        'Tipo',
        'Precio'
      ];
}
