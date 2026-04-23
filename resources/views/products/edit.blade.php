@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Editar Producto</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Nombre:</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>

        <br>

        <div>
            <label>Descripción:</label>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>

        <br>

        <div>
            <label>Precio:</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}">
        </div>

        <br>

        <div>
            <label>Stock:</label>
            <input type="number" name="stock" value="{{ $product->stock }}">
        </div>

        <br>

        <div>
            <label>Imagen:</label>
            <input type="text" name="image" value="{{ $product->image }}">
        </div>

        <br>

        <button type="submit">
            Actualizar Producto
        </button>

    </form>

</div>

@endsection
