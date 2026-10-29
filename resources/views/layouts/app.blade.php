<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>@yield('title', 'Mi Proyecto')</title>

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
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('clients') ? 'active' : '' }}" href="{{ route('clients') }}">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">
                        Servicios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        Contacto
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('consulting') ? 'active' : '' }}" href="{{ route('consulting') }}">
                        Asesorías
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">
                        Productos
                    </a>
                </li>

            </ul>

        </div>

    </nav>

</header>


<main class="flex-grow-1">

    @yield('content')

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
                    <li class="mb-2">
                        <a href="{{ route('products.index') }}" class="link-light text-decoration-none">Productos</a>
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

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Confirmación antes de eliminar (formularios con la clase .form-eliminar)
    document.querySelectorAll('.form-eliminar').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // detenemos el envío normal

            Swal.fire({
                title: form.dataset.titulo || '¿Eliminar registro?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then(function (result) {
                if (result.isConfirmed) {
                    form.submit(); // ahora sí enviamos el formulario
                }
            });
        });
    });

    // Mensaje de éxito que viene del controlador (->with('success', ...))
    @if (session('success'))
    Swal.fire({
        icon: 'success',
        title: @json(session('success')),
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
    @endif
</script>

@stack('scripts')

</body>

</html>
