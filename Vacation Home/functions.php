<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to establish a database connection
function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vacation home";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


// Function to update website settings
function updateWebsiteSettings($newTitle, $newDescription) {
    $conn = new mysqli('localhost', 'root', '', 'vacation home');
    $conn->autocommit(true); // Enable auto-commit mode

    // Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Sanitize input to prevent SQL injection
    $newTitle = $conn->real_escape_string($newTitle);
    $newDescription = $conn->real_escape_string($newDescription);

   // Update the website settings in the database
   $query = "UPDATE `website settings` SET `title` = ?, `description` = ? WHERE `id` = 1";
   $stmt = $conn->prepare($query);
   $stmt->bind_param('ss', $newTitle, $newDescription);
   
   

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare($query);

if ($stmt) {
    // Bind parameters separately
    $stmt->bind_param('ss', $newTitle, $newDescription);

    // Execute the statement
    if (!$stmt->execute()) {
        die('Error executing statement: ' . $stmt->error);
    } else {
        echo "Website settings updated successfully!";
    }

    $stmt->close();  // Close the statement
} else {
    die('Error preparing statement: ' . $conn->error);
}

$conn->close();  // Close the connection


}



// Function to get website settings
function getWebsiteSettings() {
    $conn = connectToDatabase();

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $query = "SELECT * FROM `website settings` LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $websiteSettings = $result->fetch_assoc();
    } else {
        // Set default values if no settings are found
        $websiteSettings = [
            'title' => 'Divine Homes',
            'description' => 'Welcome to Divine Homes, your gateway to unforgettable vacations in the heart of Kenya! ...'
        ];
    }

    $conn->close();

    return $websiteSettings;
}



// Function to fetch user queries
function fetchUserQueries() {
    $conn = connectToDatabase();

    // Check if the connection is successful
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $query = "SELECT * FROM `user queries`"; // Adjust the table name if needed
    $result = $conn->query($query);

    $userQueries = array();

    if ($result) {
        // Fetch data and store in an array
        while ($row = $result->fetch_assoc()) {
            $userQueries[] = $row;
        }
    } else {
        // Display an error message if the query fails
        echo '<div class="alert alert-danger mt-3" role="alert">Error fetching user queries: ' . $conn->error . '</div>';
    }

    $conn->close();

    return $userQueries;
}

// Function to delete all user queries
function deleteAllUserQueries() {
    $conn = connectToDatabase();

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Perform the deletion query
    $query = "DELETE FROM `user queries`"; // Adjust the table name if needed
    $result = $conn->query($query);

    $conn->close();

    return $result;
}

// Function to login a user
function loginUser($email, $password) {
    $conn = connectToDatabase();

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Sanitize input to prevent SQL injection
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Check if the user exists
    $query = "SELECT * FROM `registration` WHERE `email`='$email'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session or perform other actions
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            return true;
        } else {
            return 'Incorrect password';
        }
    } else {
        return 'User not found';
    }

    $conn->close();
}

// function to get total users

function getTotalUsersCount() {
    $conn = connectToDatabase();

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $query = "SELECT COUNT(*) as count FROM `registration`";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];
    } else {
        $count = 0;
        // Display an error message if the query fails
        echo '<div class="alert alert-danger mt-3" role="alert">Error getting total users count: ' . $conn->error . '</div>';
    }

    $conn->close();

    return $count;
}

// Function to get the count of active users
function getActiveUsersCount() {
    $conn = connectToDatabase();

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $query = "SELECT COUNT(*) as count FROM `registration` WHERE `status` = 'active'";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];
    } else {
        $count = 0;
        // Display an error message if the query fails
        echo '<div class="alert alert-danger mt-3" role="alert">Error getting active users count: ' . $conn->error . '</div>';
    }

    $conn->close();

    return $count;
}






?>
