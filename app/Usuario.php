<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primarykey = 'idusuarios';
    protected $fillable = [
        'nombre','edad','lugar'
    ];
}
