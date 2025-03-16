<?php
session_start();
include '../db_connection.php';

// Fetch assigned courses for the logged-in teacher
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session
$query = "SELECT course_name FROM course WHERE teacher_id = ?";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $teacher_id, PDO::PARAM_INT);
$stmt->execute();
$courses = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $courses[] = $row['course_name'];
}
$stmt = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
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

    <!-- Main Content Area -->
    <div class="main-content p-4">
        <div class="content-box p-4 shadow-sm rounded-4 bg-white">
            <center><h2 class="fw-bold text-primary mb-5">Add Assignments</h2></center>
            
            <div class="add-assignment-form-container">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="assignment_name" class="form-label">Assignment Name</label>
                    <input type="text" class="form-control" id="assignment_name" name="assignment_name" required>
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <select class="form-select" id="course" name="course" required>
                        <option value="" disabled selected>Select a course</option>
                        <?php foreach ($courses as $course): ?>
                            <option value="<?php echo htmlspecialchars($course); ?>"><?php echo htmlspecialchars($course); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Assignment Link</label>
                    <input type="url" class="form-control" id="link" name="link" placeholder="https://example.com/document" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
