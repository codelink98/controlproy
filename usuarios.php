<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>NutriFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
  </head>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="#">NutriFit</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
        <ul class="nav navbar-nav">
          <li><a href="home.html">Home <span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="#">Usuarios</a></li>
          <li><a href="dietas.php">Dietas</a></li>
          <li><a href="rutinas.php">Rutinas</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    <!-- </div>/.container-fluid -->
  </nav>

  <body>

    <div class="page-header">
      <h1>Usuarios</h1>
    </div>

    <ul class="list-group">
      <?php
        $homepage = file_get_contents('http://143.198.98.137/api/usuarios.php');
        echo $homepage;
      ?>
    </ul>

  </body>
</html>
