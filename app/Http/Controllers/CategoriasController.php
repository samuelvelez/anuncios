<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Subcategorias;

class CategoriasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        //$name = $request->input('name', '');

        $categorias = Categorias::where('estado',1)->orderby('idcategorias', 'asc')->get();
        $subcategorias = Subcategorias::where('estado',1)->get();
        $data = array(
            
            "categorias" => $categorias,
            "subcategorias"=> $subcategorias
        );
        return view('index', compact('data'));
    }
}
