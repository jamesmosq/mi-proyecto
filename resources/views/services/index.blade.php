@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <!-- Título -->
    <div class="container mt-5">

        <div class="text-center mb-5">

            <h1>Servicios</h1>

            <p class="lead">
                Conoce los servicios que tenemos disponibles para nuestros clientes.
            </p>

        </div>

        <!-- Botón para crear -->
        <div class="text-end mb-4">
            <a href="{{ route('services.create') }}" class="btn btn-success">+ Nuevo servicio</a>
        </div>

        <!-- Servicios -->
        <div class="row g-4">

            @forelse ($services as $service)

                <div class="col-md-4">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5 class="card-title">
                                {{ $service->name }}
                            </h5>

                            <p class="card-text">
                                {{ $service->description ?? 'Sin descripción.' }}
                            </p>

                        </div>

                        <div class="card-footer bg-transparent text-end">
                            <a href="{{ route('services.show', $service) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST" class="d-inline form-eliminar" data-titulo="¿Eliminar servicio?">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">
                    <p class="text-center text-muted py-4">
                        Todavía no hay servicios registrados.
                    </p>
                </div>

            @endforelse

        </div>

    </div>
@endsection
