<?php
$servername = "152.42.212.24";
$username = "racpedssej";
$password = "dWU3VNhjRF";
$dbname = "racpedssej";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
print_r("Hello");
exit;


?>
