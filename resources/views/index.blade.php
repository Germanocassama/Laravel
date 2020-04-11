@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card=text">
                        Insere os produtos.
                        OBS: Deve criar primeiro ainda as categorias
                    </p>
                    <a href="/produtos" class="btn btn-primary">Criar Produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Criar Categorias</h5>
                    <p class="card=text">
                        Inserir Categorias
                    </p>
                    <a href="/categorias" class="btn btn-primary">Inserir categorias</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection