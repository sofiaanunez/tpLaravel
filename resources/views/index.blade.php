
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

    <!-- <section class="hero">
      <div class="opacidad" style=""> </div>
  		<div class="background-image" style=""><img src="..\PrimerRep\ecommerce-banner.jpg" alt=""> </div>
      <h1>eCommerce</h1>
      <br>
  		<h3>Todo lo que buscas ¡En un solo lugar!</h3>
      <form>
        <input type="buscador" placeholder="¡Encontrá lo que necesitas!">
        <a href="#" class="btn">Buscar</a>
      </form>
  	</section> -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>eCommerce</h1>
        <br>
    		<h3>Todo lo que buscas ¡En un solo lugar!</h3>
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Encontra lo que buscas..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <section class="opciones">

      <h3>¿Qué estás buscando?</h4> <br>

      <style>

          /* Remove the jumbotron's default bottom margin */
           .jumbotron {
            margin-bottom: 0;
          }


        </style>
      </head>
      <body>

      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>

          </div>
          <div class="col-sm-4">
            <div class="panel panel-danger">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-success">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
        </div>
      </div><br>

      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
        </div>

      </div><br><br>
      <div class="row">
        <div class="col"></div>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
        </li>
        </ul>
        </nav>
        <div class="col"></div>
      </div>

            @include('plantilla-final.footer')

  </body>
</html>
