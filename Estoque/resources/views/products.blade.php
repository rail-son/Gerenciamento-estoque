@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Estoque Completo</h1>
    <br>
    <h2>Busque pelo ID do produto: </h2>
    <form action="/products/id" method="GET" autocomplete="off">
        <input type="number" name="search" id="search" class="form-control" placeholder="Digite o ID...">
    </form>
</div>
<br>
<div id="produtos-container" class="col-md-12">
    <h3>PRODUTOS DO ESTOQUE</h3>
    <div id="cards-container" class="row">
        @foreach ($products as $prod)  
            <div class="col-md-3 card">
                <p><b>ID:</b> {{$prod -> cod_produto}}</p>
                <p><b>Produto:</b> {{$prod -> nome_produto}}</p>
                <p><b>Valor:</b> {{$prod -> valor_produto}}</p>
                <p><b>Estoque:</b> {{$prod -> estoque}}</p>
                <p><b>Cidade:</b> {{$prod -> cidade}}</p>  
            </div>
        @endforeach
    </div>
</div>
    
@endsection 