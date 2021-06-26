<?php use App\Http\Controllers\ControladorUsuário; ?>

@extends('layout.app', ["current" => "formas_ingresso/formas_ingresso"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro das formas de ingresso</h5>
        @if(count($formas_ingresso) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Forma_ingresso</th>
                    <th>Data_implementação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formas_ingresso as $forma_ingresso)
                <tr>
                    <td>{{$forma_ingresso->forma_ingresso}}</td>
                    <td>{{$forma_ingresso->data_implementacao}}</td>
                    <td>
                        <a href="{{ route('formas_ingresso.edit', $forma_ingresso['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('formas_ingresso.destroy', $forma_ingresso['id']) }}" method="POST">
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