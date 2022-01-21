@extends('layout')

@section('cabecalho')
    <h1>Adicionar Série</h1>
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            
            <label for="data">Data de lançamento</label>
            <input type="date" class="form-control" name="data" id="data">
        
            <label for="selecionar" style="margin-top: 15px;">Selecione o elenco</label>
            <select name="selecionar" id="selecionar" style="display:block;">
            @foreach($atores as $ator)
                <option value="{{$ator->id_atores}}">{{$ator->nome}}</option>
            @endforeach    
            </select>
            
            <button class="btn btn-primary" style="margin-top: 20px; display: block;">Adicionar</button>
            
        </div>
    </form>
    <div>    
        <a class="btn btn-primary" style="display: inline;" href="/series">Voltar</a>
    </div>
@endsection







