<?php
session_start();
include '../db_connection.php';

// Fetch the count of assigned courses for the logged-in teacher
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session
$query = "SELECT COUNT(*) AS course_count FROM course WHERE teacher_id = ?";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $teacher_id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$course_count = $row['course_count'];
$stmt = null;
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
                <center><h2 class="fw-bold text-primary" >View Your Summary</h2></center>

                <!-- Statistics Section -->
<div class="row mt-4 p-4">
    <div class="col-md-4 col-sm-12 mb-4">
        <div class="card stat-card">
        <div class="title">Assigned Courses</div>
            <div class="icon-number-row">
                <div class="stat-number"><?php echo htmlspecialchars($course_count); ?></div>
            </div>
            
        </div>
    </div>
    <div class="col-md-4 col-sm-12 mb-4">
        <div class="card stat-card">
        <div class="title">Total Students</div>
            <div class="icon-number-row">
                <div class="stat-number">12</div>
            </div>
           
        </div>
    </div>
    <div class="col-md-4 col-sm-12 mb-4">
        <div class="card stat-card">
        <div class="title">Total Students</div>
            <div class="icon-number-row">
                <div class="stat-number">12</div>
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
