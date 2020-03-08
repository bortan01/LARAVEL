<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frutaController extends Controller {

    //
    public function index() {
        ///para seleccionar la tabla 
        $frutas = DB::table('frutas')
                ->orderBy('id', 'desc ')
                ->get();
        return view('fruta.index')->with('frutas', $frutas);
    }

    public function detalle($id) {

        $frutas = DB::table('frutas')->where('id', '=', $id)->first();
        return view('fruta.detalle')->with('fruta', $frutas);
    }
    
    public function crear() {
        return view('fruta.crear');
    }
    public function save(Request $request) {
        $furta = DB::table('frutas')->insert(array(
           'nombre' => $request->input('nombre'),
           'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));
        
        return redirect()->action('frutaController@index')->with('status','Fruta creada correctamente');  
    }
    public function delete($id) {
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->action('frutaController@index')->with('status','Fruta borrada correctamente');
    }
    
     public function edit($id) {
        $fruta = DB::table('frutas')->where('id',$id)->first();
       
        
        return view('fruta.crear')->with('fruta', $fruta);
    }
    public function update(Request $request) {
        $id = $request->input('id');
        
        $fruta = DB::table('frutas')
                ->where ('id',$id)
                ->update (array(
                   'nombre' =>  $request->input('nombre'),
                    'precio' =>  $request->input('precio'),
                    'descripcion' =>  $request->input('descripcion')
                ));
        return redirect()->action('frutaController@index')->with('status','Fruta actualizada correctamente');
    }

}
 