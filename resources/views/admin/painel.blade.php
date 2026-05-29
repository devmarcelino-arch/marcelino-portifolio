@extends('layouts.admin')

@section('title', 'Dashboard')

@section('conteudo')

    <!-- CARDS -->
    <div class="cards-container">
        <div class="card">
             <i class='bx bx-folder'></i>
            <div>
                <h2>24</h2>
                <p>Projectos</p>
            </div>
           
        </div>

        <div class="card">
            <i class='bx bx-code-alt'></i>
            <div>
                <h2>12</h2>
                <p>Skills</p>
            </div>
            
        </div>

        <div class="card">
            <i class='bx bx-envelope'></i>
            <div>
                
                <h2>120</h2>
                <p>Mensagens</p>
            </div>
            
        </div>

        <div class="card">
            <i class='bx bx-line-chart'></i>
            <div>
                <h2>8k</h2>
                <p>Visitantes</p>
            </div>
            
        </div>
    </div>

    <!-- GRID -->
    <div class="dashboard-grid">
        
        <!-- Últimos Projectos -->
        <div class="dashboard-box">
            <div class="box-header">
                <h3>Últimos Projectos</h3>
                <button class="btn-primary">Ver Todos</button>
            </div>
            <div class="projects-list">
                <div class="project-item">
                    <img src="{{ asset('images/projectos/project1.jpg') }}" alt="">
                    <div>
                        <h4>Portfolio Moderno</h4>
                        <p>Laravel + JS</p>
                    </div>
                </div>
                <div class="project-item">
                    <img src="{{ asset('images/projectos/project2.jpg') }}" alt="">
                    <div>
                        <h4>Sistema Escolar</h4>
                        <p>PHP + MySQL</p>
                    </div>
                </div>
                <div class="project-item">
                    <img src="{{ asset('images/projectos/project3.jpg') }}" alt="">
                    <div>
                        <h4>API Laravel</h4>
                        <p>REST API</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actividade -->
        <div class="dashboard-box">
            <div class="box-header">
                <h3>Actividade Recente</h3>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <span class="dot"></span>
                    <p>Novo projecto adicionado</p>
                    <small>Há 2 horas</small>
                </div>
                <div class="activity-item">
                    <span class="dot"></span>
                    <p>Nova mensagem recebida</p>
                    <small>Há 5 horas</small>
                </div>
                <div class="activity-item">
                    <span class="dot"></span>
                    <p>Perfil actualizado</p>
                    <small>Ontem</small>
                </div>
                <div class="activity-item">
                    <span class="dot"></span>
                    <p>Skill "Vue.js" adicionada</p>
                    <small>Ontem</small>
                </div>
            </div>
        </div>

    </div>

@endsection