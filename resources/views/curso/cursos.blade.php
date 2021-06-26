<?php use App\Http\Controllers\ControladorUsuário; ?>

@extends('layouts.app', ["current" => "curso/cursos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Cursos</h5>
        @if(count($cursos) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Coordenador</th>
                    <th>Ano_Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <td>{{$curso->curso}}</td>
                    <td>{{$curso->coordenador}}</td>
                    <td>{{$curso->ano_criacao}}</td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('cursos.destroy', $curso['id']) }}" method="POST">
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
@endsection