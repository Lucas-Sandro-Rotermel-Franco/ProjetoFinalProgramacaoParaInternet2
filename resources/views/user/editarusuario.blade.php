@extends('layouts.app', ["current" => "user/usuarios"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('usuarios.update', $usuario['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nameUsuario">Nome</label>
                <input type="text" class="form-control" value="{{$usuario->name}}" name="nameUsuario" id="nameUsuario" placeholder="Nome">

                <label for="matriculaUsuario">Matricula</label>
                <input type="text" class="form-control" value="{{$usuario->matricula}}" name="matriculaUsuario" id="matriculaUsuario" placeholder="Matricula">

                <label for="nacionalidadeUsuario">Nacionalidade</label>
                <input type="text" class="form-control" value="{{$usuario->nacionalidade}}" name="nacionalidadeUsuario" id="nacionalidadeUsuario" placeholder="Nacionalidade">

                <label for="data_nascimentoUsuario">Data de Nascimento</label>
                <input type="text" class="form-control" value="{{$usuario->data_nascimento}}" name="data_nascimentoUsuario" id="data_nascimentoUsuario" placeholder="Data de nascimento">

                <label for="emailUsuario">Email</label>
                <input type="text" class="form-control" value="{{$usuario->email}}" name="emailUsuario" id="emailUsuario" placeholder="Email">

                <label for="sexoUsuario">Sexo</label>
                <input type="text" class="form-control" value="{{$usuario->sexo}}" name="sexoUsuario" id="sexoUsuario" placeholder="Sexo">

                <label for="racaUsuario">Raça</label>
                <input type="text" class="form-control" value="{{$usuario->raca}}" name="racaUsuario" id="racaUsuario" placeholder="Raça">

                <label for="forma_ingresso_id">Forma de Ingresso</label>
                <select class="form-control" name="forma_ingresso_id" id="forma_ingresso_id">
                    @foreach ($formas_ingresso as $key => $value)
                        <option value="{{ $key }}" {{ ( $key == $selectedIDIngresso) ? 'selected' : '' }}> 
                            {{ $value }} 
                        </option>
                    @endforeach    
                </select>

                <label for="curso_idUsuario">Curso</label>
                <select class="form-control" name="curso_idUsuario" id="curso_idUsuario">
                    @foreach ($cursos as $key => $value)
                        <option value="{{ $key }}" {{ ( $key == $selectedIDCurso) ? 'selected' : '' }}> 
                            {{ $value }} 
                        </option>
                    @endforeach    
                </select>

                <label for="statusUsuario">Status</label>
                <input type="text" class="form-control" value="{{$usuario->status}}" name="statusUsuario" id="statusUsuario" placeholder="Status">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/usuarios" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection