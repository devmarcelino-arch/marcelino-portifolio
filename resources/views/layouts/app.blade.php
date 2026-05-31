<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>{{ config('app.name', 'Portifolio') }} | Marcelino Omar Rachide</title>
    <meta name="description" content="Portfólio de Marcelino Omar Rachide, estudante de Engenharia Informática, desenvolvedor web e apaixonado por tecnologia.">
    <meta name="keywords" content="Marcelino Omar, Portfólio, Laravel, PHP, Engenharia Informática, Desenvolvedor Web, Moçambique">
    <meta name="author" content="Marcelino Omar Rachide">
    <meta name="robots" content="index, follow">

    <!-- Cor do navegador em dispositivos móveis -->
    <meta name="theme-color" content="#0f172a">

    <!-- Open Graph (WhatsApp, Facebook, LinkedIn) -->
    <meta property="og:title" content="Marcelino Omar Rachide | Portfólio">
    <meta property="og:description" content="Estudante de Engenharia Informática e desenvolvedor web. Conheça meus projetos, habilidades e experiência.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('img/preview.png') }}">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Marcelino Omar Rachide | Portfólio">
    <meta name="twitter:description" content="Estudante de Engenharia Informática e desenvolvedor web.">
    <meta name="twitter:image" content="{{ asset('img/preview.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('Estilo/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Estilo/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('Estilo/perfil.css') }}">

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- CABECALHO -->
    <header class="cabecalho">

        <a href="#" class="logotipo">portifolio.</a>

        <div class="bx bx-menu" id="icone-menu"></div>

        <nav class="menu-navegacao">

            <a href="/" class="ativo">Home</a>
            <a href="/perfil">Sobre</a>
            <a href="/projectos">Projectos</a>
            <a href="/contacto">Contacto</a>
            <a href="/login">Entrar</a>

            <span class="nav-ativa"></span>
        </nav>

    </header>

<!-- CONTEÚDO -->
<main >

    @yield('conteudo')

</main>

<!-- FOOTER -->

<!-- RODAPE -->
    <footer class="rodape">

        <div class="rodape-texto">

            <p>
                Copyright &copy; 2026 by Marcelino |
                Todos direitos Reservados.
            </p>

        </div>

        <div class="rodape-icono-topo">

            <a href="#">
                <i class='bx bx-up-arrow-alt'></i>
            </a>

        </div>

    </footer>

    <script src="/js/script.js"></script>
    
</body>
</html>