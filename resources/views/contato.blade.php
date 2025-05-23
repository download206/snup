@extends('layouts.app')

@section('title', 'Contato - Minha Empresa')

@section('content')
<section class="contact-header bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Fale Conosco</h1>
        <p class="lead">Tire suas dúvidas ou solicite um orçamento</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Formulário -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h4 mb-4">Envie sua mensagem</h2>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contato.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone">
                            </div>

                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">
                                <i class="fas fa-paper-plane me-2"></i> Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Informações de Contato -->
            <div class="col-lg-6">
                <div class="ps-lg-4">
                    <h2 class="h4 mb-4">Outras formas de contato</h2>
                    
                    <div class="d-flex mb-4">
                        <div class="icon-square bg-light text-primary rounded-circle flex-shrink-0 me-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="h6">Endereço</h3>
                            <p class="text-muted mb-0">Rua 1111, 52 <br>Balneário Camboriú/SC</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="icon-square bg-light text-primary rounded-circle flex-shrink-0 me-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="h6">Telefone</h3>
                            <p class="text-muted mb-0">
                                <a href="tel:+5511999999999" class="text-decoration-none">(47) 99936 2100</a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="icon-square bg-light text-primary rounded-circle flex-shrink-0 me-3">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <h3 class="h6">WhatsApp</h3>
                            <p class="text-muted mb-0">
                                <a href="https://wa.me/47999362100" target="_blank" class="text-decoration-none">
                                    <i class="fab fa-whatsapp me-1"></i> Enviar mensagem
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon-square bg-light text-primary rounded-circle flex-shrink-0 me-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="h6">E-mail</h3>
                            <p class="text-muted mb-0">
                                <a href="mailto:contato@empresa.com" class="text-decoration-none">contato@snup.com.br</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<!-- resources/views/contato.blade.php -->
<div class="map-container mt-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.223974670673!2d-48.6349299241364!3d-26.99621795867193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b6055a9d15b9%3A0x51ef29fd7880d3b3!2sR.%201111%2C%2052%20-%20Centro%2C%20Balne%C3%A1rio%20Cambori%C3%BA%20-%20SC%2C%2088330-789!5e0!3m2!1spt-BR!2sbr!4v1716400000000!5m2!1spt-BR!2sbr"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        aria-label="Mapa da localização da empresa">
    </iframe>
</div>
@endsection