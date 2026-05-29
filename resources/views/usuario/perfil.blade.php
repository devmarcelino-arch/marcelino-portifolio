@extends('layouts.app')

@section('conteudo')

<section class="sobre-section">

    
    <div class="efeito efeito-1"></div>
    <div class="efeito efeito-2"></div>

    <div class="sobre-container">

        
        <div class="sobre-topo">

            
            <div class="foto-area">

                <div class="foto-wrapper">
                    <img src="{{ asset('images/pefil-sobre.png') }}" alt="Minha Foto">
                </div>
            </div>

            
            <div class="info-area">

                <h2>Marcelino <span>Rachide</span></h1>

                <h1>
                    Sou
                    <span id="typed"></span>
                </h3>

                <p class="descricao">
                    Sou apaixonado por tecnologia, desenvolvimento web,
                    sistemas desktop, design moderno e soluções digitais.
                    Trabalho com Laravel, Java, Node.js, Flutter e outras
                    tecnologias modernas para criar experiências profissionais,
                    rápidas e intuitivas.
                </p>

                <div class="info-cards">

                    <div class="info-card">
                        <h3>+10</h3>
                        <span>Projetos Desenvolvidos</span>
                    </div>

                    <div class="info-card">
                        <h3>Full Stack</h3>
                        <span>Backend & Frontend</span>
                    </div>

                    <div class="info-card">
                        <h3>UI/UX</h3>
                        <span>Interfaces Modernas</span>
                    </div>

                </div>

                <div class="skills">

                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>Java</span>
                    <span>MySQL</span>
                    <span>Unity</span>
                    <span>Node.js</span>
                    <span>JavaScript</span>
                    <span>Linux</span>

                </div>

                <div class="caixa-botao botoes">

                    <a href="/contacto" class="botao">
                        Contacto
                    </a>

                    <a href="#" class="botao">
                        baixar CV
                    </a>

                </div>

            </div>

        </div>

        
        <div class="bloco-extra">

            <div class="titulo-bloco">
                <span>Experiência</span>
                <h2>O Que Eu Desenvolvo</h2>
            </div>

            <div class="cards-servicos">

                <div class="servico-card">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                    <p>
                        Desenvolvimento de websites modernos,
                        rápidos e responsivos.
                    </p>
                </div>

                <div class="servico-card">
                    <i class="fas fa-server"></i>
                    <h3>Backend APIs</h3>
                    <p>
                        Construção de APIs seguras,
                        autenticação e sistemas robustos.
                    </p>
                </div>

                <div class="servico-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Aplicações Mobile</h3>
                    <p>
                        Desenvolvimento de apps modernos
                        para Android e multiplataforma.
                    </p>
                </div>

            </div>

        </div>

       
        <div class="youtube-section">

            <div class="titulo-bloco">
                <span>Meu Canal</span>
                <h2>Vídeos e Conteúdos</h2>
            </div>

            <div class="videos-grid">

                <div class="video-card">
    <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/RF2ZVqxM1ZI"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

                <div class="video-card">
                    <iframe
                        src="/videos/video1.mp4"
                        title="YouTube video player"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="video-card">
    <iframe
        src="https://www.youtube.com/embed/-aTrpXStcM4?list=PLmY5AEiqDWwDOQa-j8lPAdWDUvN6Rbyqo"
        title="YouTube video player"
        allowfullscreen>
    </iframe>
</div>

            </div>

        </div>

    </div>

</section>



<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>

var typed = new Typed('#typed', {

    strings: [
        'Desenvolvedor Full Stack',
        'Criador de Sistemas',
        'Programador Web',
        'Designer UI/UX'
    ],

    typeSpeed: 70,
    backSpeed: 40,
    backDelay: 1500,
    loop: true

});

</script>
@endsection