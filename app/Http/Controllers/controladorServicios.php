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

    public function validarServicios(Request $request){

      $validacion = [
        'rubro' => 'required|alpha',
        'descripcion' => 'required',
        'email' => 'required|email',
        'finicio' => 'required',
        'ffinal' => 'required',
        'precio' => 'required|integer',
      ];

      $mensajes = [
        'rubro.required' => 'Ingrese rubro',
        'rubro.alpha' => 'Ingrese un formato válido de rubro',
        'descripcion.required' => 'Ingrese descripción',
        'email.required' => 'Ingrese su correo electrónico',
        'email.email' => 'Ingrese un formato válido de correo electrónico',
        'finicio.required' => 'Ingrese fecha de inicio',
        'ffinal.required' => 'Ingrese fecha de finalización',
        'precio.required' => 'Ingrese un precio',
        'precio.integer' => 'Ingrese un formato de precio válido',
      ];

      $this->validate($request,$validacion,$mensajes);

       $servicio = Servicio::create(
       $request->except(['_token'])
    );

    echo "Se agregó tu servicio";
    }
}
