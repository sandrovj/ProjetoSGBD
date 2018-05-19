<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['ID_CATEG','NOME','TARIFA'];

    public $timestamps = false;

    protected $table = 'categoria';
}
