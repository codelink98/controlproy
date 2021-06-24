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

if (isset($_GET['id_user']) && $_GET['id_user']!="") {

	$id = $_GET['id_user'];
	$cintura = $_GET['cintura'];
	$abdomen = $_GET['abdomen'];
	$peso = $_GET['peso'];
	$estatura = $_GET['estatura'];
	$grasa = $_GET['grasa'];
	$masa_muscular = $_GET['masa_muscular'];

	$query = "INSERT INTO `datos` (`id_usuario`, `cintura`, `abdomen`, `peso`, `estatura`, `grasa`, `masa_muscular`) VALUES ({$id}, {$cintura}, {$abdomen}, {$peso}, {$estatura}, ${grasa}, {$masa_muscular});";

	$result = $conn->query($query);
  header("Location: /../home.html");

  
}
$conn->close();
?>