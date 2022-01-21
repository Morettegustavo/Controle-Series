@extends('layout')

@section('cabecalho')
    Atores
@endsection

@section('conteudo')

    <!-- !empty -->
    @if(!($mensagem) == "" )
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif

    <a href="/atores/criar" class="btn btn-dark mb-2">Adicionar</a>
    <a href="/home" class="btn btn-dark mb-2">Voltar</a>

    <ul class="list-group">
        @foreach ($atores as $ator)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$ator->nome}}
                <form method="post" action="/atores/{{$ator->id_atores}}"
                    onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($ator->nome) }}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection

