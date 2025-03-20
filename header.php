<!DOCTYPE html>
<html lang="en">
<head>
    <title>WavePark</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Sticky header navigation -->
    <header class="sticky-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container navctn">
                <a class="navbar-brand" href="../index.php">                        
                    <img src="assets/images/logo.png" alt="WavePark Logo" class="logo-img">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>

                    <div class="nav-buttons">
                        <a href="authentication/Login" class="btn btn-outline">Login</a>
                        <a href="authentication/Login" class="btn btn-filled">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
 
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
        
        // Add active class to current page nav link
        document.addEventListener("DOMContentLoaded", function() {
            const currentLocation = location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                const linkPath = link.getAttribute("href");
                // Check if the current page matches the link href
                if (currentLocation.includes(linkPath) && linkPath !== '') {
                    link.classList.add('active');
                }
            });
           
        });

       
    </script>
</body>
</html>
