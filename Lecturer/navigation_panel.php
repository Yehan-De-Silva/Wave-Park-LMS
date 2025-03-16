<?php

use Soap\Url;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Dummy data for student profile (Replace with database values)
$student_image = 'images/dummyProfilePic.png'; // Default profile picture

// Get the current page name
$current_page = basename($_SERVER['PHP_SELF'], ".php");


?>





<!-- Sidebar Navigation -->
<div class="sidebar-container">
    <div class="sidebar card shadow-lg rounded-4 bg-white p-3">
        
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center mb-3" href="overview.php">
            <img src="images\logo.png" alt="Logo" width="40" height="40" class="me-2">
            <span class="fw-bold text-primary fs-5 " >Lecturer Dashboard</span>
        </a>

        <!-- Student Profile -->
        <div class="text-center mb-4">
            <img src="<?php echo $student_image; ?>" alt="Profile Picture" class="rounded-circle shadow-sm" width="80" height="80">
            <h6 class="fw-bold mt-2"><?php echo $_SESSION['first_name'] ?></h6>
            <p class="text-muted small">ID: <?php echo $_SESSION['user_id'] ?></p>
        </div>

        <!-- Navigation Links -->
        <ul class="nav flex-column mt-3">
            <li class="nav-item">
                <a class="nav-link <?php echo $current_page == 'overview' ? 'active' : ''; ?>" href="overview">
                    <i class="bi bi-house-door me-2"></i> Overview
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo $current_page == 'courses' ? 'active' : ''; ?>" href="courses">
                    <i class="bi bi-book me-2"></i>Courses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo $current_page == 'assignments' ? 'active' : ''; ?>" href="assignments">
                    <i class="bi bi-pencil-square me-2"></i> Assignments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $current_page == 'results' ? 'active' : ''; ?> " href="results">
                    <i class="bi bi-clipboard-data me-2"></i> Results
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $current_page == 'notifications' ? 'active' : ''; ?>" href="notifications">
                    <i class="bi bi-bell me-2"></i> Notifications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $current_page == 'settings' ? 'active' : ''; ?>" href="settings">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Bootstrap Icons & Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
