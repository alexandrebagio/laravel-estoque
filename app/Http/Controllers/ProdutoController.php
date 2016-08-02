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
}
