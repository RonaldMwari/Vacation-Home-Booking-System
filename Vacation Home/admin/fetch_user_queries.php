<?php
// Function to establish a database connection
function connectToDatabase() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'vacation home';

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    return $conn;
}

// Function to fetch user queries from the database
function fetchUserQueries() {
    $conn = connectToDatabase();

    $sql = "SELECT id, name, email, subject, message, date FROM user queries";
    $result = $conn->query($sql);

    $userQueries = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userQueries[] = $row;
        }
    }

    $conn->close();

    return $userQueries;
}

// Usage example
$userQueries = fetchUserQueries();

foreach ($userQueries as $query) {
    echo 'Name: ' . $query['name'] . '<br>';
    echo 'Email: ' . $query['email'] . '<br>';
    echo 'Subject: ' . $query['subject'] . '<br>';
    echo 'Message: ' . $query['message'] . '<br>';
    echo 'Date: ' . $query['date'] . '<br>';
    echo '-------------------------<br>';
}
?>
