@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <!-- Título -->
    <div class="container mt-5">

        <div class="text-center mb-5">

            <h1>Productos</h1>

            <p class="lead">
                Conoce los productos que tenemos disponibles para nuestros clientes.
            </p>

        </div>


        <!-- Botón para crear -->
        <div class="text-end mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-success">+ Nuevo producto</a>
        </div>

        <!-- Listado de productos -->
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th class="text-end">Precio</th>
                    <th class="text-end">Stock</th>
                    <th class="text-end">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="text-end">$ {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="text-end">{{ $product->stock }}</td>
                        <td class="text-end">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline form-eliminar" data-titulo="¿Eliminar producto?">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Todavía no hay productos registrados.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
