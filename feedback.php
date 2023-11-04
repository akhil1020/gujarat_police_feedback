<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "qrfeedback"; // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);
$rating = $conn->real_escape_string($_POST['reply']);

// Insert data into the database
$insertQuery = "INSERT INTO feedback_detail ( name, email, phone, message, rating) 
                VALUES ( '$name', '$email', '$phone', '$message', '$rating')";

if ($conn->query($insertQuery) === TRUE) {
    header("Location: http://localhost/feedback/feedback_submit.html");
    exit();
} else {
    echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>

 