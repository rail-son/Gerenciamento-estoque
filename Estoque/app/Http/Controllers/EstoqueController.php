<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class EstoqueController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function produtos(){
        $products = Products::all();
        return view('products', ['products' => $products]);
    }

    public function create(){
        return view('/produto/criar-produto');
    }

    public function id_produtos($id){
        return view('product-id', ['id' => $id]);
    }


    public function exclui_produto(){
        return view('exclui-produto');
    }

    public function editar_produto(){
        return view('edita-produto');
    }

    public function exibe_cidades(){
        return view('exibe-cidades');
    }

    public function store(Request $request){

        $products = new Products;

        $products->nome_produto = $request->nome_produto;
        $products->valor_produto = $request->valor_produto;
        $products->estoque = $request->estoque;
        $products->cidade = $request->cidade;

        $products->save();

        return redirect('/');
    }

}
