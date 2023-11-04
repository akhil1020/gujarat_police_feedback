<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "qrfeedback";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize user input
$mobile_number = $conn->real_escape_string($_POST['mobile_number']);

// Check if the mobile number exists in the database
$query = "SELECT * FROM mobile_number WHERE mobile_num = '$mobile_number'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "Mobile number is valid. <a href='index.html'>Go back</a>";
    // Mobile number exists, move forward
    header("Location: feedback_form.html"); // Replace with the desired success page
} else {
    // Mobile number doesn't exist, show error message
    echo "Mobile number is invalid. <a href='index.html'>Go back</a>";
}

$conn->close();
?>