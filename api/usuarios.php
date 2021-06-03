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

$users[] = array();

$query = 'SELECT * FROM `usuario`;';
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    $response["status"] = "true";
    while($row = $result->fetch_assoc()) {
        array_push($users, json_encode($row));
    }
    } else {
    $response["status"] = "false";
    $response["message"] = "No customer(s) found!";
    }


$conn->close();
echo json_encode($users)

?>