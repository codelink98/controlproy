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

	$query = "SELECT * FROM `usuario` WHERE email='{$email}' AND password='{$pass}';";

	$result = $conn->query($query);

    if ($result->num_rows > 0) {

        // output data of each row
        $response["status"] = "true";
        echo "<script> window.location = 'home.html'; </script>";
        exit;

      } else {

        $response["status"] = "false";
	      $response["message"] = "No customer(s) found!";
        echo "<script> window.location = 'index.html'; </script>";
        exit;
      }

} else {
	$response["status"] = "false";
	$response["message"] = "No data reached";
  echo "<script> window.location = 'index.html'; </script>";
  exit;
}
$conn->close();
echo json_encode($response);

?>