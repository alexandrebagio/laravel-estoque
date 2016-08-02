<?php

Route::get('/', function () {
    return '<h1>Ola Mundo!</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
