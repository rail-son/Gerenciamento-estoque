<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class EstoqueController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function produtos(){
        $products = Products::all();
        $id = 'id';
        return view('products', ['products' => $products, 'id' => $id]);
    }

    public function create(){
        return view('/produto/criar-produto');
    }

    public function id_produtos($id){
        $search = request('search');
        $products = Products::all();
        if($search == NULL){
            $product = $products[$id - 1];
        }else{
            $product = $products[$search - 1];
        }
        return view('product-id', ['product' => $product]);
    }


    public function exclui_produto($id){

        return redirect('/products')->with('msg', 'Produto excluído com sucesso!');
    }

    public function editar_produto($id){
        return view('edita-produto');
    }

    public function exibe_cidades(){
        $cidade = DB::table('products')->distinct('cidade')->get('cidade');
        return view('exibe-cidades', ['cidade' => $cidade]);
    }

    public function store(Request $request){

        $products = new Products;

        $products->nome_produto = $request->nome_produto;
        $products->valor_produto = $request->valor_produto;
        $products->estoque = $request->estoque;
        $products->cidade = $request->cidade;

        $products->save();

        return redirect('/')->with('msg', 'Produto criado com sucesso!');
    }

    public function editaProoduto($id){
        $products = Products::all();
        

    }


}

