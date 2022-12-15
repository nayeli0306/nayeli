<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function  fnIndex () {
        return view('welcome');
    }

    public function  fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function  fnLista() {
        $xAlumnos = Estudiante::all();
        return view('pagLista', compact('xAlumnos'));
    }

    public function  fnGaleria  ($numero=0) {
        //return view('foto de Codigo');
        return view('pagGaleria',['valor' => $numero, 'otro' =>"24"]);
    }

    
}
