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

if (isset($_GET['email']) && $_GET['email']!="") {

	$email = $_GET['email'];
	$pass = $_GET['password'];

	$query = "SELECT * FROM `usuarios` WHERE email='{$email}' AND password='{$pass}';";

	$result = $conn->query($query);

    if ($result->num_rows > 0) {

        header("Location: /../home.html");
        exit;

      } else {

        header("Location: /../index.html");
        exit;

      }

} else {
  header("Location: /../index.html");
  exit;
}
$conn->close();
?>