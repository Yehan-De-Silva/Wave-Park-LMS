<?php
session_start();
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
            <h2 class="fw-bold text-primary">Settings</h2>

            <form class="mt-4">
                <div class="mb-3">
                    <label class="form-label">Change Password</label>
                    <input type="password" class="form-control" placeholder="Enter new password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Notifications</label>
                    <select class="form-select">
                        <option>Enabled</option>
                        <option>Disabled</option>
                    </select>
                </div>
                <button class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
