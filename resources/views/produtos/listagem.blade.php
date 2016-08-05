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
        <td>{{$p->tamanho}}</td>
        <td>
            <a href="/produtos/mostra/{{$p->id}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="/produtos/altera/{{$p->id}}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="/produtos/remove/{{$p->id}}">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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

@if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
    </div>
@endif
@stop
