<?php
$conn = new mysqli('localhost', 'root', '', 'qrfeedback');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

$existSql = "SELECT * FROM login_details WHERE email = ?";
$stmt = $conn->prepare($existSql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$numExistRows = $result->num_rows;

if ($numExistRows > 0) {
    echo "Email Already Exists";
} else {
    if ($password === $repeatpassword) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database
        $sql = "INSERT INTO login_details (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);
        $result = $stmt->execute();

        if ($result) {
            echo "Account created successfully";
        }
    } else {
        echo "Passwords do not match";
    }
}
?>



