<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicios;

class controladorServicios extends Controller
{
    public function listarServicios(){

    $servicio = Servicios::all();

      return view('servicios.listar')->with('servicios', $servicio);
    }

    public function agregarServicios(){
      return view('servicios.agregar');

      $servicio = Servicios::all();
      
    }
}
