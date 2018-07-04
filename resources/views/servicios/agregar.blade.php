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
        <div class="alert alert-danger" role="alert">
          @if ($errors->has('descripcion'))
            {{$errors->first('descripcion')}}
          @endif
        </div>
    </div>
    <div class="col-md">
      <label for="">ID del usuario</label><br> <input type="text" name="id_usuario" value="{{old('id_usuario')}}">
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('id_usuario'))
          {{$errors->first('id_usuario')}}
        @endif
      </div>
    </div>
    <div class="col-md">
      <label for="">Fecha de inicio</label> <br><input type="date" name="fecha_inicio" value="{{old('finicio')}}">
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('fecha_inicio'))
          {{$errors->first('fecha_inicio')}}
        @endif
      </div>
    </div>
    <div class="col-md-">
      <label for="">Fecha de finalizacion</label> <br> <input type="date" name="fecha_fin" value="{{old('ffinal')}}">
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('fecha_fin'))
          {{$errors->first('fecha_fin')}}
        @endif
      </div>
    </div>
    <div class="col-md">
      <label for="">Precio</label><br> <input type="number" name="monto" value="{{old('monto')}}">
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('monto'))
          {{$errors->first('monto')}}
        @endif
      </div>
    </div>
  </div><br>
      <button type="submit" name="button"> Agregar Servicio</button>
    </div> <br>

  </form>
@endsection
