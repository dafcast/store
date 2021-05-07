<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $productos = Producto::all();
        return view('inicio.index', ['productos' => $productos]);
    }
}
