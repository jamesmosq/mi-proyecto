@extends('layouts.app')

@section('title', 'Asesorías')

@section('content')
    <!-- Título -->
    <div class="container mt-5">

        <div class="text-center mb-5">

            <h1>Asesorías</h1>

            <p class="lead">
                Te acompañamos en decisiones de tecnología, desarrollo de software y transformación digital.
            </p>

        </div>

        <div class="text-center">
            <a href="{{ route('contact') }}" class="btn btn-success">Solicitar una asesoría</a>
        </div>

    </div>
@endsection
