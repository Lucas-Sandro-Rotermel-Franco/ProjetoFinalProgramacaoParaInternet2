@extends('layouts.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de usuários</h5>
                    <p class="card=text">
                        Aqui você cadastra usuários
                        Só não se esqueça de cadastrar previamente os cursos e as formas de ingresso
                    </p>
                    <a href="/usuarios/create" class="btn btn-primary">Cadastre usuários</a>
                </div>
            </div>

            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de cursos</h5>
                    <p class="card=text">
                        Cadastre os cursos para os usuários
                    </p>
                    <a href="/cursos/create" class="btn btn-primary">Cadastre cursos</a>
                </div>
            </div>

            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de formas de ingresso</h5>
                    <p class="card=text">
                        Cadastre as formas de ingresso para seus usuários
                    </p>
                    <a href="/forma_ingresso/create" class="btn btn-primary">Cadastre formas de ingresso</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection