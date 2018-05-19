<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    protected $fillable = ['ID_TAXA','NOME','DESCRICAO'];

    public $timestamps = false;

    protected $table = 'taxas';
}
