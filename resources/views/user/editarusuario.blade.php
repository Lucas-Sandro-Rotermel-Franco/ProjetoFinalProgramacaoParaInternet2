@extends('layouts.app', ["current" => "user/usuarios"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('usuarios.update', $usuario['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nameUsuario">Nome</label>
                <input type="text" class="form-control" name="nameUsuario" id="nameUsuario" placeholder="Nome">

                <label for="matriculaUsuario">Matricula</label>
                <input type="text" class="form-control" name="matriculaUsuario" id="matriculaUsuario" placeholder="Matricula">

                <label for="nacionalidadeUsuario">Nacionalidade</label>
                <input type="text" class="form-control" name="nacionalidadeUsuario" id="nacionalidadeUsuario" placeholder="Nacionalidade">

                <label for="data_nascimentoUsuario">Data_Nascimento</label>
                <input type="text" class="form-control" name="data_nascimentoUsuario" id="data_nascimentoUsuario" placeholder="Data de nascimento">

                <label for="emailUsuario">Email</label>
                <input type="text" class="form-control" name="emailUsuario" id="emailUsuario" placeholder="Email">

                <label for="sexoUsuario">Sexo</label>
                <input type="text" class="form-control" name="sexoUsuario" id="sexoUsuario" placeholder="Sexo">

                <label for="racaUsuario">Raça</label>
                <input type="text" class="form-control" name="racaUsuario" id="racaUsuario" placeholder="Raça">

                <label for="forma_ingresso_idUsuario">Forma_Ingresso</label>
                <input type="text" class="form-control" name="forma_ingresso_idUsuario" id="forma_ingresso_idUsuario" placeholder="Forma de ingresso">

                <label for="curso_idUsuario">Curso</label>
                <input type="text" class="form-control" name="curso_idUsuario" id="curso_idUsuario" placeholder="Curso">

                <label for="statusUsuario">Status</label>
                <input type="text" class="form-control" name="statusUsuario" id="statusUsuario" placeholder="Status">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/usuarios" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection