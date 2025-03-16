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


<!-- Add New Course Section -->
<div class="add-course mt-5">
    <center><h1 class="fw-bold mb-5">Add New Course</h1></center>
    <div class="card shadow-3 p-5 mx-auto" style="border-radius: 10px; max-width: 80%;">
        <form id="add-course-form">
            <div class="mb-3">
                <label for="course-name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="course-name" name="course_name" required>
            </div>
            <div class="mb-3">
                <label for="course-description" class="form-label">Description</label>
                <textarea class="form-control" id="course-description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="course-price" class="form-label">Price</label>
                <input type="number" class="form-control" id="course-price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="lessons" class="form-label">Lessons</label>
                <div id="lessons-container">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="lessons[]" placeholder="Lesson Name" required>
                        <button type="button" class="btn btn-outline-secondary add-lesson-btn">Add Lesson</button>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="assignments" class="form-label">Assignments</label>
                <div id="assignments-container">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="assignments[]" placeholder="Assignment Name" required>
                        <button type="button" class="btn btn-outline-secondary add-assignment-btn">Add Assignment</button>
                    </div>
                </div>
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
</div>


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Add Lesson Field
    document.querySelector('.add-lesson-btn').addEventListener('click', function() {
        const container = document.getElementById('lessons-container');
        const newField = document.createElement('div');
        newField.classList.add('input-group', 'mb-2');
        newField.innerHTML = `
            <input type="text" class="form-control" name="lessons[]" placeholder="Lesson Name" required>
            <button type="button" class="btn btn-outline-danger remove-lesson-btn">Remove</button>
        `;
        container.appendChild(newField);

        // Add event listener to remove button
        newField.querySelector('.remove-lesson-btn').addEventListener('click', function() {
            container.removeChild(newField);
        });
    });

    // Add Assignment Field
    document.querySelector('.add-assignment-btn').addEventListener('click', function() {
        const container = document.getElementById('assignments-container');
        const newField = document.createElement('div');
        newField.classList.add('input-group', 'mb-2');
        newField.innerHTML = `
            <input type="text" class="form-control" name="assignments[]" placeholder="Assignment Name" required>
            <button type="button" class="btn btn-outline-danger remove-assignment-btn">Remove</button>
        `;
        container.appendChild(newField);

        // Add event listener to remove button
        newField.querySelector('.remove-assignment-btn').addEventListener('click', function() {
            container.removeChild(newField);
        });
    });
</script>

</body>
</html>
