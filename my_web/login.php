<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "my_web");
if ($conn === false) {
    die("Connection error: ". mysqli_connect_error());
}

// Login functionality
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password =$_POST['password'];

    // Escape input values to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
   $password = mysqli_real_escape_string($conn, $password);
 
    // Query database
    $query = mysqli_query($conn, "SELECT username, password FROM registrant_info WHERE username = '$username' AND password = '$password'");

    // Check if query returned a row
    if (mysqli_num_rows($query) >= 1) {
        // Login successful, start session redirect to courses.html
        session_start();
        $_SESSION['logged_in']=true;
        header('Location: courses_management.php');
        exit();
    } else {
        echo "Wrong username or Password.Try again!!";
    }
}
?>