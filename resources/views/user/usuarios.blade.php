<?php use App\Http\Controllers\ControladorUsuário; ?>

@extends('layouts.app', ["current" => "user/usuarios"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Usuários</h5>
        @if(count($usuarios) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Mátricula</th>
                    <th>Nacionalidade</th>
                    <th>Data_Nascimento</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Raça</th>
                    <th>Forma_Ingresso</th>
                    <th>Curso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user)
                <tr>
                    <td>{{$user->matricula}}</td>
                    <td>{{$user->nacionalidade}}</td>
                    <td>{{$user->data_nascimento}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->sexo}}</td>
                    <td>{{$user->raca}}</td>
                    <td>{{ ControladorUsuário::getTicketForm($user->id) }}</td>
                    <td>{{ ControladorUsuário::getCourseName($user->id) }}</td>
                    <td>{{$user->status}}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $user['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('usuarios.destroy', $user['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
<div class="card-footer">
    <a href="/usuarios/create" class="btn bt-sm btn-primary" role="button">Novo usuário</a>
</div>
@endsection