<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frutaController extends Controller 
{
    //
    public function index() {
        ///para seleccionar la tabla 
        $frutas = DB::table('frutas')->get();
        return view('fruta.index')->with('frutas',$frutas);
    }
}
