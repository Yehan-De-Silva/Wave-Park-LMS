<?php
// Database connection credentials (Update these with your FreeMySQL.com details)
$host = "sql12.freesqldatabase.com";
$dbname = "sql12764311"; // Example: freemysql_12345
$username = "sql12764311"; // Example: freemysql_user
$password = "RKlnyKyttq"; // Example: secure_password

try {
    // Create a PDO instance for MySQL connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set error mode to exceptions for debugging
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Uncomment to confirm successful connection (For testing only)
    // echo "Connected successfully";
} catch (PDOException $e) {
    // Display error message if connection fails
    die("Connection failed: " . $e->getMessage());
}
?>  