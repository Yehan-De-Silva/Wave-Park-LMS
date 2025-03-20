<?php
include 'header.php';
include 'db_connection.php';

// Fetch the course ID from the URL
if (isset($_GET['id'])) {
    $course_id = $_GET['id'];

    // Fetch course details from the database
    $query = "SELECT * FROM course WHERE course_id = :course_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
    $stmt->execute();
    $course = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the course exists
    if (!$course) {
        echo "<p>Course not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid course ID.</p>";
    exit;
}
?>
<div class="contact">
    <div class="contact-head" data-aos="fade-up" data-aos-duration="2000">
        <h1><?php echo htmlspecialchars($course['course_name']); ?></h1>
    </div>
</div>

<div class="container course-details py-5">
    <div class="row my-5">
        <!-- Left Side: Course Image -->
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="image-container">
                <img src="<?php echo htmlspecialchars($course['course_image']); ?>" class="img-fluid rounded cImg" alt="<?php echo htmlspecialchars($course['course_name']); ?>">
            </div>
        </div>

        <!-- Right Side: Course Information -->
        <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-duration="2000">
            <div class="course-info">
                <h2 class="cTitle"><?php echo htmlspecialchars($course['course_name']); ?></h2>
                <p class="cPrice"><span>Rs. <?php echo htmlspecialchars($course['price']); ?> /=</span></p>
                <div class="cShDes"><?php echo nl2br(htmlspecialchars($course['description'])); ?></div>

                <!-- Button to purchase the course -->
                <div class="mt-4">
                    <a href="purchase.php?id=<?php echo $course['course_id']; ?>" class="btn btn-custom-2 btn-lg">Buy Course</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider-container">
    <hr class="divider">
</div>

<div class="container course-content py-5">
    <!-- Course Content Section -->
    <div class="row ctrow flex-column-reverse flex-md-row">
        <!-- Left Side: Course Content -->
        <div class="col-lg-7 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="ctbox">
                <h2 class="cTitle3">Course Content</h2>
                <ul class="list-unstyled ctnt">
                    <?php
                    // Fetch lessons from the lesson table related to the current course
                    $query = "SELECT lesson_name FROM lesson WHERE course_id = :course_id";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
                    $stmt->execute();

                    // Check if there are any lessons
                    $lessons = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if ($lessons && count($lessons) > 0) {
                        // Loop through the fetched lessons and display them
                        foreach ($lessons as $lesson) {
                            echo "<li><i class='bi bi-music-note-beamed'></i> " . htmlspecialchars($lesson['lesson_name']) . "</li>";
                        }
                    } else {
                        echo "<li>No lessons available for this course.</li>";
                    }
                    ?>
                </ul>
                <h2 class="cTitle3">No of Assignments: <span class="highlight-text"><?php echo htmlspecialchars($course['no_of_assignments']); ?></span></h2>
                
            </div>
        </div>

        <!-- Right Side: Secondary Course Image -->
        <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="2000">
            <div class="image-container-2">
                <img src="<?php echo htmlspecialchars($course['course_image']); ?>" class="img-fluid rounded cImg2" alt="<?php echo htmlspecialchars($course['course_name']); ?>">
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>