<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Calculo;
class CacaoController extends Controller
{
    public function index(Request $request){
        if ( $request->input('showdata') ) {
    	    return Usuario::orderBy('lugar', 'desc')->get();
            
    	}
        $columns = ['nombre', 'edad', 'lugar'];
        $length = $request->input('length');
        $column = $request->input('column'); 
        $search_input = $request->input('search');

        $query = Usuario::select('nombre', 'edad', 'lugar')->orderBy($columns[$column]);

        if ($search_input) {
            $query->where(function($query) use ($search_input) {
                $query->where('nombre', 'like', '%' . $search_input . '%')
                ->orWhere('edad', 'like', '%' . $search_input . '%')
                ->orWhere('lugar', 'like', '%' . $search_input . '%');
            });
        }

        $users = $query->paginate($length);
        return ['data' => $users];
    }
    public function calculos(Request $request){
        $usuario=$request->usuario;
        return Calculo::where('calculos.idusuario',$usuario)->get();
    }
}
