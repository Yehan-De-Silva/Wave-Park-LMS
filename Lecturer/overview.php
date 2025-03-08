<?php
session_start();
include '../db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Overview</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-white shadow-sm vh-100 p-3">
            <?php include 'navigation_panel.php'; ?>
        </div>

        <!-- Main Content -->
        <div class="main-content p-4">
            <div class="content-box p-4 ">
                <h2 class="fw-bold text-primary" >Overview</h2>
                <!-- Statistics Section -->
                <div class="row mt-4 p-4">
                    <div class="col-md-5">
                        <div class="card stat-card justify-content-center align-items-center">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-book me-2"></i>Total Assigned Courses</h5>
                                <p class="stat-number">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card stat-card justify-content-center align-items-center">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-arms-up"></i>Total Students</h5>
                                <p class="stat-number">12</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
