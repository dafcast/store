<?php

namespace App;

use App\Categoria;
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

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
