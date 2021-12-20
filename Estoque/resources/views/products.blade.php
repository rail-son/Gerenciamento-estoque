@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Estoque Completo </h1>
    <br>
    <h1>Busque pelo ID do produto: </h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Digite o ID...">
    </form>
</div>
<br>
<div id="produtos-container" class="col-md-12">
    <h2>PRODUTOS DO ESTOQUE</h2>
    <div id="cards-container" class="row">
        
            
        @for ($j = 0; $j < count($products); $j++)
            @for ($i = 0; $i < 3; $i++)
            <div class="col-md-3 card">
                <p>ID: {{$products[$j] -> cod_produto}}</p>
                <p>Produto:<br> {{$products[$j] -> nome_produto}}</p>
                <p>Valor: {{$products[$j] -> valor_produto}}</p>
                <p>Estoque: {{$products[$j] -> estoque}}</p>
                <p>Cidade:<br> {{$products[$j] -> cidade}}</p>
                @php
                $j = $j + 1;   
                @endphp
            </div>
            @endfor
            <div class="row"></div>
        @endfor
    
    </div>
</div>
    
@endsection 