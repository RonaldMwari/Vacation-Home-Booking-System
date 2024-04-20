<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('C:\xampp\htdocs\Vacation Home\functions.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_changes'])) {
    // Get form data
    $newTitle = $_POST['new_title'];
    $newDescription = $_POST['new_description'];

    // Update website settings in the database
    updateWebsiteSettings($newTitle, $newDescription);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/common.css">
    <style>
        .navbar {
            flex-shrink: 0;
        }

        .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .nav-item {
            margin-right: 20px; /* Adjust spacing as needed */
        }

        .h-font {
            margin-right: auto;
        }
    </style>
</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-black px-lg-3 py-lg-2 shadow-sm sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font">Divine Homes</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="admin_dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="admin_queries.php">User Queries</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-white" href="settings.php">Settings</a>
            </li>
        </ul>
        <a href="admin_login.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 ms-auto p-4 overflow-hidden">
            <h4 class="mb-4 text-white">Website Settings</h4>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                <form method="post" action="admin_settings.php">
                        <div class="mb-3">
                            <label for="new_title" class="form-label">New Title</label>
                            <input type="text" class="form-control shadow-none" id="new_title" name="new_title" required>
                        </div>

                        <div class="mb-3">
                            <label for="new_description" class="form-label">New Description</label>
                            <textarea class="form-control shadow-none" id="new_description" name="new_description" rows="4" required></textarea>
                        </div>

                        <button type="submit" name="save_changes" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>