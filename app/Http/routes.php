<?php

Route::get('/', function () {
    return '<h1>Ola Mundo!</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/altera/{id}', 'ProdutoController@altera');
Route::post('/produtos/atualiza/{id}', 'ProdutoController@atualiza');
