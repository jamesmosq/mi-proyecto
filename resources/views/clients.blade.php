@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <!-- Título -->
    <div class="container mt-5">

        <div class="text-center mb-5">

            <h1>Clientes</h1>

            <p class="lead">
                Conoce nuestros principales clientes a lo largo del pais
            </p>

        </div>


        <!-- Servicios -->
        <div class="row g-4">

            <!-- Servicio 1 -->
            <div class="col-md-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h5 class="card-title">
                            Desarrollo Web
                        </h5>

                        <p class="card-text">
                            Diseñamos y desarrollamos sitios web modernos,
                            funcionales y adaptados a las necesidades de cada cliente.
                        </p>

                        <a href="{{ route('contact') }}" class="btn btn-success">
                            Solicitar información
                        </a>

                    </div>

                </div>

            </div>


            <!-- Servicio 2 -->
            <div class="col-md-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h5 class="card-title">
                            Desarrollo de Aplicaciones
                        </h5>

                        <p class="card-text">
                            Creamos aplicaciones web para gestionar información,
                            automatizar procesos y mejorar el trabajo de las organizaciones.
                        </p>

                        <a href="{{ route('contact') }}" class="btn btn-success">
                            Solicitar información
                        </a>

                    </div>

                </div>

            </div>


            <!-- Servicio 3 -->
            <div class="col-md-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h5 class="card-title">
                            Asesorías
                        </h5>

                        <p class="card-text">
                            Brindamos asesorías relacionadas con tecnología,
                            desarrollo de software y transformación digital.
                        </p>

                        <a href="{{ route('consulting') }}" class="btn btn-success">
                            Ver asesorías
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
