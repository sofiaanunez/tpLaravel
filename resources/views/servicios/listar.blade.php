@extends('plantilla-final.plantillaGeneral')

@section('contenido') <br>
<a href="/servicio/agregar">Agregar Servicio</a>


  <h2>Listado de servicios</h2>

  <ul>
  @foreach ($servicios as $servicio)
    <li><a href="/servicio/editar/{{$servicio->id}}">{{$servicio->rubro}}</a></li>
  @endforeach
    </ul>

@endsection
