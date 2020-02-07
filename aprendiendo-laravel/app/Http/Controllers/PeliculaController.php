<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
class PeliculaController extends Controller
{
    public function index($pagina =1) {
        $titulo = 'listado de mis peliculas ';
        return view('peliculas.index')
                ->with('titulo',$titulo)
                ->with('pagina',$pagina);
        
    }
    
    public function detalle() {
        return view('peliculas.detalle') ;
    }
    
    public function formulario(){
        return view('pelicula.formulario');
    }
    
    public function recibir(Request $request) {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
    }
}
