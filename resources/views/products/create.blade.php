@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Crear Producto</h1>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div>
            <label>Nombre:</label>
            <input type="text" name="name">
        </div>

        <br>

        <div>
            <label>Descripción:</label>
            <textarea name="description"></textarea>
        </div>

        <br>

        <div>
            <label>Precio:</label>
            <input type="number" step="0.01" name="price">
        </div>

        <br>

        <div>
            <label>Stock:</label>
            <input type="number" name="stock">
        </div>

        <br>

        <div>
            <label>Imagen:</label>
            <input type="text" name="image">
        </div>

        <br>

        <button type="submit">
            Guardar Producto
        </button>

    </form>

</div>

@endsection
