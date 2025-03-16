<?php
$host = "sql12.freesqldatabase.com";
$dbname = "sql12767547"; // Example: freemysql_12345
$username = "sql12767547"; // Example: freemysql_user
$password = "x9iC3jdEh8"; // Example: secure_password
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>