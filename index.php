<?php 
include 'header.php'; 
include 'db_connection.php';
?>

<!-- Hero Section -->
<div class="col d-flex flex-column hero">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <div class="hero-head">
           <h1>Harmonize Your Learning at <br>Wave Park.</h1>
        </div>
        <div class="hero-content"> 
            <p>Unleash your musical potential with Wave Park's dynamic LMS. Connect, learn, 
                and grow in an immersive online environment tailored for aspiring <br>musicians and educators.
            </p>
            <button class="btn btn-custom-1 mt-4"><a href="course" style="color:white; text-decoration: none;">View Courses</a></button>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container">
    <div class="row flex-column-reverse flex-md-row" data-aos="fade-up" data-aos-duration="2000">
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center mb-3">
            <img src="assets\images\hero-2.jpg" class="hero2-img img-fluid" alt="Wave Park Music">
        </div>
        <div class="col-12 col-md-6 text-center text-md-start">
            <h1 class="hero2-head">Learn Music Online with <span style="color: #0077cc;">Wave Park Academy</span></h1>
            <p class="hero2-content">Wave Park Music Institute offers a state-of-the-art learning management system for music educators and enthusiasts, featuring personalized lessons, live sessions, and progress tracking to inspire musicians of all ages and backgrounds.</p>
            <div class="btn-group gap-3">
                <button class="btn btn-custom-1"><a href="course" style="color:white; text-decoration: none;">View Courses</a></button>
                <button type="button" class="btn btn-custom-2"><a href="about" style="text-decoration: none;">Read more</a></button>
            </div>
        </div>
    </div>
</div>

<!-- Handbook Section -->
<div class="hero-3">
    <div class="anim" data-aos="fade-up" data-aos-duration="2000">
        <div class="hero-head">
            <h1>Download Our Student Handbook.</h1>
        </div>
        <div class="hero-content"> 
            <p class="mt-2">Discover everything you need to know about our courses, policies, and resources. The Student Handbook is your ultimate guide to a successful learning journey at Wave Park Music Institute.</p>
            <button class="btn btn-custom-1 mt-2">Download</button>
        </div>
    </div>
</div>

<!-- Latest Courses Section -->
<div class="container hero-4" data-aos="fade-left" data-aos-duration="2000">
    <center class="mb-3">
        <h1 class="hero4-head"><span style="color: #0077cc;">Latest </span>Music Courses</h1>
        <p>Discover Our Latest Music Courses at Wave Park Academy</p>
    </center>
    <br>
    
    <div class="row justify-content-center">
        <?php
        // Fetch the latest 3 courses from the database
        $query = "SELECT course_id, course_name, short_description, course_image, price FROM course ORDER BY date_added ASC LIMIT 3";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result && count($result) > 0) {
            foreach ($result as $row) {
                ?>
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                   <div class="card latest-course-card h-100">
                        <img src="<?php echo htmlspecialchars($row['course_image']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($row['course_name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title" style="color:#0077cc;"><?php echo htmlspecialchars($row['course_name']); ?></h5>
                            <p class="card-text text-start" style="font-size: 16px; font-weight: 400; padding-top: 10px; padding-bottom: 20px;"><?php echo htmlspecialchars($row['short_description']); ?></p>
                            <a href="course_details.php?id=<?php echo $row['course_id']; ?>" class="btn btn-custom-1 w-100 mt-auto">Rs. <?php echo htmlspecialchars($row['price']); ?> /=</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No courses available at the moment.</p>";
        }
        ?>
    </div>

    <div class="text-center">
        <button class="btn btn-custom-1 mt-5 mb-3"><a href="course" style="color:white; text-decoration: none;">View All Courses</a></button>
    </div>
</div>

<?php include 'footer.php'; ?>