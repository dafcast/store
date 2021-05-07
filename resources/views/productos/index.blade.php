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
                        <a href="{{route('productos.show', ['producto' => $producto->id])}}" class="btn btn-primary">Ver</a>
                        <a href="{{route('productos.edit', ['producto' => $producto->id])}}" class="btn btn-success">Editar</a>
                        <form action="{{route('productos.destroy', ['producto' => $producto->id])}}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection