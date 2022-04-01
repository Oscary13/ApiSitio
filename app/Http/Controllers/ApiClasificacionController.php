<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacion;

class ApiClasificacionController extends Controller
{
    public function index()
    {
        $datosClasificacion = Clasificacion::all();
        return response()->json($datosClasificacion);
    }

    public function guardarClasificacion(Request $request)
    {

        $datosClasificacion = new Clasificacion();

            $datosClasificacion->nombre = $request->nombre;
            $datosClasificacion->descripcion = $request->descripcion;
            $datosClasificacion->imagen = $request->imagen;
            $datosClasificacion->save();

    }
    public function verClasificacion($id){
        $datosClasificacion= new Clasificacion();
        $datosEncontrados=$datosClasificacion->find($id);
        return response()->json($datosEncontrados);

    }

    public function eliminarClasificacion($id){
        $datosClasificacion= Clasificacion::find($id);
        $datosClasificacion->delete();
        return response()->json("Registro Botrrado");
    }

    public function actualizarClasificacion(Request $request,$id){
        $datosClasificacion= Clasificacion::find($id);


        if ($request->input('nombre')) {
            $datosClasificacion->nombre=$request->input('nombre');
        }
        if ($request->input('descripcion')) {
            $datosClasificacion->descripcion=$request->input('descripcion');
        }
        if ($request->input('imagen')) {
            $datosClasificacion->imagen=$request->input('imagen');
        }
        $datosClasificacion->save();
        return response()->json("Datos Actualizados");
    }
}
