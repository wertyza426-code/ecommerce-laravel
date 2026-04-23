@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Lista de Productos</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">
        Crear Producto
    </a>

    <br><br>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>

        @foreach($products as $product)
        <tr>

            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->stock }}</td>

            <td>

                <a href="{{ route('products.show', $product->id) }}">
                    Ver
                </a>

                |

                <a href="{{ route('products.edit', $product->id) }}">
                    Editar
                </a>

                |

                <form action="{{ route('products.destroy', $product->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Eliminar
                    </button>

                </form>

            </td>

        </tr>
        @endforeach

    </table>

</div>
@endsection
