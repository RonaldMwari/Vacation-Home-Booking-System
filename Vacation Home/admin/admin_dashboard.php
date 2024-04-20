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

<nav class="navbar navbar-expand-lg navbar-dark bg-black px-lg-3 py-lg-2 shadow-sm  ">
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
 <!-- admin_dashboard.php -->

<?php
include_once('C:\xampp\htdocs\Vacation Home\functions.php');

// Get user statistics
$totalUsers = getTotalUsersCount();
$activeUsers = getActiveUsersCount();
?>

<!-- Add these statistics to your HTML -->
<div class="card text-white bg-dark">
    <div class="card-body">
        <h5 class="card-title">User Statistics</h5>
        <p class="card-text">Total Users: <span class="text-white"><?php echo $totalUsers; ?></span></p>
        <p class="card-text">Active Users: <span class="text-white"><?php echo $activeUsers; ?></span></p>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Successful Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: white; /* Set text color to white */
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            color: black
        }

        h2 {
            text-align: center;
            color: white; /* Set title color to white */
        }
    </style>
</head>

<body>
    <h2>Successful Bookings</h2>

    <?php
    include 'C:\xampp\htdocs\Vacation Home\db_connection.php'; // Include your database connection file

    // Fetch booking records from the database
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        // Output the table headers
        echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Home Name</th>
                    <th>User Name</th>
                    <th>Check-In Date</th>
                    <th>Check-Out Date</th>
                    <th>Total Amount</th>
                </tr>';

        // Output data from each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['home_name'] . '</td>
                    <td>' . $row['user_name'] . '</td>
                    <td>' . $row['check_in_date'] . '</td>
                    <td>' . $row['check_out_date'] . '</td>
                    <td>' . $row['total_amount'] . '</td>
                </tr>';
        }

        // Close the table
        echo '</table>';
    } else {
        echo '<p>No booking records found.</p>';
    }

    $conn->close();
    ?>
</body>

</html>


