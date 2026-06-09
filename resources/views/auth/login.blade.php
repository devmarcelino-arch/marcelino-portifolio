<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Meu Portfólio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="Estilo/login.css">
</head>
<body>
<div class="container">


    <!-- ESQUERDA -->
    <div class="left">
        <div class="icon">🚀</div>
        <h1>Meu Portfólio</h1>
        <p>Sistema moderno com design premium, animações fluidas e autenticação segura.</p>
    </div>

    <!-- DIREITA -->
    <div class="right">
        <div class="box">

            <h2>Entrar</h2>
            <p>Insira seu email para entrar em contacto</p>
            @if(session('erro'))
                <div class="erro">{{ session('erro') }}</div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required placeholder="seu@email.com">
                </div>

                <div class="input-group">
                    <label>Senha</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" required placeholder="••••••••">
                        <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                    </div>
                </div>



                <div class="caixa-botao botoes">

                <button class="botao" type="submit">Enviar</button>

            </div>
            </form>

            <hr>

            <a href="/auth/google">
                
                <button class="google" type="button">
                    <i class="fab fa-google"></i>
                    Entrar com Google
                </button>
            </a>

            <div class="footer">
                Não tem conta? <a href="#">Registe-se agora</a>
            </div>

        </div>
    </div>
</div>
    <script>
        // Toggle senha
        const toggle = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        toggle.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                toggle.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                toggle.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    </script>
</body>
</html>