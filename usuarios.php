<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>NutriFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
  </head>

  <header class="header">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
    
          <a class="navbar-brand" href="#">NutriFit</a>

        </div>
          <ul >
            <li><a href="home.html">Home <span class="sr-only">(current)</span></a></li>
            <li class="active" ><a href="#">Usuarios</a></li>
            <li><a href="dietas.php">Dietas</a></li>
            <li><a href="rutinas.php">Rutinas</a></li>
          </ul>
        </div>
    </nav>
  </header>

  <body>

    <div class="cuerpo">
      <h1>Usuarios</h1>
    

      <?php

        $dbhost = "localhost";
        $dbuser = "codelink";
        $dbpass = "Martinn1.";
        $db = "nutrifit";

        // Create connection
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 

        $id = $_GET['id'];

        $query = "SELECT * FROM `usuarios` WHERE tipo='User';";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          ?>
          <ul class="list-group">
          <?php
          while($row = $result->fetch_assoc()) {
            ?>
            <a href="<?php echo "usuario.php?id={$row['id']}"?>"><li class="list-group-item"> <?php echo $row['nombre']?></li></a><br>
            <?php
          }

          ?>
          </ul>
          <?php

        } 

        $conn->close();
      ?>
      </div>
      <div class=formulario> 
        <form action="/api/add_datos.php">
          <label for="id">ID del usuario</label>
          <input type="number"  id="id_user" name="id_user">
       
          <label for="cintura">Cintura</label>
          <input type="text"  id="cintura" name="cintura">
       
  
          <label for="abdomen">Abdomen</label>
          <input type="text" id="abdomen" name="abdomen">
       
          <label for="peso">Peso</label>
          <input type="text"  id="peso" name="peso">
     
          <label for="estatura">Estatura</label>
          <input type="text"  id="estatura" name="estatura">
    
          <label for="grasa">Grasa</label>
          <input type="text"  id="grasa" name="grasa">
    
          <label for="masa_muscular">Masa muscular</label>
          <input type="text"  id="masa_muscular" name="masa_muscular">
   
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

  </body>
</html>


