<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Marcelino</title>

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <link rel="stylesheet" href="{{ asset('Estilo/admin.css') }}">
    
    @stack('styles')
</head>
<body>

    
    <aside class="sidebar" id="sidebar">
        <div class="logo-area">
            <h2>Marcelino</h2>
            <i class='bx bx-menu' id="menu-toggle"></i>
        </div>

        <ul class="menu-links">
            <li>
                <a href="#">
                    
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span>Projectos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-code-alt'></i>
                    <span>Skills</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span>Perfil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-envelope'></i>
                    <span>Mensagens</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span>Configurações</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        
        <!-- TOPBAR -->
        <div class="topbar">
            <div class="search-box">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Pesquisar...">
            </div>

            <div class="topbar-right">

                <div class="perfil">
                    <div class="imagPefil">
                        <img src="{{ asset('images/perfil.png') }}" alt="Perfil">
                    </div>
                    <div>
                        <h4>Marcelino</h4>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTEÚDO DINÂMICO -->
        @yield('conteudo')

    </main>

    <script src="{{ asset('js/admin.js') }}"></script>
    @stack('scripts')
</body>
</html>