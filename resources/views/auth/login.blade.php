<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Meu Portfólio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        :root {
    --primary: #6366f1; /* Roxo/Índigo moderno */
    --primary-hover: #4f46e5;
    --bg-main: #0f172a; /* Slate escuro para o lado esquerdo */
    --bg-card: #ffffff;
    --text-main: #1e293b;
    --text-muted: #64748b;
    --border: #e2e8f0;
    --error: #ef4444;
    --radius: 12px;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    
    background-color: #f8fafc;
    color: var(--text-main);
    
}
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    /* border: 4px red solid; */
    /* flex-direction: row; */
}
/* ==========================================================================
   LADO ESQUERDO (Apresentação)
   ========================================================================== */
.left {
    
    background: linear-gradient(135deg, #1e1b4b 0%, var(--bg-main) 100%);
    display: flex;
    width: 500px;
    height: 630px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 10% 8%;
    color: #ffffff;
    position: relative;
    overflow: hidden;
}

/* Efeito sutil de luz de fundo */
.left::before {
    content: '';
    position: absolute;
    top: -20%;
    left: -20%;
    width: 60%;
    height: 60%;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
    border-radius: 50%;
}

.left .icon {
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
    animation: float 4s ease-in-out infinite;
}

.left h1 {
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.5px;
    background: linear-gradient(to right, #ffffff, #cbd5e1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.left p {
    font-size: 1.1rem;
    color: #94a3b8;
    line-height: 1.6;
    max-width: 460px;
}

/* ==========================================================================
   LADO DIREITO (Formulário)
   ========================================================================== */
.right {
    
    display: flex;
    justify-content: center;
    align-items: center;
    /* padding: 2rem; */
    background-color: #f8fafc;
    width: 500px;
    height: 630px;
    /* border:3px green solid; */
}

.box {
    width: 100%;
    background: var(--bg-card);
    padding: 2.5rem;
    height:100%;
    border-radius: var(--radius);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(226, 232, 240, 0.8);
}

.box h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-main);
    margin-bottom: 2rem;
    letter-spacing: -0.5px;
}

/* Mensagem de Erro */
.erro {
    background-color: #fef2f2;
    color: var(--error);
    border: 1px solid #fee2e2;
    padding: 0.75rem 1rem;
    border-radius: 8px;
    font-size: 0.9rem;
    margin-bottom: 1.5rem;
    font-weight: 500;
}

/* Inputs e Grupos */
.input-group {
    margin-bottom: 1.25rem;
}

.input-group label {
    display: block;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-main);
    margin-bottom: 0.5rem;
}

.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

input[type="email"],
input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 0.95rem;
    color: var(--text-main);
    background-color: #ffffff;
    border: 1px solid var(--border);
    border-radius: 8px;
    outline: none;
    transition: var(--transition);
}

/* Espaço extra para o ícone de olho no input de senha */
.input-wrapper input {
    padding-right: 2.75rem;
}

input:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
}

/* Ícone de Mostrar Senha */
.toggle-password {
    position: absolute;
    right: 1rem;
    color: var(--text-muted);
    cursor: pointer;
    padding: 0.25rem;
    transition: var(--transition);
}

.toggle-password:hover {
    color: var(--text-main);
}

/* Botões */
button {
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
}

button[type="submit"] {
    background-color: var(--primary);
    color: white;
    margin-top: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(99, 102, 241, 0.2);
}

button[type="submit"]:hover {
    background-color: var(--primary-hover);
    transform: translateY(-1px);
    box-shadow: 0 6px 12px -1px rgba(99, 102, 241, 0.3);
}

button[type="submit"]:active {
    transform: translateY(0);
}

/* Divisor (HR) */
hr {
    border: 0;
    height: 1px;
    background: var(--border);
    margin: 1.75rem 0;
}

/* Botão do Google */
button.google {
    background-color: #ffffff;
    color: var(--text-main);
    border: 1px solid var(--border);
}

button.google:hover {
    background-color: #f8fafc;
    border-color: #cbd5e1;
}

button.google i {
    color: #ea4335; /* Cor oficial do Google para o G */
}

/* Links em geral para não quebrar o layout do botão Google */
a {
    text-decoration: none;
    display: block;
}

/* Rodapé da Box */
.footer {
    text-align: center;
    margin-top: 1.75rem;
    font-size: 0.9rem;
    color: var(--text-muted);
}

.footer a {
    display: inline;
    color: var(--primary);
    font-weight: 600;
    transition: var(--transition);
}

.footer a:hover {
    color: var(--primary-hover);
    text-decoration: underline;
}

/* ==========================================================================
   ANIMAÇÕES E RESPONSIVIDADE
   ========================================================================== */
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

/* Responsivo para Tablets e Celulares */
@media (max-width: 900px) {
    body {
        flex-direction: column;
    }
    
    .left {
        display: none; /* Esconde o lado esquerdo em telas menores para poupar espaço */
    }
    
    .right {
        padding: 1.5rem;
    }
    
    .box {
        padding: 2rem 1.5rem;
        box-shadow: none; /* Remove sombra pesada no mobile para parecer mais limpo */
        border: none;
        background: transparent;
    }
}
    </style>
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

            <h2>Bem-vindo de volta</h2>

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

                <button type="submit">Entrar</button>
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