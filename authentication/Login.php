<!DOCTYPE html>
<html lang="en">
<head>
    <title>WavePark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">

</head>

<?php 

session_start();
 
include '../db_connection.php';

?>

<div class="container" >

    <a href="../index.php">
        <div class="d-flex justify-content-center pt-5">
            <img src="../assets/images/logo2.png" alt="">
        </div>
    </a>

    <div class="card bg-white gap-5" style="width: 30rem; margin: 0 auto; margin-top:2rem; margin-bottom: 5rem; padding: 2rem;">
        <div class="d-flex align-items-center justify-content-center gap-5">
            <div class="toggle-btn active" id="signInToggle">Sign In</div>
            <div class="toggle-btn" id="signUpToggle">Sign Up</div>
        </div>
        
        <!-- Sign In Form -->
        <div class="form-container active" id="signInForm">
            <form method="post" action="auth.php">
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                &nbsp;
                <button type="submit" name="login" class="btn btn-custom w-100">Sign In</button>
            </form>
            &nbsp;
            <div class="extra">
            <h4>Don't have an account? <a href="#" id="signUpLink">SignUp</a>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container" id="signUpForm">
            <form method="post" action="auth.php">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                &nbsp;
                <button type="submit" name="register" class="btn btn-custom w-100">Sign Up</button>
            </form>
            &nbsp;
            <div class="extra">
            <h4>Already have an account? <a href="#" id="signInLink">SignIn</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('signInToggle').addEventListener('click', function() {
        document.getElementById('signInForm').classList.add('active');
        document.getElementById('signUpForm').classList.remove('active');
        this.classList.add('active');
        document.getElementById('signUpToggle').classList.remove('active');
    });

    document.getElementById('signUpToggle').addEventListener('click', function() {
        document.getElementById('signUpForm').classList.add('active');
        document.getElementById('signInForm').classList.remove('active');
        this.classList.add('active');
        document.getElementById('signInToggle').classList.remove('active');
    });

    document.getElementById('signUpLink').addEventListener('click', function() {
        document.getElementById('signUpForm').classList.add('active');
        document.getElementById('signInForm').classList.remove('active');
        document.getElementById('signUpToggle').classList.add('active');
        document.getElementById('signInToggle').classList.remove('active');
    });

    document.getElementById('signInLink').addEventListener('click', function() {
        document.getElementById('signInForm').classList.add('active');
        document.getElementById('signUpForm').classList.remove('active');
        document.getElementById('signInToggle').classList.add('active');
        document.getElementById('signUpToggle').classList.remove('active');
    });

</script>