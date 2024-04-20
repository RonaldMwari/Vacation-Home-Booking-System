<?php
include 'db_connection.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $homeName = $_POST['homeName'] ?? '';
    $userName = $_POST['userName'] ?? '';
    $checkInDate = $_POST['check_in_date'];
    $checkOutDate = $_POST['check_out_date'];
    $totalAmount = $_POST['total_amount'];

    // Assuming 'bookings' is your table name
    $sql = "INSERT INTO bookings (home_name, user_name, check_in_date, check_out_date, total_amount)
            VALUES ('$homeName', '$userName', '$checkInDate', '$checkOutDate', '$totalAmount')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking information updated successfully";
    } else {
        echo "Error updating booking information: " . $conn->error;
    }
}

$conn->close();



// Get data from URL parameters
$homeName = isset($_GET['homeName']) ? htmlspecialchars($_GET['homeName']) : '';
$userName = isset($_GET['userName']) ? htmlspecialchars($_GET['userName']) : '';
$pricePerNight = isset($_GET['pricePerNight']) ? intval($_GET['pricePerNight']) : 0;

// Calculate the number of nights
$numberOfNights = 0;
if (!empty($_POST['check_in_date']) && !empty($_POST['check_out_date'])) {
    $checkInTimestamp = strtotime($_POST['check_in_date']);
    $checkOutTimestamp = strtotime($_POST['check_out_date']);
    $numberOfNights = ($checkOutTimestamp - $checkInTimestamp) / (60 * 60 * 24);
}

// Calculate the total amount
$totalAmount = $numberOfNights * $pricePerNight;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Merienda', cursive;
        }

        .background-container {
            background: url('images/sliders/slider3.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            width: 60%;
        }

        .left-container,
        .right-container {
            width: 48%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: 'Merienda', cursive;
        }

        .separator {
            width: 4%;
            background-color: #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-family: 'Merienda', cursive;
        }
    </style>
</head>

<body>
<form method="post" action="booking.php">
    <!-- Background image and form container -->
    <div class="background-container">
        
        <div class="form-container">
            
            <!-- Left Container -->
            <div class="left-container">
    <label for="homeName">Home Name:</label>
    <input type="text" id="homeName" name="homeName" value="<?php echo isset($_GET['homeName']) ? htmlspecialchars($_GET['homeName']) : ''; ?>" required>

    <label for="userName">User Name:</label>
    <input type="text" id="userName" name="userName" required>

    <label for="check_in_date">Check-In Date:</label>
    <input type="date" name="check_in_date" id="check_in_date" required oninput="updateTotalAmount()">

    <label for="check_out_date">Check-Out Date:</label>
    <input type="date" name="check_out_date" id="check_out_date" required oninput="updateTotalAmount()">
</div>

            <!-- Right Container -->
            <div class="right-container">
                <label for="total_amount">Total Amount:</label>
                <input type="text" id="total_amount" name="total_amount" value="<?php echo $totalAmount; ?>" readonly>
                <button type="submit" onclick="confirmBooking()">Confirm Booking</button>
                <br>Thank You for booking with us!!</br>
            </div>
        </div>
    </div>

    <script>
        function updateTotalAmount() {
            // Update the total amount based on the number of nights and price per night
            var numberOfNights = getNumberOfNights();
            var pricePerNight = <?php echo $pricePerNight; ?>;
            var totalAmount = numberOfNights * pricePerNight;
            document.getElementById('total_amount').value = totalAmount.toFixed(2);
        }

        function getNumberOfNights() {
            // Get the check-in and check-out date values
            var checkInDate = document.getElementById('check_in_date').value;
            var checkOutDate = document.getElementById('check_out_date').value;

            // Calculate the number of nights
            var numberOfNights = 0;
            if (checkInDate && checkOutDate) {
                var checkInTimestamp = new Date(checkInDate).getTime();
                var checkOutTimestamp = new Date(checkOutDate).getTime();
                numberOfNights = (checkOutTimestamp - checkInTimestamp) / (24 * 60 * 60 * 1000);
            }
            return numberOfNights;
        }

        function confirmBooking() {
            // Display a message (you can customize this message)
            alert('Booking Now! Redirecting to index.php...');

            // Redirect to index.php
            window.location.href = 'index.php';
        }
    </script>
</body>

</html>
