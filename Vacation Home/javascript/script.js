document.querySelectorAll('[id^="moreDetailsBtn"]').forEach(button => {
    button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const extendedContent = document.getElementById(targetId);

        // Toggle the display of the extended content
        if (extendedContent) {
            extendedContent.classList.toggle('show-extended-content');
        }
    });
});

// Add click event listeners to all "book now" buttons
document.querySelectorAll('[id^="bookNowBtn"]').forEach(button => {
    button.addEventListener('click', function () {
        const homeName = this.closest('.card-body').querySelector('.home-name').textContent;
        const userName = '<?php echo $FullName; ?>'; // Assuming $FullName contains the user name

        alert('Booking Now for ' + homeName + '! Redirecting to booking.php...');

        // Redirect to booking.php with both homeName and userName parameters
        window.location.href = `booking.php?homeName=${encodeURIComponent(homeName)}&userName=${encodeURIComponent(userName)}`;
    });
});

// Function to calculate and update the total amount
function updateTotalAmount() {
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

    // Use the pricePerNight variable
    var pricePerNight = pricePerNight || 0; // Default to 0 if not set

    // Calculate the total amount
    var totalAmount = numberOfNights * pricePerNight;

    // Update the total amount input field
    document.getElementById('total_amount').value = totalAmount.toFixed(2); // Display total with two decimal places
}

// Attach the updateTotalAmount function to the input events of check-in and check-out date fields
document.getElementById('check_in_date').addEventListener('input', updateTotalAmount);
document.getElementById('check_out_date').addEventListener('input', updateTotalAmount);

// Example event listener for the "Confirm Booking" button
document.querySelector('button[type="submit"]').addEventListener('click', function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Add your logic for confirming the booking or redirecting to another page
    alert('Booking confirmed!'); // Example: Display a success message
    // You can add additional logic here, such as submitting the form via AJAX or redirecting
});

// Example event listener for the "Confirm Booking" button
document.querySelector('button[type="submit"]').addEventListener('click', function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Call the function to confirm the booking and generate receipt
    confirmBooking();
});

function confirmBooking() {
    // Retrieve form data
    var homeName = document.getElementById('homeName').value;
    var userName = document.getElementById('userName').value;
    var checkInDate = document.getElementById('check_in_date').value;
    var checkOutDate = document.getElementById('check_out_date').value;
    var totalAmount = document.getElementById('total_amount').value;

    // Create a FormData object to send form data
    var formData = new FormData();
    formData.append('homeName', homeName);
    formData.append('userName', userName);
    formData.append('checkInDate', checkInDate);
    formData.append('checkOutDate', checkOutDate);
    formData.append('totalAmount', totalAmount);

    // Send the form data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_database.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Display success message
            alert('Booking information updated successfully');

            // Redirect to the receipt page
            window.location.href = `receipt.php?id=${JSON.parse(xhr.responseText).id}`;



        } else {
            // Handle errors if needed
            console.error('Error updating booking information:', xhr.responseText);
        }
    };
    xhr.send(formData);
}
