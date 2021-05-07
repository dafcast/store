@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">{{$producto->nombre}}</h1>

        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <p><span class="font-weight-bold">Referencia producto: </span>{{$producto->referencia}}</p>
                <p><span class="font-weight-bold">Precio producto: $ </span>{{$producto->precio}}</p>
                <p><span class="font-weight-bold">Peso producto: </span>{{$producto->peso}} Kg</p>
                <p><span class="font-weight-bold">Categoria producto: </span>{{$producto->categoria->nombre}}</p>
                <p><span class="font-weight-bold">Stock producto: </span>{{$producto->stock}}</p>
                <p><span class="font-weight-bold">Fecha de creación: </span>{{$producto->created_at}}</p>
                <p><span class="font-weight-bold">Ultima Venta: </span>
                    @if($producto->ultima_venta)
                        {{$producto->ultima_venta}}
                    @else
                        Sin ventas
                    @endif
                </p>
            </div>
        </div>

    </div>
@endsection