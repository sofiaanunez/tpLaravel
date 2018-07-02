@extends('plantilla-final.plantillaGeneral')

@section('contenido')

  {{-- @if(count($errors)>0)
    <div class="">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>

    @endforeach
  </ul>
    </div>
  @endif --}}

  <form class="" action="/servicio/agregar" method="post"><br>
    <div class="container">
      {{ csrf_field() }}
  <div class="row">
    <div class="col-md">
      <label for="">Rubro</label> <br><input type="text" name="rubro" value="{{old('rubro')}}">
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('rubro'))
          {{$errors->first('rubro')}}
        @endif
      </div>
    </div> <br>
    <div class="col-md">
        <label for="">Descripcion</label> <br><input type="text" name="descripcion" value="{{old('descripcion')}}">
    </div>
    <div class="col-md">
      <label for="">E-mail del usuario</label><br> <input type="text" name="email" value="{{old('email')}}">
    </div>
    <div class="col-md">
      <label for="">Fecha de inicio</label> <br><input type="date" name="finicio" value="{{old('finicio')}}">
    </div>
    <div class="col-md">
      <label for="">Fecha de finalizacion</label> <br> <input type="date" name="ffinal" value="{{old('ffinal')}}">
    </div>
    <div class="col-md">
      <label for="">Precio</label><br> <input type="number" name="precio" value="{{old('precio')}}">
    </div>
  </div><br>
      <button type="submit" name="button"> Agregar Servicio</button>
    </div> <br>

  </form>
@endsection
