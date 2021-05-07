@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenido a nuestra tienda virtual</h1>
        <p>A continuación encontrara el listado de productos disponibles para la venta</p>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Peso</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Ultima venta</th>
                <th scope="col">Comprar</th>
              </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{$producto->nombre}}</th>
                    <td>$ {{$producto->precio}}</td>
                    <td>{{$producto->peso}} Kg</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                        @if($producto->ultima_venta)
                            {{$producto->ultima_venta}}
                        @else
                            Sin ventas
                        @endif
                    </td>
                    <td>
                        <a href="{{route('productos.comprar', ['producto' => $producto->id])}}" class="btn btn-success">Comprar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection