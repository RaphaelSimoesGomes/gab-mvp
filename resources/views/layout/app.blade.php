<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Título Padrão')</title>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vite -->
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <div class="bg-white shadow p-3">
            <h1 class="btn btn-primary m-2">Home</h1>
            <div class="position-absolute top-0 end-0">
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a> --}}
            </div>
        </div>
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-secondary text-white text-center py-2 mt-auto">
        <h5>Feito por Raphael Simões - Espero que gostem ❤️</h5>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>