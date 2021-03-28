<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategorias;
use App\Models\Categorias;
use App\Models\Clasificado;

class ClasificadoController extends Controller
{
    //
    public function index(Request $request)
    {
        //$name = $request->input('name', '');
        $clasificados = Clasificado::where('categoriaId', $request->id)->paginate(20);
        $categoria = Categorias::where('idcategorias',$request->id)->first();
        $data = array(
            "categoria"     => $categoria,
            "clasificados"  => $clasificados,
            
        );
        return view('clasificado', compact('data'));
        /*
        $categorias = Categorias::where('estado',1)->orderby('idcategorias', 'asc')->get();
        $subcategorias = Subcategorias::where('estado',1)->get();
        $data = array(
            
            "categorias" => $categorias,
            "subcategorias"=> $subcategorias
        );
        return view('index', compact('data'));
        */
    }
}
