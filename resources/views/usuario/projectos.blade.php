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
                Projetos Recentes
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
                    <img src="{{ asset('images/projecto.png') }}" alt="">
                    <span class="badge-tech">Laravel</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Sistema Web
                    </div>

                    <h2>
                        Plataforma de Gestão Escolar
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
                    <img src="{{ asset('images/projecto2.jpg') }}" alt="">
                    <span class="badge-tech">Java</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        Desktop App
                    </div>

                    <h2>
                        Sistema Hospitalar
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
                    <img src="{{ asset('images/projecto3.jpg') }}" alt="">
                    <span class="badge-tech">Node.js</span>
                </div>

                <div class="conteudo-projecto">

                    <div class="categoria">
                        API Backend
                    </div>

                    <h2>
                        Plataforma de Cursos Online
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
                    <img src="{{ asset('images/projecto4.jpg') }}" alt="">
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

<style>

.projectos-section{
    position:relative;
    min-height:100vh;
    background:#020617;
    padding:100px 20px;
    overflow:hidden;
}

.container-projectos{
    max-width:1400px;
    margin:auto;
    position:relative;
    z-index:2;
}

.topo-projectos{
    text-align:center;
    max-width:800px;
    margin:auto auto 70px;
}

.tag-section{
    display:inline-block;
    background:rgba(59,130,246,.15);
    color:#60a5fa;
    padding:10px 18px;
    border-radius:40px;
    font-size:14px;
    margin-bottom:20px;
    border:1px solid rgba(59,130,246,.25);
}

.topo-projectos h1{
    color:white;
    font-size:60px;
    margin-bottom:20px;
}

.topo-projectos p{
    color:#94a3b8;
    font-size:18px;
    line-height:1.8;
}

.grid-projectos{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    
}

.card-projecto{
    background:rgba(15,23,42,.85);
    border:1px solid rgba(255,255,255,.05);
    border-radius:28px;
    overflow:hidden;
    transition:.4s;
    backdrop-filter:blur(10px);
    box-shadow:0 10px 30px rgba(0,0,0,.3);
    transform: scale(0.8);
}

.card-projecto:hover{
    /* transform:translateY(-10px); */
    border-color:rgba(59,130,246,.4);
    box-shadow:0 20px 50px rgba(59,130,246,.15);
}

.imagem-projecto{
    position:relative;
    height:240px;
    overflow:hidden;
}

.imagem-projecto img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.5s;
}

.card-projecto:hover .imagem-projecto img{
    transform:scale(1.08);
}

.badge-tech{
    position:absolute;
    top:18px;
    right:18px;
    background:#3b82f6;
    color:white;
    padding:8px 14px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

.conteudo-projecto{
    padding:30px;
}

.categoria{
    color:#60a5fa;
    font-size:14px;
    margin-bottom:12px;
    font-weight:600;
}

.conteudo-projecto h2{
    color:white;
    font-size:28px;
    margin-bottom:15px;
    line-height:1.3;
}

.conteudo-projecto p{
    color:#94a3b8;
    line-height:1.8;
    margin-bottom:25px;
}

.tecnologias{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin-bottom:30px;
}

.tecnologias span{
    background:#0f172a;
    color:#cbd5e1;
    padding:10px 14px;
    border-radius:12px;
    font-size:13px;
    border:1px solid rgba(255,255,255,.05);
}

.acoes{
    display:flex;
    align-items:center;
    gap:15px;
}

.btn-demo{
    flex:1;
    text-align:center;
    background:#3b82f6;
    color:white;
    text-decoration:none;
    padding:15px;
    border-radius:14px;
    font-weight:600;
    transition:.3s;
}

.btn-demo:hover{
    background:#2563eb;
}

.btn-github{
    width:55px;
    height:55px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#0f172a;
    color:white;
    text-decoration:none;
    font-size:22px;
    transition:.3s;
}

.btn-github:hover{
    background:#1e293b;
}

.blur{
    position:absolute;
    border-radius:50%;
    filter:blur(120px);
}

.blur-1{
    width:300px;
    height:300px;
    background:#2563eb;
    top:-100px;
    left:-100px;
    opacity:.25;
}

.blur-2{
    width:350px;
    height:350px;
    background:#7c3aed;
    bottom:-120px;
    right:-120px;
    opacity:.2;
}

@media(max-width:768px){

    .topo-projectos h1{
        font-size:40px;
    }

    .topo-projectos p{
        font-size:16px;
    }

}

</style>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

@endsection