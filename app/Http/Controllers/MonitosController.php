<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monos;
use App\Models\Clasificacion;
class MonitosController extends Controller
{

    public function monos()
    {
        $monos = Monos::all();
        return view('news', ['monos' => $monos]);

    }

    public function clasificacion()
    {
        $monos = Clasificacion::all();
        return view('news2', ['monos' => $monos]);

    }

    public function monosinicio()
    {
        $monos = Monos::all();
        return view('templete.inicio', ['monos' => $monos]);

    }
}
