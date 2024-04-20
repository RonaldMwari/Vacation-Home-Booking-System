<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//registration 
$FullName = $_POST['FullName'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$dateofbirth = $_POST['dateofbirth'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'vacation home');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration(FullName, email, phonenumber, address, datofbirth, password, confirmpassword) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $FullName, $email, $phonenumber, $address, $dateofbirth, $password, $confirmpassword);
    
    if ($stmt->execute()) {
        // Registration successful, redirect to a new page
        header("Location: user homes.php?FullName=$FullName"); // Replace with the actual URL of the new page
        
        exit();
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

//login
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the login form
    $Useremail = $_POST['User email'];
    $Userpassword = $_POST['User password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'vacation home');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Validate login against the registration database
    $stmt = $conn->prepare("SELECT * FROM registration WHERE email = $email AND password = $password");
    $stmt->bind_param("ss", $Useremail, $Userpassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful, set session variable
        $_SESSION['user_email'] = $Useremail;
        header("Location: user_homes.php?email=$Useremail"); // Replace with the actual URL of the user homes page
        exit();
    } else {
        // Login failed
        $loginError = "Wrong password or email entered. Please try again.";
    }

    $stmt->close();
    $conn->close();
}

?>