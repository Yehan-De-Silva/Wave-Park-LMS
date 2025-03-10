<?php
include 'db_connection.php';  // Include your connection file

try {
    $stmt = $conn->query("SHOW TABLES");  // Run a test query
    echo "✅ Database is connected. Tables in database:";
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<br>➡ " . implode(", ", $row);
    }
} catch (PDOException $e) {
    echo "❌ Query failed: " . $e->getMessage();
}
?>
