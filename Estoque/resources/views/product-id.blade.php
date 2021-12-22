@extends('layouts.main')

@section('title', 'Produtos')

@section('content')



<div id="search-container" class="col-md-12">
    <h1>Estoque Completo</h1>
    <br>
    <h2>Busque pelo ID do produto: </h2>
    <form  action="/products/{{$products -> cod_produto}}" method="GET" autocomplete="off">
        <input type="text" name="search" id="search" class="form-control" placeholder="Digite o ID...">
    </form>
</div>
<br>
<div id="produtos-container" class="col-md-12">
    <h3>PRODUTOS DO ESTOQUE</h3>
    <div id="cards-container" class="row">
            <div class="col-md-3 card">
                <p><b>ID:</b> {{$products -> cod_produto}}</p>
                <p><b>Produto:</b> {{$products -> nome_produto}}</p>
                @php
                    $valor = $products -> valor_produto;
                    $valor = str_replace(".",",", $valor);
                @endphp
                <p><b>Valor:</b> R${{$valor }}</p>
                <p><b>Estoque:</b> {{$products -> estoque}}</p>
                <p><b>Cidade:</b> {{$products -> cidade}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="/products/edit/{{$products -> cod_produto}}"><button type="submit" id="btnEdita" type="button" class="btn btn-info">Editar</button></a>
        </div>
        <div class="col-md-6">
            <form action="/products/{{$products -> cod_produto}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" id="btnExclui" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>


@endsection