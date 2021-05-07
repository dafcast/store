<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index',[
            'productos' => $productos 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'peso' => 'required|numeric',
            'categoria' => 'required',
            'stock' => 'required|numeric'
        ]);

        $producto = new Producto($data);
        $producto->categoria_id = $data['categoria'];
        $producto->save();
        return redirect()->action('ProductoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show', [
            'producto' => $producto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', [
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'peso' => 'required|numeric',
            'categoria' => 'required',
            'stock' => 'required|numeric'
        ]);

        $producto->nombre = $data['nombre'];
        $producto->referencia = $data['referencia'];
        $producto->precio = $data['precio'];
        $producto->peso = $data['peso'];
        $producto->categoria_id = $data['categoria'];
        $producto->stock = $data['stock'];
        $producto->save();

        return redirect()->action('ProductoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return back();
    }

    /**
     * Comprar un producto.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function comprar(Producto $producto)
    {
        $mensaje = '';
        if($producto->stock > 0){
            $producto->ultima_venta = now();
            $producto->stock = $producto->stock - 1;
            $producto->save();
            $mensaje = "Producto: $producto->nombre Comprado!";
        }else{
            $mensaje = "El producto: $producto->nombre no tiene stock!";
        }


        return back()->with(['mensaje' => $mensaje]);
    }
}
