<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Nuevo servicio</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >

    <!-- Bootstrap Icons (para el footer) -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
</head>

<body class="d-flex flex-column min-vh-100">

<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">

        <div class="container-fluid">

            <!-- Links -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients') }}">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('services.index') }}">
                        Servicios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        Contacto
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('consulting') }}">
                        Asesorías
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">
                        Productos
                    </a>
                </li>

            </ul>

        </div>

    </nav>

</header>


<main class="flex-grow-1">

    <div class="container mt-5" style="max-width: 720px;">

        <h1 class="mb-4">Nuevo servicio</h1>

        <form action="{{ route('services.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea id="description" name="description" rows="4"
                          class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route('services.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>

</main>


<!-- Footer alineado al patrón del navbar (bg-success) -->
<footer class="bg-success text-white mt-5">

    <div class="container py-5">

        <div class="row gy-4">

            <!-- Columna 1: Marca -->
            <div class="col-md-4">
                <h5 class="mb-3">Mi Proyecto</h5>
                <p class="mb-0 small">
                    Desarrollamos soluciones tecnológicas a la medida
                    para impulsar la transformación digital de tu organización.
                </p>
            </div>

            <!-- Columna 2: Enlaces -->
            <div class="col-md-4">
                <h6 class="text-uppercase mb-3">Navegación</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a href="{{ route('home') }}" class="link-light text-decoration-none">Inicio</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('clients') }}" class="link-light text-decoration-none">Clientes</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('services.index') }}" class="link-light text-decoration-none">Servicios</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('contact') }}" class="link-light text-decoration-none">Contacto</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('consulting') }}" class="link-light text-decoration-none">Asesorías</a>
                    </li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div class="col-md-4">
                <h6 class="text-uppercase mb-3">Contacto</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Medellín, Colombia
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill me-2"></i>
                        contacto@miproyecto.com
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-telephone-fill me-2"></i>
                        +57 300 000 0000
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="border-top border-light border-opacity-25">
        <div class="container py-3 text-center small">
            &copy; {{ date('Y') }} Mi Proyecto. Todos los derechos reservados.
        </div>
    </div>

</footer>


<!-- Bootstrap JavaScript Bundle (includes Popper) -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>

</html>
