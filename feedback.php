<?php
$conn = new mysqli('localhost', 'root', '', 'qrfeedback');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$mob_no = $_POST['mob_no'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// SQL query to insert data into the database
$sql = "INSERT INTO feedback_details (name, mob_no, email, feedback) VALUES ('$name', '$mob_no', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>




 