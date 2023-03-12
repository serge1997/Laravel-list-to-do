@extends('layouts.main')

@section('title','Meus Tarefas')

@section('content')
    <div class="container-fluid" id="name-container">
        <div class="dropdown">
            <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $usuario['name'] }}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile/show">Perfil</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <a class="dropdown-item" href="/logout" onclick="event.preventDefault();this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="container" id="table-container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Concluido</th>
                    <th>Detalhes</th>
                    <th>Status</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listas as $lists)
                    <tr>
                        <td>{{ $lists->id }}</td>
                        <td>{{ $lists->titulo }}</td>
                        <td>{{ date('d/m/Y', strtotime($lists->data_inicio)) }}</td>
                        <td>{{ $lists->descricao }}</td>
                        <td><a href="/concluido/{{ $lists->id }}">Concluir</a></td>
                        <td><a href="/lista/{{ $lists->id }}">Saiba mais</a></td>
                        <td>
                            @if($lists->conluido == True)
                                <p style="color: green;"><ion-icon name="checkmark-circle"></ion-icon></p>
                            @else
                            <p style="color: red;"><ion-icon name="checkmark-circle"></ion-icon></p>
                            @endif
                        </td>

                        <td style="color: red;">
                            <a href="/apagar/{{$lists->id}}" class="nav-link">
                                <ion-icon name="remove-circle"></ion-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if(count($listas) == 0)
            <h2 style="text-align: center;">Não tem lista Cadastrada</h2>
        @endif
    </div>

@endsection