<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('produtos.listagem')->with('produtos', $produtos);
    }
    
    public function mostra()
    {
        $id = Request::route('id');
        $produtos = DB::select('select * from produtos where id = ?', [$id]);
        return view('produtos.detalhes')->with('p', $produtos[0]);
    }

    public function novo()
    {
        return view('produtos.formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');
        DB::insert(
            'insert into produtos (nome, valor, quantidade, descricao) values(?,?,?,?)',
            array($nome, $valor, $quantidade, $descricao)
        );
        //return view('produtos.adicionado')->with('nome', $nome);
        return redirect('/produtos')->withInput();
    }
}
