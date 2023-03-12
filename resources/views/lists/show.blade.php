@extends('layouts.main');

@section('title','Tarefa')

@section('content')

    <div class="container" id="show-container">
        <h2 class="alert alert-danger">Inicie: {{ date('d/m/Y', strtotime($lista->data_inicio)) }}</h2>
        <div class="row">
            <div class="col-md-3 box" id="titulo-box">
                <p>Titulo</p>
                <h6>{{$lista->titulo}}</h6>
            </div>
            <div class="col-md-3 box bg-success" id="descricao-box">
                <p>Descrição</p>
                <h6>{{$lista->descricao}}</h6>
            </div>
            <div class="col-md-3 box bg-primary" id="detalhes-box">
                <p>Detalhes: </p>
                <ul class="navbar-nav">
                    <li class="nav-item">Tempo de execução: {{ $lista->duracao }} </li>
                    <li class="nav-item">
                        @if($lista->prioridade == False)
                            <p>Prioridade: Não</p>
                        @else
                            <p>Prioridade: Sim</p>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection