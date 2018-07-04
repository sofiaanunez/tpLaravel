@extends('plantilla-final.plantillaGeneral')

@section('contenido')
  <form class="" action="/servicio/editar" method="post"><br>
    <div class="container">
      {{ csrf_field() }}
  <div class="row">
    <div class="col-md">
      <label for="">Rubro</label> <br><input type="text" name="rubro" value="{{$servicios['rubro']}}">
    </div>
  </div> <br>
  <div class="col-md">
      <label for="">Descripcion</label> <br><input type="text" name="descripcion" value="{{$servicios['descripcion']}}">
    </div>
</div>
<div class="col-md">
  <label for="">ID del usuario</label><br> <input type="text" name="id_usuario" value="{{$servicios['id_usuario']}}">
</div>
<div class="col-md">
  <label for="">Precio</label><br> <input type="number" name="monto" value="{{$servicios['monto']}}">
</div><br>
    <button type="submit" name="button"> Editar Servicio</button>
  </div> <br>
</form>
@endsection
