@extends('layouts.app')

@section('title', $service->name)

@section('content')
    <div class="container mt-5" style="max-width: 720px;">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h1 class="h4 mb-0">{{ $service->name }}</h1>
            </div>
            <div class="card-body">
                <p>{{ $service->description ?? 'Sin descripción.' }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Creado:</strong> {{ $service->created_at->format('d/m/Y H:i') }}</li>
                    <li class="list-group-item"><strong>Actualizado:</strong> {{ $service->updated_at->format('d/m/Y H:i') }}</li>
                </ul>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('services.index') }}" class="btn btn-outline-secondary">Volver</a>
                <a href="{{ route('services.edit', $service) }}" class="btn btn-outline-primary">Editar</a>
            </div>
        </div>
    </div>
@endsection
