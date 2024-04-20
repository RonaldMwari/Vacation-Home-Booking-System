<?php
// Include the functions file
include_once('C:\xampp\htdocs\Vacation Home\functions.php');

// Fetch user queries
$userQueries = fetchUserQueries();

// Handle deletion logic if "Delete all" is clicked
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['del']) && $_GET['del'] == 'all') {
        // Handle deletion logic here
        $result = deleteAllUserQueries();

        if ($result) {
            echo '<div class="alert alert-success mt-3" role="alert">All queries deleted successfully!</div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">Error deleting queries: ' . $conn->error . '</div>';
        }
    }
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
                <a class="nav-link text-white" href="admin_settings.php">Settings</a>
            </li>
        </ul>
        <a href="admin_login.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 ms-auto p-4 overflow-hidden">
            <h4 class="mb-4">USER QUERIES</h4>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="text-end mb-4">
                        <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                            <i class="bi bi-check-all"></i> Mark all read
                        </a>
                        <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                            <i class="bi bi-trash"></i> Delete all
                        </a>
                    </div>
                    <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" width="20%">Subject</th>
                                    <th scope="col" width="30%">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
// Now you can use $userQueries in your foreach loop
if (!empty($userQueries)) {
    // Loop through user queries and display them
    foreach ($userQueries as $index => $query) {
        // Your display logic here
        echo '<tr>';
        echo '<th scope="row">' . ($index + 1) . '</th>';
        echo '<td>' . $query['name'] . '</td>';
        echo '<td>' . $query['email'] . '</td>';
        echo '<td>' . $query['subject'] . '</td>';
        echo '<td>' . $query['message'] . '</td>';
        echo '<td>';
        echo '<button class="btn btn-secondary btn-sm">View</button>';
        echo '<button class="btn btn-danger btn-sm ms-2">Delete</button>';
        echo '</td>';
        echo '</tr>';
    }
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
