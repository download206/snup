@extends('layouts.app')

@section('title', 'Home - Minha Empresa')

@section('content')
    <section class="hero-section text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-4 fw-bold">Bem-vindo ao Nosso Site!</h1>
            <p class="lead">Soluções completas em marketing digital para alavancar seu negócio.</p>
            <a href="/contato" class="btn btn-primary btn-lg mt-3">Fale Conosco</a>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                            <h3>SEO</h3>
                            <p>Melhore seu posicionamento nos mecanismos de busca.</p>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais serviços aqui -->
            </div>
        </div>
    </section>
@endsection