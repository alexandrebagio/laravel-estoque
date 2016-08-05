@extends('layout/principal')

@section('conteudo')
<h1>Detalhes do produto {{ $p->nome }}</h1>

<ul>
    <li>Valor: {{ $p->valor }} </li>
    <li>Descrição: {{ $p->descricao or 'Não tem descrição'}} </li>
    <li>Quantidade: {{ $p->quantidade }} </li>
    <li>Tamanho: {{ $p->tamanho }} </li>
</ul>
@stop