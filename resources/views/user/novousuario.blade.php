@extends('layouts.app', ["current" => "user/usuarios"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('usuarios.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="matriculaUsuario">Matricula</label>
                <input type="text" class="form-control" name="matriculaUsuario" id="matriculaUsuario" placeholder="Usuario">

                <label for="nacionalidadeUsuario">Nacionalidade</label>
                <input type="text" class="form-control" name="nacionalidadeUsuario" id="nacionalidadeUsuario" placeholder="Usuario">

                <label for="data_nascimentoUsuario">Data_Nascimento</label>
                <input type="text" class="form-control" name="data_nascimentoUsuario" id="data_nascimentoUsuario" placeholder="Usuario">

                <label for="emailUsuario">Email</label>
                <input type="text" class="form-control" name="emailUsuario" id="emailUsuario" placeholder="Usuario">

                <label for="sexoUsuario">Sexo</label>
                <input type="text" class="form-control" name="sexoUsuario" id="sexoUsuario" placeholder="Usuario">

                <label for="racaUsuario">Raça</label>
                <input type="text" class="form-control" name="racaUsuario" id="racaUsuario" placeholder="Usuario">

                <label for="forma_ingresso_idUsuario">Forma_Ingresso</label>
                <input type="text" class="form-control" name="forma_ingresso_idUsuario" id="forma_ingresso_idUsuario" placeholder="Usuario">

                <label for="curso_idUsuario">Curso</label>
                <input type="text" class="form-control" name="curso_idUsuario" id="curso_idUsuario" placeholder="Usuario">

                <label for="statusUsuario">Status</label>
                <input type="text" class="form-control" name="statusUsuario" id="statusUsuario" placeholder="Usuario">

                <label for="senhaUsuario">Senha</label>
                <input type="text" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder="Usuario">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/usuarios" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection