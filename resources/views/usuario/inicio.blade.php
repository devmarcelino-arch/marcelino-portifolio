@extends('layouts.app')
@section('conteudo')

    <!-- SECCAO INICIO -->
    <section class="inicio" id="inicio">

        <div class="inicio-conteudo">

            <h1>Ola, Eu sou <span>Marcelino</span></h1>

            <div class="texto-animado">
                <h3>Desenvolvedor Web</h3>
            </div>

            <p>
                Sou Desenvolvedor Web apaixonado por tecnologia, criando soluções 
                com Java, PHP Laravel, JavaScript e outras tecnologias que dão vida a projetos inovadores.
                Cada linha de código é escrita com 
                foco em desempenho, design e experiência do utilizador.
            </p>

            <div class="caixa-botao">

                <a href="/perfil" class="botao">Ver Mais</a>
                <a href="/contacto" class="botao">Falar</a>

            </div>

        </div>

        <div class="inicio-social">
            <a href="https://github.com/devmarcelino-arch/marcelino-portifolio"><i class="fab fa-github"></i></a>
            
            <a href="https://wa.me/258868935480"><i class='bx bxl-whatsapp'></i></a>
            <a href="https://www.youtube.com/@MozHakerDev"><i class='bx bxl-youtube'></i></a>

        </div>

        <div class="imagem-hover"></div>

    </section>

    <!-- SECCAO SOBRE -->
   <section class="sobre" id="sobre">

    <div class="titulo-secao">
        <h2>Sobre <span>Mim</span></h2>
    </div>

    <div class="sobre-conteudos">

        <!-- DIV 1 -->
        <div class="caixa-imagem-sobre">

            <div class="sobre-imagem">
                <img src="/images/perfil1.png" alt="">
                <span class="circulo-rotacao"></span>
            </div>

        </div>

        <!-- DIV 2 -->
        <div class="sobre-conteudo">

            <h3>Desenvolvedor Web</h3>

            <p>
                Desenvolvedor Web focado em criar aplicações modernas,
                seguras e eficientes. Trabalho com tecnologias como Java,
                PHP Laravel, JavaScript e ferramentas que transformam ideias
                em soluções digitais reais.
            </p>

            <div class="caixa-botao botoes">
                <a href="/perfil" class="botao">Ver mais</a>
            </div>

        </div>

    </div>

</section>

    <!-- SECCAO FORMACAO -->
    <section class="formacao" id="formacao">

        <h2 class="titulo-secao">Minha <span>Jornada</span></h2>

        <div class="formacao-linha">

            <!-- EDUCACAO -->
            <div class="formacao-coluna">

                <h3 class="titulo">Educação</h3>

                <div class="formacao-caixa">

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2008 - 2015
                            </div>

                            <h3>Ensino Primário</h3>

                            <p>
                                Iniciei meus estudos no ensino primário na Escola
                                de Namacula, localizada na cidade de Lichinga,
                                onde desenvolvi minha base académica e interesse
                                pela aprendizagem.
                            </p>

                        </div>

                    </div>

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2016 - 2020
                            </div>

                            <h3>Ensino Secundário</h3>

                            <p>
                                Frequentei a Escola Secundária de Lichinga,
                                onde concluí o ensino secundário e comecei a
                                desenvolver interesse pela área de tecnologia
                                e informática.
                            </p>

                        </div>

                    </div>

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2024 - 2026
                            </div>

                            <h3>Universidade Rovuma</h3>

                            <p>
                                Actualmente frequento o curso de Engenharia
                                Informática na Universidade Rovuma, aprofundando
                                conhecimentos em desenvolvimento de software,
                                bases de dados, redes, sistemas web e tecnologias modernas.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- EXPERIENCIA -->
            <div class="formacao-coluna">

                <h3 class="titulo">Experiência</h3>

                <div class="formacao-caixa">

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2024
                            </div>

                            <h3>Java Básico</h3>

                            <p>
                                Iniciei minha jornada na programação com Java,
                                aprendendo lógica de programação, orientação
                                a objectos e desenvolvimento de aplicações básicas.
                            </p>

                        </div>

                    </div>

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2025
                            </div>

                            <h3>Programação Web</h3>

                            <p>
                                Desenvolvi conhecimentos em HTML, CSS,
                                JavaScript e PHP, criando websites modernos,
                                responsivos e aplicações web dinâmicas.
                            </p>

                        </div>

                    </div>

                    <div class="formacao-conteudo">

                        <div class="conteudo">

                            <div class="ano">
                                <i class='bx bx-calendar'></i> 2026
                            </div>

                            <h3>Laravel, APIs e Java Profissional</h3>

                            <p>
                                Aperfeiçoei minhas habilidades com Laravel,
                                desenvolvimento de APIs REST, integração
                                com banco de dados e desenvolvimento profissional
                                utilizando Java e tecnologias modernas.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

                </div>

            </div>

        </div>
        </div>

    </section>

    <!-- SECCAO HABILIDADES -->
    <section class="habilidades" id="habilidades">

        <h2 class="titulo-secao">Minhas <span>Habilidades</span></h2>

        <div class="habilidades-linha">

            <!-- CODING -->
            <div class="habilidades-coluna">

                <h3 class="titulo">Habilidades em Programacao</h3>

                <div class="habilidades-caixa">

                    <div class="habilidades-conteudo">

                        <div class="progresso">
                            <h3>HTML <span>99%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>CSS <span>79%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>Javascript <span>69%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>Java <span>55%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                    </div>

                </div>

            </div>

            
            <div class="habilidades-coluna" id="habilidades-coluna">

                <h3 class="titulo">Habilidades Profissionais</h3>

                <div class="habilidades-caixa">

                    <div class="habilidades-conteudo">

                        <div class="progresso">
                            <h3>Design <span>99%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>Development <span>79%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>SEO Marketing <span>69%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                        <div class="progresso">
                            <h3>Graphic Design <span>55%</span></h3>
                            <div class="barra"><span></span></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



<section class="seccao-projectos">

    <div class="cabecalho-projectos">
        <span class="etiqueta">MEUS PROJECTOS</span>
        <h2 class="titulo-secao">Projetos em <span>Destaque</span></h2>
        <p>
            Alguns dos meus trabalhos em desenvolvimento web,
            aplicações inteligentes e design moderno.
        </p>
    </div>

    <div class="swiper mySwiper">

        <div class="swiper-wrapper">

            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/logoB2.png') }}" alt="">
                        <span class="tech-tag">Laravel</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>Portfólio Inteligente</h3>
                        <p>Plataforma moderna com autenticação Google e painel administrativo completo.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/logoB5.png') }}" alt="">
                        <span class="tech-tag">React</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>Dashboard Administrativo</h3>
                        <p>Sistema completo para gestão de usuários e análises em tempo real.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/logoB4.png') }}" alt="">
                        <span class="tech-tag">IA</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>Assistente Inteligente</h3>
                        <p>Chatbot com inteligência artificial integrado.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/logoB6.png') }}" alt="">
                        <span class="tech-tag">Next.js</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>E-commerce Moderno</h3>
                        <p>Loja online completa com pagamentos integrados.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/LogoP.png') }}" alt="">
                        <span class="tech-tag">Vue.js</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>Gestão de Tarefas</h3>
                        <p>Aplicação colaborativa com drag & drop.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="swiper-slide">
                <div class="cartao-projecto">
                    <div class="imagem-projecto">
                        <img src="{{ asset('images/logoB7.png') }}" alt="">
                        <span class="tech-tag">Node.js</span>
                    </div>
                    <div class="conteudo-projecto">
                        <h3>Plataforma de Cursos</h3>
                        <p>Sistema completo de e-learning.</p>
                        <div class="rodape-projecto">
                            <a href="#" class="botao-projecto">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navegação -->
        <div class="swiper-button-prev botao-swiper anterior"></div>
        <div class="swiper-button-next botao-swiper proximo"></div>

        <!-- Paginação -->
        <div class="swiper-pagination"></div>

    </div>

</section>



 


    <!-- SECCAO CONTACTO -->
    <section class="contacto" id="contacto">

        <h2 class="titulo-secao">Contacte <span>Me!</span></h2>

        <form action="#">

            <div class="caixa-input">

                <div class="campo-input">

                    <input type="text" placeholder="Nome Completo" required>

                    <span class="foco"></span>

                </div>

                <div class="campo-input">

                    <input type="email" placeholder="Digite seu Email" required>

                    <span class="foco"></span>

                </div>

                <div class="campo-input">

                    <input type="number" placeholder="Numero de Telefone" required>

                    <span class="foco"></span>

                </div>

                <div class="campo-input">

                    <input type="email" placeholder="Email alternativo" required>

                    <span class="foco"></span>

                </div>

            </div>

            <div class="campo-textarea">

                <textarea cols="30" rows="10" placeholder="Digite sua Mensagem" required></textarea>

                <span class="foco"></span>

            </div>

            <div class="caixa-botao botoes">

                <button class="botao" type="submit">Enviar</button>

            </div>

        </form>



        

    </section>
    
    @endsection