<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable  = ['NUM_RESERVA','DT_INICIO','DT_FIM','CLIENTE_ID_CLIENTE'];

    public $timestamps = false;

    protected $table = 'reserva';
}
