@extends('layout/principal')

@section('conteudo')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
<form action="/produtos/atualiza/{{$p->id}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>Nome:</label>
        <input value="{{$p->nome}}" name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Valor:</label>
        <input value="{{$p->valor}}" name="valor" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Quantidade:</label>
        <input value="{{$p->quantidade}}" name="quantidade" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Tamanho:</label>
        <input value="{{$p->tamanho}}" name="tamanho" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Descricao:</label>
        <textarea name="descricao" cols="30" rows="10" class="form-control">{{$p->descricao}}</textarea>
    </div>
    
    <button class="btn btn-primary" type="submit">Salvar</button>
</form>
@stop