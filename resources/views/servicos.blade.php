@extends('layouts.app')

@section('title', 'Nossos Serviços - Minha Empresa')

@section('content')
<section class="services-header bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Nossos Serviços</h1>
        <p class="lead">Soluções personalizadas para alavancar seu negócio digital</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Serviço 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-square bg-light text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-search-dollar fa-2x"></i>
                        </div>
                        <h3>SEO Avançado</h3>
                        <p class="text-muted">Posicionamos seu site nas primeiras posições do Google com técnicas white-hat.</p>
                        <ul class="text-start text-muted small">
                            <li>Análise de palavras-chave</li>
                            <li>Otimização técnica</li>
                            <li>Link building</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Serviço 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-square bg-light text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-ad fa-2x"></i>
                        </div>
                        <h3>Tráfego Pago</h3>
                        <p class="text-muted">Campanhas inteligentes no Google Ads e Meta Ads para conversões reais.</p>
                        <ul class="text-start text-muted small">
                            <li>Google Ads</li>
                            <li>Meta Ads (Facebook/Instagram)</li>
                            <li>Remarketing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Serviço 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-square bg-light text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-hashtag fa-2x"></i>
                        </div>
                        <h3>Redes Sociais</h3>
                        <p class="text-muted">Gestão profissional para construir autoridade e engajamento.</p>
                        <ul class="text-start text-muted small">
                            <li>Planejamento de conteúdo</li>
                            <li>Gestão de comunidades</li>
                            <li>Análise de resultados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
            <div class="bg-light p-4 rounded-3">
                <h2 class="h4">Pronto para transformar seu negócio?</h2>
                <a href="/contato" class="btn btn-primary btn-lg px-4 mt-3">
                    <i class="fas fa-paper-plane me-2"></i> Solicitar Orçamento
                </a>
            </div>
        </div>
    </div>
</section>
@endsection