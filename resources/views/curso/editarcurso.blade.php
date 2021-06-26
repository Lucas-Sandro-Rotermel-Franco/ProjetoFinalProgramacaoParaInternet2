@extends('layouts.app', ["current" => "curso/cursos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('cursos.update', $curso['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cursoName">Nome</label>
                <input type="text" class="form-control" name="cursoName" id="cursoName" placeholder="Nome">

                <label for="coordenadorCurso">Coordenador</label>
                <input type="text" class="form-control" name="coordenadorCurso" id="coordenadorCurso" placeholder="Coordenador">

                <label for="ano_criacaoCurso">Ano_Criação</label>
                <input type="text" class="form-control" name="ano_criacaoCurso" id="ano_criacaoCurso" placeholder="Ano de criação">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/cursos" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection