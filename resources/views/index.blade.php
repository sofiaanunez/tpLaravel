<!DOCTYPE html>
<html>
  <head>
    <title>eCommerce</title>
      <meta charset="utf-8">

         <link rel="stylesheet" href="/css/estilo.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
         <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

       </head>
         <title></title>
       <body>

         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @include('plantillaIndex.headerIndex')

    <section class="hero">
      <div class="opacidad" style=""> </div>
  		<div class="background-image" style=""> </div>
      <h1>eCommerce</h1>
      <br>
  		<h3>Todo lo que buscas ¡En un solo lugar!</h3>
      <form>
        <input type="buscador" placeholder="¡Encontrá lo que necesitas!">
        <a href="#" class="btn">Buscar</a>
      </form>
  	</section>


    <section class="opciones">

      <h3>¿Qué estás buscando?</h4> <br>
      <hr><br>
      <div class="contenedor">
      <ul class="iconos">
        <li> <a href="#"><i class="fas fa-suitcase fa-3x"></i></li></a>
        <li> <a href="#"> <i class="fas fa-building fa-3x"></i></li></a>
        <li> <a href="#"> <i class="fas fa-birthday-cake fa-3x"></i></li></a>
        <li> <a href="#"><i class="fas fa-keyboard fa-3x"></i></li></a>
        <li> <a href="#"><i class="fas fa-car fa-3x"></i></li></a>
      </ul>
      <br>
      <ul class="rubros">
        <li> Servicios Profesionales </li>
        <li> Construcción y afines</li>
        <li> Fiestas y Animaciones</li>
        <li> Computación</li>
        <li> Rodados</li>
      </ul>
      </div>
      <br>
    </section>


    <div class="divisor"></div>


  <section class="opc-sec">
      <h3>¡Ofertas del día!</h3>

      <br><hr><br>
      <section class="flex">

      <div class="detalle">
        <article class="cont-sec">
          <a href="#"><img src="Images/Generales/oferta-obra.jpg" alt="10" width="200"></a>
        </article>

          <h4>Descuento en obras </h4>
            <br>
      </div>


      <div class="detalle">
        <article class="cont-sec">
          <a href="#"><img  src="Images/Generales/fiestas.jpg" alt="10" width="200"></a>
        </article>
          <h4>¡Ahorra en tus festejos!</h4>
            <br>
      </div>


      <div class="detalle">
        <article class="cont-sec">
          <a href="#"><img  src="Images/Generales/pc.jpg" alt="10" width="200"></a>
        </article>
          <h4>Arregla tu compu ¡YA!</h4>
            <br>
      </div>
      </section>
  </section>


    <div class="divisor"></div>


    <section class="opc-sec">
        <h3>¡Ofertas del día!</h3>
        <br><hr><br>
        <section class="flex">
        <div class="detalle">
          <article class="cont-sec">
            <a href="#"><img src="Images/Generales/oferta-obra.jpg" alt="10" width="200"></a>
          </article>
            <h4>Descuento en obras </h4>
              <br>
        </div>

        <div class="detalle">
          <article class="cont-sec">
            <a href="#"><img  src="Images/Generales/fiestas.jpg" alt="10" width="200"></a>
          </article>
            <h4>¡Ahorra en tus festejos!</h4>
              <br>
        </div>

        <div class="detalle">
          <article class="cont-sec">
            <a href="#"><img  src="Images/Generales/pc.jpg" alt="10" width="200"></a>
          </article>
            <h4>Arregla tu compu ¡YA!</h4>
              <br>
        </div>
      </section>
    </section>


      <div class="divisor"></div>


      <section class="opc-sec">
          <h3>¡Ofertas del día!</h3>
          <br><hr><br>
          <section class="flex">
          <div class="detalle">
            <article class="cont-sec">
              <a href="#"><img src="Images/Generales/oferta-obra.jpg" alt="10" width="200"></a>
            </article>

              <h4>Descuento en obras </h4>
                <br>
          </div>
          <div class="detalle">
            <article class="cont-sec">
              <a href="#"><img  src="Images/Generales/fiestas.jpg" alt="10" width="200"></a>
            </article>
              <h4>¡Ahorra en tus festejos!</h4>
                <br>
          </div>
          <div class="detalle">
            <article class="cont-sec">
              <a href="#"><img  src="Images/Generales/pc.jpg" alt="10" width="200"></a>
            </article>
              <h4>Arregla tu compu ¡YA!</h4>
                <br>
          </div>
        </section>
      </section>

        <div class="divisor"></div>

        @include('plantillaIndex.footerIndex')

  </body>
</html>
