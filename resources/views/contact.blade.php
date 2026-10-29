@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <div class="container mt-5" style="max-width: 720px;">

        <div class="text-center mb-5">

            <h1>Contáctenos</h1>

            <p class="lead">
                Escríbenos y te responderemos lo antes posible.
            </p>

        </div>

        <form>

            <!-- Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <!-- Correo -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo de contacto</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>

            <!-- Mensaje -->
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Enviar</button>

        </form>

    </div>
@endsection
