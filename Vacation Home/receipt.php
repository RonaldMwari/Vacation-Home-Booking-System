<?php
// Include your database connection file or establish a connection here
include 'db_connection.php';

// Retrieve booking details from the database
// Use prepared statements to prevent SQL injection
$bookingId = $_GET['id'];
$query = "SELECT * FROM bookings WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $bookingId); // Assuming 'i' is for integer, adjust if needed
$stmt->execute();
$result = $stmt->get_result();

// Check if a row is fetched
if ($row = $result->fetch_assoc()) {
    // Use the fetched data
    $bookingData = [
        'homeName' => $row['home_name'],
        'userName' => $row['user_name'],
        'checkInDate' => $row['check_in_date'],
        'checkOutDate' => $row['check_out_date'],
        'totalAmount' => $row['total_amount'],
    ];

    // Close the PHP tag to include HTML content
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <!-- Add your CSS styling if needed -->
</head>
<body>
    <div id="receiptContainer">
        <h2>Booking Receipt</h2>
        <p><strong>Home Name:</strong> <?php echo $bookingData['homeName']; ?></p>
        <p><strong>User Name:</strong> <?php echo $bookingData['userName']; ?></p>
        <p><strong>Check-In Date:</strong> <?php echo $bookingData['checkInDate']; ?></p>
        <p><strong>Check-Out Date:</strong> <?php echo $bookingData['checkOutDate']; ?></p>
        <p><strong>Total Amount:</strong> <?php echo $bookingData['totalAmount']; ?></p>
    </div>
    <?php
} else {
    echo "Booking not found!";
}
?>
</body>
</html>
