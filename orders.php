<?php
session_start();
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
            <h2 class="fw-bold text-primary">Orders</h2>

            <table class="table table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#00123</td>
                        <td>Data Science</td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>#00124</td>
                        <td>Software Engineering</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
