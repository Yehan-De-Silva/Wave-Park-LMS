<?php
// Include your database connection and functions

session_start();

// Handle Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Function to check user login
function loginUser($email, $password) {
    // Check credentials (replace this with actual database query)
    if ($email === "user@example.com" && $password === "password") {
        return true;
    }
    return false;
}

    if (loginUser($email, $password)) {
        echo "<script>alert('Incorrect Username or Password...Try Again...');</script>";
    } else {
        echo "<script>alert('Incorrect Username or Password...Try Again...');</script>";
    }
}



// Handle Registration
if (isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Function to register user
function registerUser($full_name, $email, $password) {
    // Register user (replace this with actual database logic)
    return true;
}
    if (registerUser($full_name, $email, $password)) {
        echo "<script>alert('Incorrect Username or Password...Try Again...');</script>";
    } else {
        echo "<script>alert('Incorrect Username or Password...Try Again...');</script>";
    }
}
?>