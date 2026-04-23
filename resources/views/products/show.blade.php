@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Detalle del Producto</h1>

    <p>
        <strong>Nombre:</strong>
        {{ $product->name }}
    </p>

    <p>
        <strong>Descripción:</strong>
        {{ $product->description }}
    </p>

    <p>
        <strong>Precio:</strong>
        ${{ $product->price }}
    </p>

    <p>
        <strong>Stock:</strong>
        {{ $product->stock }}
    </p>

    <p>
        <strong>Imagen:</strong>
        {{ $product->image }}
    </p>

    <a href="{{ route('products.index') }}">
        Volver
    </a>

</div>

@endsection
