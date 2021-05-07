@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Editar: {{$producto->nombre}}</h1>
        <div class="row justify-content-md-center">
            <form action="{{route('productos.update', ['producto' => $producto->id])}}" class="col-md-8 bg-white p-4 mt-2" method="POST" novalidate>
                @method('PUT')
                @csrf                
                @include('ui.formedit')
                <input type="submit" value="Editar producto" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection