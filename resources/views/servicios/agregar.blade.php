@extends('plantilla-final.plantillaGeneral')



@section('contenido')
  <form class="" action="index.html" method="post"><br>
    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <label for="">Rubro</label> <br><input type="text" name="" value="">
    </div> <br>
    <div class="col-md-4">
      <label for="">E-mail del usuario</label><br> <input type="email" name="" value="">
    </div>
    <div class="col-">
      <label for="">Fecha de finalizacion</label> <br> <input type="date" name="" value="">
    </div>
    <div class="col-">
      <label for="">Precio</label><br> <input type="text" name="" value="">
    </div>
    <div class="col-">
      <label for="">Fecha de inicio</label> <br><input type="date" name="" value="">
    </div>
    <div class="col-md-">
        <label for="">Descripcion</label> <br><input type="text" name="" value="">
    </div>
  </div>
      <button type="submit" name="button"> Agregar Servicio</button>
    </div>




  </form>
@endsection
