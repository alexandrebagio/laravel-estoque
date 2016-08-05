@extends('layout/principal')
@section('conteudo')

<form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>Nome:</label>
        <input name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Valor:</label>
        <input name="valor" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Quantidade:</label>
        <input name="quantidade" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Tamanho:</label>
        <input name="tamanho" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Descricao:</label>
        <textarea name="descricao" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <button class="btn btn-primary" type="submit">Adicionar</button>
</form>

@stop