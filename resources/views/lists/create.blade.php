@extends('layouts.main')

@section('title', 'criar tarefa')


@section('content')

<div id="create-form-container" class="col-md-6 offset-md-3">
    <h2>Criar sua tarefa do dia</h2>
    @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif
    <form action="/lists" id="myform" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo da Tarefa:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo tarefa">
        </div>
        <div class="form-group">
            <label for="descricao">descrição da Tarefa:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="O que compoe a tarefa">
        </div>
        <div class="form-group">
            <label for="data_inicio">Data:</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio">
        </div>
        <div class="form-group">
            <label for="duracao">Quantos tempo para relizar a tarefa?</label>
            <input type="time" class="form-control" id="duracao" name="duracao">
        </div>
        <div class="form-group">
            <label for="descricao">Ativar prioridade:</label>
            <select class="form-control" name="prioridade" id="prioridade">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <input type="submit" value="Criar" class="btn">
    </form>
</div>

@endsection