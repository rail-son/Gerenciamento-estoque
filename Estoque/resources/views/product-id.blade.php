@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Estoque Completo</h1>
    <br>
    <h2>Busque pelo ID do produto: </h2>
    <form  action="/products/id" method="GET" autocomplete="off">
        <input type="text" name="search" id="search" class="form-control" placeholder="Digite o ID...">
    </form>
</div>
<br>
<div id="produtos-container" class="col-md-12">
    <h3>PRODUTOS DO ESTOQUE</h3>
    <div id="cards-container" class="row">
            <div class="col-md-3 card">
                <p><b>ID:</b> {{$product -> cod_produto}}</p>
                <p><b>Produto:</b> {{$product -> nome_produto}}</p>
                <p><b>Valor:</b> {{$product -> valor_produto}}</p>
                <p><b>Estoque:</b> {{$product -> estoque}}</p>
                <p><b>Cidade:</b> {{$product -> cidade}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="/products/{{$product -> cod_produto}}/edit"><button id="btnEdita" type="button" class="btn btn-info">Editar</button></a>
        </div>
        <div class="col-md-6">
            <a href="/products/{{$product -> cod_produto}}/delete"><button id="btnExclui" type="button" class="btn btn-danger">Excluir</button></a>
        </div>
    </div>
</div>


@endsection