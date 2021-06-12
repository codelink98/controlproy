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

	$query = 'SELECT * FROM `usuario` WHERE email="{$email}" AND password="{$pass}";';
    //$query = 'SELECT * FROM `usuario`;';
    echo $query;
	$result = $conn->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        $response["status"] = "true";
        while($row = $result->fetch_assoc()) {
          
        }
      } else {
        $response["status"] = "false";
	    $response["message"] = "No customer(s) found!";
      }

} else {
	$response["status"] = "false";
	$response["message"] = "No data reached";
}
$conn->close();
echo json_encode($response);

?>