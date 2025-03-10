<?php
session_start();
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="d-flex">
    <div class="sidebar-container">
        <?php include 'navigation_panel.php'; ?>
    </div>

    <div class="main-content p-4">
        <div class="content-box p-4 shadow-sm rounded-4 bg-white">
            <h2 class="fw-bold text-primary">Notifications</h2>

            <ul class="list-group mt-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    New Assignment: Project 2 (CS101)
                    <span class="badge bg-info">New</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Your order has been shipped!
                    <span class="badge bg-success">Delivered</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
