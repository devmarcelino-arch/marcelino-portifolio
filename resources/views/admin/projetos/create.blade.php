@extends('layouts.admin')

@section('conteudo')

<div class="admin-form-container">

    <div class="form-header">
        <h2>Adicionar Novo Projeto</h2>
        <p>Preenche as informações do projeto abaixo</p>
    </div>

    <form action="{{ route('projetos.store') }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf

        <!-- Título -->
        <div class="form-group">
            <label>Título do Projeto</label>
            <input type="text" name="titulo" placeholder="Ex: Sistema de Gestão Escolar" required>
        </div>

        <!-- Categoria -->
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="categoria" placeholder="Ex: Sistema Web, API, Mobile" required>
        </div>

        <!-- Descrição -->
        <div class="form-group">
            <label>Descrição</label>
            <textarea name="descricao" rows="4" placeholder="Descreve o projeto..." required></textarea>
        </div>

        <!-- Badge -->
        <div class="form-group">
            <label>Badge (Tecnologia principal)</label>
            <input type="text" name="badge" placeholder="Ex: Laravel, Node.js, Flutter">
        </div>

        <!-- Tecnologias -->
        <div class="form-group">
            <label>Tecnologias (separadas por vírgula)</label>
            <input type="text" name="tecnologias" placeholder="PHP, Laravel, MySQL, JS">
        </div>

        <!-- Links -->
        <div class="form-group">
            <label>Link Demo</label>
            <input type="text" name="link_demo" placeholder="https://...">
        </div>

        <div class="form-group">
            <label>Link GitHub</label>
            <input type="text" name="link_github" placeholder="https://github.com/...">
        </div>

        <!-- Imagem -->
        <div class="form-group">
            <label>Imagem do Projeto</label>
            <input type="file" name="imagem">
        </div>

        <!-- Botão -->
        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Salvar Projeto
            </button>

            <a href="{{ route('projetos.index') }}" class="btn-secondary">
                Cancelar
            </a>
        </div>

    </form>

</div>

@endsection