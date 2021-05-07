@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Listado de productos</h1>
        
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Ultima venta</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{$producto->nombre}}</th>
                    <td>{{$producto->categoria_id}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                        @if($producto->ultima_venta)
                            {{$producto->ultima_venta}}
                        @else
                            Sin ventas
                        @endif
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">Ver</a>
                        <a href="#" class="btn btn-success">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection