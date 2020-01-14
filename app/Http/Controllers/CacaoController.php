<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Calculo;
class CacaoController extends Controller
{
    public function index(Request $request)
    {
        return Usuario::get();
    }
    public function calculos(Request $request){
        $usuario=$request->usuario;
        return Calculo::where('calculos.idusuario',$usuario)->get();
    }
}
