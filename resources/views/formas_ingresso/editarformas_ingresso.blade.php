@extends('layouts.app', ["current" => "formas_ingresso/formas_ingresso"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('formas-ingresso.update', $forma_ingresso['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="formas_Ingresso">Forma de Ingresso</label>
                <input type="text" class="form-control" value="{{$forma_ingresso->forma_ingresso}}" name="formas_Ingresso" id="formas_Ingresso" placeholder="Forma de ingresso">

                <label for="data_implementacao">Data de Implementação</label>
                <input type="text" class="form-control" value="{{$forma_ingresso->data_implementacao}}" name="data_implementacao" id="data_implementacao" placeholder="Data de implementação">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/formas_ingresso" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection