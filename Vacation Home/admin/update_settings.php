<?php
// Include the functions file
include_once('C:\xampp\htdocs\Vacation Home\functions.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_changes'])) {
    // Get form data
    $newTitle = $_POST['new_title'];
    $newDescription = $_POST['new_description'];

    // Update website settings in the database
    updateWebsiteSettings($newTitle, $newDescription);

    // Redirect to the admin_settings.php page or any other page you prefer
    header("Location: admin_settings.php");
    exit();
}
?>
