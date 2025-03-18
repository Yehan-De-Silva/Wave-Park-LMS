<?php 

include 'header.php'; 
include 'db_connection.php';
?>

<div class="course">
    <div class="courses-head" data-aos="fade-up" data-aos-duration="2000">
        <h1>View Our Courses</h1>
    </div>
</div>
<div class="container hero-4">
    <center class="mb-3" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="hero4-head"><span style="color: #0077cc;">Explore</span> The Music</h1>
        <h3>Discover Our Premium Music Courses at Wave Park Academy</h3>
    </center>
    <br>
    <br>
    <div class="row align-self-center align-items-center justify-content-center">
        <?php
        // Fetch the latest 3 courses from the database
        $query = "SELECT course_name, short_description, course_image, price FROM course ORDER BY date_added ASC LIMIT 4";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result && count($result) > 0) {
            foreach ($result as $row) {
                ?>
                <div class="col-12 w-33 col-sm-6 col-lg-4 col-sm-lg-12 col-sm-w-100">
                   <div class="card latest-course-card mb-5" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?php echo htmlspecialchars($row['course_image']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($row['course_name']); ?>">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#0077cc;"><?php echo htmlspecialchars($row['course_name']); ?></h5>
                            <p class="card-text text-start" style="font-size: 16px; font-weight: 400; padding-top: 10px; padding-bottom: 20px;"><?php echo htmlspecialchars($row['short_description']); ?></p>
                            <button class="btn btn-custom-1 w-100">Rs. <?php echo htmlspecialchars($row['price']); ?> /=</button>
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

</div>

<?php include 'footer.php'; ?>
