@extends('layouts.main')

@section('title', 'Criar Produto')

@section('content')



<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um produto</h1>
    <form action="/products" method="POST" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="nome_produto">Produto: </label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do Produto">
        </div>
        <div class="form-group">
            <label for="valor_produto">Valor: </label>
            <input type="text" class="form-control" id="valor_produto" name="valor_produto" placeholder="Valor do Produto">
        </div>
        <div class="form-group">
            <label for="estoque">Estoque: </label>
            <input type="number" class="form-control" id="estoque" name="estoque" placeholder="Estoque">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade: </label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade">
        </div>
        <input type="submit" class="btn btn-dark" value="Criar produto">
    </form>
</div>
@endsection