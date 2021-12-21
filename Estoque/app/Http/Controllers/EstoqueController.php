<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;


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
            for($i = 0; $i<count($products); $i++){
                if($id == $products[$i]->cod_produto){
                    return view('product-id', ['products' => $products[$i]]);
                }
            }
            return redirect('/products')->with('msg', 'O produto não foi encontrado.');
        }else{
            for($i = 0; $i<count($products); $i++){
                if($search == $products[$i]->cod_produto){
                    return view('product-id', ['products' => $products[$i]]);
                }
            }
            return redirect('/products')->with('msg', 'O produto não foi encontrado.');
        }
        
    }


    public function destroy($id){
        
        Products::where('cod_produto', $id)->delete();

        return redirect('/')->with('msg', 'O produto foi deletado com sucesso.');;

        
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

