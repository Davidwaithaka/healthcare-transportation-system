<?php
$servername = "localhost";
$username = "root";
$password = "Routesoft-Admin";
$dbname = "healthcare_transport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
