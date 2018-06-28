@extends('plantilla-final.plantillaGeneral')

    @section('contenido')

  <form class="login" method="post">
    <fieldset>

      <h2>eCommerce</h2>

           <input class="email" type="text" name="email" value="" placeholder="Correo electrónico">

           <br>
           <div class="separador1"></div>

           <input class="contraseña" type="password" name="pass" placeholder="Password">


           <div class="separador"></div>

           <input type="submit" class="boton">

             <div class="preguntas">
             <p>
             <input type="checkbox" name="recordarme"> Recordarme </p>

             <div class="separador"></div>

             <a href="#">¿Olvidó su contraseña?</a>

             <br><br>

             <a href="formulario.php">¿No tienes una cuenta? <b>Regístrate</b></a>
           </div>


         </fieldset>
       </form>

     @endsection
