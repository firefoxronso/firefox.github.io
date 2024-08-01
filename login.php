<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    // Replace with your database connection code
    include "Database.php";

    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform database query to check user credentials
    // Replace table_name with your database table name
    $sql = "SELECT * FROM bet WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, set session variable
        $_SESSION["username"] = $username;
        header("Location: Table.html"); // Redirect to dashboard or access page
    } else {
         echo '<script>alert("Invalid username or password"); window.location.href = "login.html";</script>';
    }

    $conn->close();
}
?>
<?php
$conn=new mysqli("localhost", "root", "", "betting");
if($conn){
    echo "connection succefully";
}
    else{
        echo "connection failed";
    }
?>