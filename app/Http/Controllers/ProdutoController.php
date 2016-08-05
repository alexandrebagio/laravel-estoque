<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('produtos.listagem')->with('produtos', $produtos);
    }
    
    public function mostra($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.detalhes')->with('p', $produtos);
    }

    public function novo()
    {
        return view('produtos.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {
        Produto::create($request->all());
        return redirect('/produtos')->withInput();
    }

    public function remove($id)
    {
        $produtos = Produto::find($id);
        $produtos->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function altera($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.alterar')->with('p', $produtos);
    }

    public function atualiza($id)
    {
        Produto::where('id', $id)->update(Request::except('_token'));
        return redirect()->action('ProdutoController@lista');
    }
}
