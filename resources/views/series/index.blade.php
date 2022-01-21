@extends('layout')

@section('cabecalho')
    séries
@endsection

@section('conteudo')

    <!-- !empty -->
    @if(!($mensagem) == "" )
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif

    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>
    <a href="/home" class="btn btn-dark mb-2">Voltar</a>


    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}
                <form method="post" action="/series/{{$serie->id_series}}"
                    onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}?')">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection

