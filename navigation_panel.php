<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database connection
include 'db_connection.php';

// Fetch student details from database (if logged in)
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT user_id, first_name, last_name FROM user WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Assign values to session variables
    $student_id = $user['user_id'] ?? 'STU12345'; // Use user_id instead of stu_id
    $student_name = ($user['first_name'] ?? 'John') . ' ' . ($user['last_name'] ?? 'Doe');
} else {
    // Default values if user is not logged in
    $student_id = 'STU12345';
    $student_name = 'Guest User';
}
?>

<!-- Sidebar Navigation -->
<div class="sidebar-container">
    <div class="sidebar card shadow-lg rounded-4 bg-white p-3">
        
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center mb-3" href="overview.php">
            <img src="images/logo.png" alt="Logo" width="40" height="40" class="me-2">
            <span class="fw-bold text-primary fs-5">Student Dashboard</span>
        </a>

        <!-- Student Profile -->
        <div class="text-center mb-4">
            <img src="images/default_profile.png" alt="Profile Picture" class="rounded-circle shadow-sm" width="80" height="80">
            <h6 class="fw-bold mt-2"><?= htmlspecialchars($student_name); ?></h6>
            <p class="text-muted small">ID: <?= htmlspecialchars($student_id); ?></p>
        </div>

        <!-- Navigation Links -->
        <ul class="nav flex-column mt-3">
            <li class="nav-item"><a class="nav-link" href="overview.php"><i class="bi bi-house-door me-2"></i> Overview</a></li>
            <li class="nav-item"><a class="nav-link" href="courses.php"><i class="bi bi-book me-2"></i> Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="assignments.php"><i class="bi bi-pencil-square me-2"></i> Assignments</a></li>
            <li class="nav-item"><a class="nav-link" href="results.php"><i class="bi bi-clipboard-data me-2"></i> Results</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications.php"><i class="bi bi-bell me-2"></i> Notifications</a></li>
            <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart me-2"></i> Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="settings.php"><i class="bi bi-gear me-2"></i> Settings</a></li>
        </ul>
    </div>
</div>

<!-- Bootstrap Icons & Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
