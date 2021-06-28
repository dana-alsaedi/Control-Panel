<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robots_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM movement ORDER by id DESC LIMIT 1;
";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

 echo $row["movement_direction"];

  }
} else {
  echo "0 results";
}
$conn->close();


?>