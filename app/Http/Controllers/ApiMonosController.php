<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monos;

class ApiMonosController extends Controller
{
    public function index()
    {
        $datosMono = Monos::all();
        return response()->json($datosMono);
    }

    public function guardarMono(Request $request)
    {

        $datosMono = new Monos();

            $datosMono->nombre = $request->nombre;
            $datosMono->descripcion = $request->descripcion;
            $datosMono->imagen = $request->imagen;
            $datosMono->save();

    }
    public function verMono($id){
        $datosMono= new Monos();
        $datosEncontrados=$datosMono->find($id);
        return response()->json($datosEncontrados);

    }

    public function eliminarMono($id){
        $datosMono= Monos::find($id);
        $datosMono->delete();
        return response()->json("Registro Botrrado");
    }

    public function actualizarMono(Request $request,$id){
        $datosMono= Monos::find($id);


        if ($request->input('nombre')) {
            $datosMono->nombre=$request->input('nombre');
        }
        if ($request->input('descripcion')) {
            $datosMono->descripcion=$request->input('descripcion');
        }
        if ($request->input('imagen')) {
            $datosMono->imagen=$request->input('imagen');
        }
        $datosMono->save();
        return response()->json("Datos Actualizados");
    }

}
