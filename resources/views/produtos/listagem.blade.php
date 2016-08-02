@extends('layout/principal')

@section('conteudo')
<h1>Listagem de produtos com Laravel</h1>
@if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
@else
<table class="table">
    @foreach ($produtos as $p)
    <tr class="{{$p->quantidade < 2 ? 'danger': ''}}">
        <td>{{$p->nome}}</td>
        <td>{{$p->descricao}}</td>
        <td>{{$p->valor}}</td>
        <td>{{$p->quantidade}}</td>
        <td>
            <a href="/produtos/mostra/{{$p->id}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endif
<h4>
    <span class="label label-danger pull-right">
        Um ou menos itens no estoque
    </span>
</h4>
@stop
