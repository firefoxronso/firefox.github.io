<?php
// Database connection parameters
 $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "betting";
    
    // Create connection
    $conn = new mysqli("localhost", "root", "", "betting");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
