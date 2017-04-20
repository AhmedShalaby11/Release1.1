<?php





$servername = "localhost:3306";
$username = "root";
$password = "ahmedtato1";
$database = "Herafy";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}








 ?>
