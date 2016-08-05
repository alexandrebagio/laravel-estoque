<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = array('nome','valor','quantidade','descricao','tamanho');
    public $timestamps = false;
}
