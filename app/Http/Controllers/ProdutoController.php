<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('produtos.listagem')->with('produtos', $produtos);
    }
    
    public function mostra()
    {
        $id = Request::route('id');
        $produtos = Produto::find($id);
        return view('produtos.detalhes')->with('p', $produtos);
    }

    public function novo()
    {
        return view('produtos.formulario');
    }

    public function adiciona()
    {
        $produto = new Produto();
        $produto->nome = Request::input('nome');
        $produto->valor = Request::input('valor');
        $produto->quantidade = Request::input('quantidade');
        $produto->descricao = Request::input('descricao');
        $produto->save();
        //return view('produtos.adicionado')->with('nome', $nome);
        return redirect('/produtos')->withInput();
    }
}
