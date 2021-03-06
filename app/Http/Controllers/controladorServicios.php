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

     public function editarServicios($id, Request $request){

       $servicios = Servicios::find($id);

      return view('servicios.editar')->with('servicios', $servicios);

      }


       public function actualizarServicios($id, Request $request){

         $servicios = Servicios::find($id);

         $servicios->rubro = $request->input('rubro');
         $servicios->descripcion = $request->input('descripcion');
         $servicios->id_usuario = $request->input('id_usuario');
         $servicios->monto = $request->input('monto');
         $servicios->fecha_inicio = $request->input('fecha_inicio');
         $servicios->fecha_fin = $request->input('fecha_fin');

         $servicios->save();

        return view('servicios.editar')->with('servicios', $servicios);

        }


    public function validarServicios(Request $request){

      $validacion = [

        'rubro' => 'required|alpha',
        'id_usuario' => 'required',
        'descripcion' => 'required',
        // 'email' => 'required|email',
        'monto' => 'required|integer',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',

      ];

      $mensajes = [
        'rubro.required' => 'Ingrese rubro',
        'rubro.alpha' => 'Ingrese un formato válido de rubro',
        'descripcion.required' => 'Ingrese descripción',
        // 'email.required' => 'Ingrese su correo electrónico',
        // 'email.email' => 'Ingrese un formato válido de correo electrónico',
        'fecha_inicio.required' => 'Ingrese fecha de inicio',
        'fecha_fin.required' => 'Ingrese fecha de finalización',
        'monto.required' => 'Ingrese un precio',
        'monto.integer' => 'Ingrese un formato de precio válido',
      ];

      $this->validate($request,$validacion,$mensajes);
       $servicio = Servicios::create(
         $request->except(['_token', 'button'])
       // $request->only('rubro', 'descripcion', 'id_usuario', 'fecha_inicio', 'fecha_fin', 'monto')
    );

    echo "Se agregó tu servicio";
    }
}
