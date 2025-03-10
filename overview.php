<?php
session_start();
include 'db_connection.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user data
$stmt = $conn->prepare("SELECT first_name, last_name FROM user WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch statistics
$totalCourses = $conn->query("SELECT COUNT(*) FROM course")->fetchColumn();
$completedAssignments = $conn->query("SELECT COUNT(*) FROM assignments WHERE status = 'completed' AND user_id = $user_id")->fetchColumn();
$avgGrade = $conn->query("SELECT AVG(result) FROM results WHERE user_id = $user_id")->fetchColumn();

// Fetch recent activities
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <div class="content-box p-4">
                <h2 class="fw-bold text-primary">Welcome, <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?>!</h2>

                <!-- Statistics Section -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-book me-2"></i>Total Courses</h5>
                                <p class="stat-number"><?= $totalCourses; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-pencil-square me-2"></i>Assignments Completed</h5>
                                <p class="stat-number"><?= $completedAssignments; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-star me-2"></i>Average Grade</h5>
                                <p class="stat-number"><?= number_format($avgGrade, 2); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="mt-5">
                    <h4 class="text-primary fw-bold">Recent Activities</h4>
                    <ul class="list-group mt-3">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
