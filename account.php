<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    // Replace with your database connection code
    include "Database.php";

    // Get form data
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Perform database query to insert user data
    // Replace table_name with your database table name
    $sql = "INSERT INTO bet(username, phone, password) VALUES ('$username', '$phone', '$password')";

    if(mysqli_query($conn, $sql)) {
        // Redirect to login page after successful registration
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
