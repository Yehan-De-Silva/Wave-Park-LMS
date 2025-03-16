<?php
session_start();
include '../db_connection.php';

// Assuming the teacher's user ID is stored in the session
$teacher_id = $_SESSION['user_id'];

// Fetch courses assigned to the teacher
$query = "SELECT course_name, course_image FROM course WHERE teacher_id = ?";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $teacher_id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar-container">
        <?php include 'navigation_panel.php'; ?>
    </div>

    <!-- Main Content Area with Rounded Container -->
    <div class="main-content p-4">
        
        <div class="content-box p-4 shadow-sm rounded-4 bg-white">
        <div class="courses">
            <center><h1 class="fw-bold mb-5">Assigned Courses</h1></center>
            
            <?php if (count($result) > 0): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php foreach ($result as $row): ?>
                        <div class="col ">
                            <div class="card h-100 course-card-custom">
                                <!-- Course Image -->
                                <img src="<?php echo $row['course_image']; ?>" class="card-img-top" alt="Course Image">
                                <div class="card-body text-center">
                                    <h3 class="card-title" style="padding: 24px;"><?php echo htmlspecialchars($row['course_name']); ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center mt-5">No Courses Assigned.</p>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
