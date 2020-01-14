<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    protected $table = 'calculos';
    protected $primarykey = 'idcalculo';
    protected $fillable = [
        'calculoscol','idusuario'
    ];
}
