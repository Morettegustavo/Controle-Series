@extends('layout')

@section('cabecalho')
    SÉRIES E SEU ELENCO
@endsection

@section('conteudo')

    <a href="/series" class="btn btn-dark mb-2">Séries</a>
    <a href="/atores" class="btn btn-dark mb-2">Atores</a>

    <ul class="list-group">
        @foreach($series_atores as $serie_ator)
        <!-- @dump($serie_ator) -->
        <li class="list-group-item d-flex justify-content-between align-items-center;"style="margin-bottom:10px">      
            Série / filme: {{$serie_ator->nomeseries}} <br>
            Elenco: {{$serie_ator->nomeator}}, CPF do ator: {{$serie_ator->cpf}} <br>
            Data de lançamento série / filme: 
            <?php
                $hoje = date_create($serie_ator->data); 
                echo date_format($hoje, 'd-m-Y');
            ?> 
            <br>
        @endforeach
    </ul>
@endsection
