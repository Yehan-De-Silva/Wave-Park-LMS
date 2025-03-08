<?php
session_start();
include '../db_connection.php';

if (isset($_POST['register'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Hash the password before storing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Check if the email already exists
        $checkQuery = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $checkQuery->execute([$email]);

        if ($checkQuery->rowCount() > 0) {
            echo "<script>alert('Email already exists. Please use a different email.');</script>";
        } else {
            // **Do NOT insert role (it will use default value 'Student')**
            $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$first_name, $last_name, $email, $hashed_password]);

            echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
<<<<<<< HEAD
?>
=======


// **User Login Function**
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    try {
        // Fetch user data from database
        $stmt = $conn->prepare("SELECT user_id, first_name, password, role FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['first_name'] = $user['first_name'];

            // Redirect based on role
            if ($user['role'] === 'admin') {
                header("Location: admin_dashboard.php");
            } elseif ($user['role'] === 'student') {
                header("Location: St_dashboard.php");
            } elseif ($user['role'] === 'teacher') {
                header("Location: ../Lecturer/overview.php");
            }
            exit;
        } else {
            echo "<script>alert('Incorrect Username or Password...Try Again...'); window.location.href='login.php';</script>";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
>>>>>>> af39c53763d08efa883b823a7c125640bda6b4ea
