@extends('layouts.app')

@section('conteudo')

<section class="contacto-section">

    <div class="contacto-container">

        <!-- Lado esquerdo -->
        <div class="contacto-info">

            <div class="foto-container">
                <img src="{{ asset('images/perfil.png') }}" alt="Minha Foto">
            </div>

            <h1>Vamos Trabalhar Juntos</h1>

            <p>
                Estou disponível para desenvolver websites, sistemas,
                aplicações web e soluções modernas. Entre em contacto
                comigo por email ou WhatsApp.
            </p>

            <div class="contacto-links">

                <a href="mailto:codewithmarcelino@gmail.com" class="contacto-card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div>
                        <span>Email</span>
                        <p>codewithmarcelino@gmail.com</p>
                    </div>
                </a>

                <a href="https://wa.me/258868935480"
                   target="_blank"
                   class="contacto-card whatsapp">

                    <div class="icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>

                    <div>
                        <span>WhatsApp</span>
                        <p>+258 86 893 5480</p>
                    </div>
                </a>

            </div>

        </div>

        <!-- Lado direito -->
        <div class="contacto-formulario">

            <div class="form-card">

                <h2>Enviar Mensagem</h2>

                <form action="" method="POST">
                    @csrf

                    <div class="input-group">
                        <label>Nome</label>
                        <input type="text"
                               name="nome"
                               placeholder="Seu nome">
                    </div>

                    <div class="input-group">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               placeholder="Seu email">
                    </div>

                    <div class="input-group">
                        <label>Assunto</label>
                        <input type="text"
                               name="assunto"
                               placeholder="Assunto">
                    </div>

                    <div class="input-group">
                        <label>Mensagem</label>
                        <textarea name="mensagem"
                                  rows="6"
                                  placeholder="Digite sua mensagem"></textarea>
                    </div>

                    <button type="submit">
                        Enviar Mensagem
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>
@endsection