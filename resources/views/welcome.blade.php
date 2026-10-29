@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Título -->
    <div class="container mt-5">

        <div class="text-center mb-5">

            <h1>Mi Proyecto</h1>

            <p class="lead">
                Soluciones tecnológicas a la medida para impulsar la transformación digital de tu organización.
            </p>

        </div>

        <!-- Accesos -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Servicios</h5>
                        <p class="card-text">Conoce los servicios que ofrecemos a nuestros clientes.</p>
                        <a href="{{ route('services.index') }}" class="btn btn-success">Ver servicios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Productos</h5>
                        <p class="card-text">Explora el catálogo de productos disponibles.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-success">Ver productos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <p class="card-text">¿Tienes un proyecto en mente? Escríbenos.</p>
                        <a href="{{ route('contact') }}" class="btn btn-success">Contáctanos</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
