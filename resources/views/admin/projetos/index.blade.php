@extends('layouts.admin')

@section('conteudo')

<div class="pagina-projetos">

    <div class="topo-pagina">

        <div>
            <h1>Projetos</h1>
            <p>Gerencie os projetos do seu portfólio</p>
        </div>

        <a href="/admin/projetos/create" class="btn-novo">
            <i class='bx bx-plus'></i>
            Novo Projeto
        </a>

    </div>

    @php
        $categorias = $projetos->groupBy('categoria');
    @endphp

    @forelse($categorias as $categoria => $listaProjetos)

        <div class="categoria-bloco">

            <h2 class="titulo-categoria">
                {{ $categoria }}
            </h2>

            <div class="grid-projetos">

                @foreach($listaProjetos as $projeto)

                    <div class="card-admin-projeto">

                        <div class="imagem">

                            @if($projeto->imagem)
                                <img
                                    src="{{ asset('storage/' . $projeto->imagem) }}"
                                    alt="{{ $projeto->titulo }}">
                            @else
                                <img
                                    src="{{ asset('images/sem-imagem.png') }}"
                                    alt="">
                            @endif

                            <span class="badge">
                                {{ $projeto->badge }}
                            </span>

                        </div>

                        <div class="conteudo">

                            <h3>
                                {{ $projeto->titulo }}
                            </h3>

                            <p>
                                {{ Str::limit($projeto->descricao, 100) }}
                            </p>

                            <div class="tecnologias">

                                @foreach($projeto->tecnologias ?? [] as $tec)
                                    <span>{{ $tec }}</span>
                                @endforeach

                            </div>

                            <div class="acoes">

                                <a
                                    href="{{ route('projetos.edit',$projeto->id) }}"
                                    class="btn-editar">

                                    <i class='bx bx-edit'></i>
                                    Editar

                                </a>

                                <form
                                    action="{{ route('projetos.destroy',$projeto->id) }}"
                                    method="POST">

                                    @csrf

                                    <button
                                        type="submit"
                                        class="btn-apagar"
                                        onclick="return confirm('Deseja apagar este projeto?')">

                                        <i class='bx bx-trash'></i>
                                        Apagar

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    @empty

        <div class="sem-projetos">

            <i class='bx bx-folder-open'></i>

            <h3>Nenhum projeto encontrado</h3>

            <p>Adicione o primeiro projeto do portfólio.</p>

            <a href="{{ route('projetos.create') }}"
               class="btn-novo">

                Adicionar Projeto

            </a>

        </div>

    @endforelse

</div>

@endsection