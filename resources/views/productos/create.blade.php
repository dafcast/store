@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Agregar un nuevo producto</h1>
        <div class="row justify-content-md-center">
            <form action="{{route('productos.store')}}" class="col-md-8 bg-white p-4 mt-2" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Escriba el nombre del producto" value="{{old('nombre')}}">
                    @error('nombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="referencia">Referencia</label>
                    <input type="text" id="referencia" name="referencia" class="form-control @error('referencia') is-invalid @enderror" placeholder="Referencia del producto">
                    @error('referencia')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" class="form-control @error('precio') is-invalid @enderror" placeholder="Precio en COP del prodcuto">
                    @error('precio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" id="peso" name="peso" class="form-control @error('peso') is-invalid @enderror" placeholder="Peso en Kg del producto">
                    @error('peso')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror">
                        <option value="0" disabled selected>-- Seleccione una categoria --</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>    
                        @endforeach
                    </select>
                    @error('categoria')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Cantidad de productos">
                    @error('stock')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" value="Agregar producto" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection