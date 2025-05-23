<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} - Marketing Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar') <!-- Inclui um cabeçalho -->

    <div class="container mt-5">
        <h1>Bem-vindo à Sua Empresa de Marketing Digital!</h1>
        <p>Transforme seu negócio com nossos serviços.</p>
    </div>

    @include('partials.footer') <!-- Rodapé -->
</body>
</html>