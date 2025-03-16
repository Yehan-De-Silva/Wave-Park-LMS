
<?php
$host = "sql12.freesqldatabase.com";
$dbname = "sql12766524"; // Example: freemysql_12345
$username = "sql12766524"; // Example: freemysql_user
$password = "pBK9xyl5Rd"; // Example: secure_password
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

