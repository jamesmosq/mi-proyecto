@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container mt-5" style="max-width: 720px;">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h1 class="h4 mb-0">{{ $product->name }}</h1>
            </div>
            <div class="card-body">
                <p>{{ $product->description ?? 'Sin descripción.' }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Precio:</strong> $ {{ number_format($product->price, 0, ',', '.') }}</li>
                    <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }} unidades</li>
                    <li class="list-group-item"><strong>Creado:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</li>
                    <li class="list-group-item"><strong>Actualizado:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</li>
                </ul>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Volver</a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary">Editar</a>
            </div>
        </div>
    </div>
@endsection
