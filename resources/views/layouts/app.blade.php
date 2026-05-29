<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Portfólio</title>

    <title>{{ config('app.name', 'Portifolio') }}</title>

    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/contacto.css">
    <link rel="stylesheet" href="Estilo/perfil.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

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