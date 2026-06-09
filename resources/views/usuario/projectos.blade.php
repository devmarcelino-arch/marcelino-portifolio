@extends('layouts.app')

@section('conteudo')

<section class="projectos-section">

    <!-- Fundo decorativo -->
    <div class="blur blur-1"></div>
    <div class="blur blur-2"></div>

    <div class="container-projectos">

        <!-- Topo -->
        <div class="topo-projectos">

            <span class="tag-section">
                Meus Trabalhos
            </span>

            <h1>
                Projetos <span>Recentes</span>
            </h1>

            <p>
                Alguns dos sistemas, websites e aplicações que desenvolvi
                utilizando tecnologias modernas como Laravel, Java,
                Node.js e muito mais.
            </p>

        </div>

        <!-- Grid -->
        <div class="grid-projectos">

            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/portf.png') }}" alt="">
                    <span class="badge-tech">Laravel</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Sistema Web
                    </div>

                    <h2>
                        Portifolio
                    </h2>

                    <p>
                        Sistema completo para gestão de alunos,
                        professores, pagamentos e relatórios.
                    </p>

                    <div class="tecnologias">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/card3.png') }}" alt="">
                    <span class="badge-tech">Laravel</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Sistema Web
                    </div>

                    <h2>
                        Plataforma de Gestão
                    </h2>

                    <p>
                        Sistema completo para gestão de alunos,
                        professores, pagamentos e relatórios.
                    </p>

                    <div class="tecnologias">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/LogoP.png') }}" alt="">
                    <span class="badge-tech">Java</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Desktop App
                    </div>

                    <h2>
                        MedLab
                    </h2>

                    <p>
                        Aplicação desktop moderna para clínicas
                        e laboratórios médicos.
                    </p>

                    <div class="tecnologias">
                        <span>Java</span>
                        <span>Swing</span>
                        <span>MySQL</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/card1.png') }}" alt="">
                    <span class="badge-tech">Node.js</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        API Backend
                    </div>

                    <h2>
                        Plataforma de Cursos
                    </h2>

                    <p>
                        Backend robusto para gestão de cursos,
                        autenticação e pagamentos.
                    </p>

                    <div class="tecnologias">
                        <span>Node</span>
                        <span>Express</span>
                        <span>MongoDB</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/card4.png') }}" alt="">
                    <span class="badge-tech">Unity</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        API Backend
                    </div>

                    <h2>
                        Desenvolvimento de Jogos
                    </h2>

                    <p>
                        Desenvolvimento de Jogos Desktop e Mobile
                    </p>

                    <div class="tecnologias">
                        <span>Node</span>
                        <span>Unity</span>
                        <span>Mysql</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/card5.png') }}" alt="">
                    <span class="badge-tech">Laravel AI</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        API Backend
                    </div>

                    <h2>
                        Assistente de IA
                    </h2>

                    <p>
                        Assistente Inteligente para tarefas automatizadas
                    </p>

                    <div class="tecnologias">
                        <span>Node</span>
                        <span>Unity</span>
                        <span>Mysql</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card -->
            <div class="card-projecto">

                <div class="imagem-projecto">
                    <img src="{{ asset('images/card2.png') }}" alt="">
                    <span class="badge-tech">Flutter</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Mobile App
                    </div>

                    <h2>
                        Aplicação Delivery
                    </h2>

                    <p>
                        Aplicação moderna para entregas e
                        pedidos online em tempo real.
                    </p>

                    <div class="tecnologias">
                        <span>Flutter</span>
                        <span>Firebase</span>
                        <span>Dart</span>
                    </div>

                    <div class="acoes">

                        <a href="#" class="btn-demo">
                            Ver Projeto
                        </a>

                        <a href="#" class="btn-github">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

@endsection