@extends('layout')

@section('cabecalho')
    <h1>Adicionar Ator</h1>
@endsection

@section('conteudo') 

    <!-- !empty -->
    @if(isset($mensagemCpf) && ($mensagemCpf))
        <div class="alert alert-faled" style="background-color: #EE0000;">
            <p style="color: white; font-weight: bold; font-size: 1.4em;">
                {{$mensagemCpf}}
            </p>
        </div>
    @endif
    
    <form method="POST" autocomplete="off">
        @csrf   

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">

            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

            <button class="btn btn-primary" style="margin-top: 20px;">Adicionar</button>
        </div>
    </form>

    <div>            
        <a class="btn btn-primary" href="/atores">Voltar</a>   
    </div>
@endsection