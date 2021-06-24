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

    header("Content-Type:application/json");

    $id = $_GET['id'];

    $query = "SELECT * FROM `usuarios` WHERE id='{$id}';";

	  $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - email: " . $row["email"];
      }
    } 

    $conn->close();

  ?>

    <div class="page-header">
      <h1>Usuario</h1>
  </div>

  </body>
</html>


