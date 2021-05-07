<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'referencia',
        'precio',
        'peso',
        'categoria_id',
        'stock',
    ];
}
