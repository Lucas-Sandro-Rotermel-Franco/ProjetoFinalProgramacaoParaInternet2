@extends('layouts.app', ["current" => "curso/cursos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('cursos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cursoName">Nome</label>
                <input type="text" class="form-control" name="cursoName" id="cursoName" placeholder="Nome">

                <label for="coordenadorCurso">Coordenador</label>
                <input type="text" class="form-control" name="coordenadorCurso" id="coordenadorCurso" placeholder="Coordenador">

                <label for="data_criacaoCurso">Data de Criação</label>
                <input type="text" class="form-control" name="data_criacaoCurso" id="data_criacaoCurso" placeholder="Data de criação">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/cursos" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection