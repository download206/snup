<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Snup Marketing Digital')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Seu CSS personalizado -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Font Awesome (ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Inclui o cabeçalho -->
    @include('partials.navbar')

    <!-- Conteúdo dinâmico das páginas -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Inclui o rodapé -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Seu JS personalizado -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>