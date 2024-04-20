<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #343a40;
            padding: 15px;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #343a40;
        }

        .user-list {
            margin-top: 30px;
        }

        .user-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">User Management</span>
        </div>
    </nav>

    <div class="container">
        <h1>User Management</h1>
        <p>Manage and view user information.</p>

        <div class="user-list">
            <div class="user-card p-3 bg-white border rounded">
                <h2>User 1</h2>
                <p>Email: user1@example.com</p>
                <p>Phone: 123-456-7890</p>
            </div>

            <div class="user-card p-3 bg-white border rounded">
                <h2>User 2</h2>
                <p>Email: user2@example.com</p>
                <p>Phone: 987-654-3210</p>
            </div>

            <!-- Add more user cards as needed -->
        </div>

        <p><a href="admin_dashboard.php" class="btn btn-primary">Back to Admin Dashboard</a></p>
    </div>

</body>
</html>
