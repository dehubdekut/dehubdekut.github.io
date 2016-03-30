
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "test_db";
$dbport = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "Connected successfully!";
}

?>

