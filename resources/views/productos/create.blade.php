@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Agregar un nuevo producto</h1>
        <div class="row justify-content-md-center">
            <form action="{{route('productos.store')}}" class="col-md-8 bg-white p-4 mt-2" method="POST" novalidate>
                @csrf
                @include('ui.formcreate')
                <input type="submit" value="Agregar producto" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection