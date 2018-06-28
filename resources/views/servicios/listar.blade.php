@extends('plantilla-final.plantillaGeneral')

@section('contenido') <br>
<a href="/servicio/agregar">Agregar Servicio</a>


  <h2>Listado de servicios</h2>

  <ul>
  @foreach ($servicios as $servicio)
    <li>{{$servicio->descripcion}}</li>
  @endforeach
    </ul>

@endsection
