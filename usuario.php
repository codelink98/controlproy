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
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="dietas.php">Dietas</a></li>
            <li><a href="rutinas.php">Rutinas</a></li>
          </ul>
        </div>
    </nav>
  </header>

  <body>

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
      // $id = 3;

      $query = "SELECT * FROM `usuarios` where id='{$id}'";

      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        ?>
        <ul class="list-group">
        <?php
        while($row = $result->fetch_assoc()) {
          ?>
           <li class="list-group-item"><?php echo $row['nombre']?></li><br>
          <?php
        }

        ?>
        </ul>
        <?php

      } 

      $query2 = "SELECT * FROM `datos` where id_usuario='{$id}'";

      $result = $conn->query($query2);

      if ($result->num_rows > 0) {
        ?>
        <ul class="list-group">
        <?php
        $week = 1;
        while($row = $result->fetch_assoc()) {
          ?>
           <li class="list-group-item"><?php echo "Semana #" . $week?></li><br>
           <li class="list-group-item"><?php echo "Cintura: " . $row['cintura']?></li><br>
           <li class="list-group-item"><?php echo "Abdomen: " . $row['abdomen']?></li><br>
           <li class="list-group-item"><?php echo "Peso: " . $row['peso']?></li><br>
           <li class="list-group-item"><?php echo "Estatura: " . $row['estatura']?></li><br>
           <li class="list-group-item"><?php echo "Grasa: " . $row['grasa']?></li><br>
           <li class="list-group-item"><?php echo "Masa muscular: " . $row['masa_muscular']?></li><br>
          <?php
          $week = $week + 1;
        }

        ?>
        </ul>
        <?php

      } 

      $conn->close();

    ?>

  </body>
</html>


