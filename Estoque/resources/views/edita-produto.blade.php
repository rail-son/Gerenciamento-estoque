@extends('layouts.main')

@section('title', 'Editar produto '. $products -> cod_produto)

@section('content')



<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1>Editando item {{$products -> cod_produto}}</h1>
    <form action="/products/{{$products -> cod_produto}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_produto">Produto: </label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do Produto" value="{{$products -> nome_produto}}">
        </div>
        <div class="form-group">
            <label for="valor_produto">Valor: </label>
            <input type="text" class="form-control" id="valor_produto" name="valor_produto" placeholder="Valor do Produto" value="{{$products -> valor_produto;}}">
        </div>
        <div class="form-group">
            
            <label for="estoque">Estoque: </label>
            <input type="number" class="form-control" id="estoque" name="estoque" placeholder="Estoque" value="{{$products -> estoque}}">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade: </label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade" value="{{$products -> cidade}}">
        </div>
        <input type="submit" class="btn btn-dark" value="Salvar Alterações">
    </form>
</div>
@endsection