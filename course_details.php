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

<div class="container course-details pt-8 pb-5">
    <div class="row">
        <!-- Left Side: Course Image -->
        <div class="col-md-5 d-flex justify-content-start align-items-start" data-aos="fade-up" data-aos-duration="2000">
            <img src="<?php echo htmlspecialchars($course['course_image']); ?>" class="img-fluid rounded cImg" alt="<?php echo htmlspecialchars($course['course_name']); ?>">
        </div>

        <!-- Right Side: Course Information -->
        <div class="col-md-7" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="cTitle"><?php echo htmlspecialchars($course['course_name']); ?></h2>
            <p class="cPrice"><span> Rs. <?php echo htmlspecialchars($course['price']); ?> /=</span></p>
            <p class="cShDes"><?php echo nl2br(htmlspecialchars($course['description'])); ?></p>

            <!-- Button to purchase the course -->
            <a href="purchase.php?id=<?php echo $course['course_id']; ?>" class="btn btn-custom-2 btn-lg">Buy Course</a>
        </div>
    </div>

</div>
    <center><hr class="my-5" style="width: 70%; height: 5px; color: #0077cc; size: 5px;"></center>


 <div class="container course-content pt-5 pb-8">
    <!-- Course Content Section -->

    <div class="row ">

    <div class="col-md-7 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">
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
    <br>
        <h2 class="cTitle3">No of Assignments : <span style="color: #0077cc; font-weight: 500;"><?php echo htmlspecialchars($course['no_of_assignments']); ?></span></h2>
        <h2 class="cTitle3">Lecturer : <span style="color: #0077cc; font-weight: 500;"><?php echo htmlspecialchars($course['teacher_id']); ?></span></h2>
    


        </div>
        </div>

    
        <!-- Left Side: Course Image -->
        <div class="col-md-5" data-aos="fade-up" data-aos-duration="2000">
            <img src="<?php echo htmlspecialchars($course['course_image']); ?>" class="img-fluid rounded cImg2" alt="<?php echo htmlspecialchars($course['course_name']); ?>">
        </div>
        
        </div>


 </div>

<?php include 'footer.php'; ?>
