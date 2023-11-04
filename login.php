<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'qrfeedback');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $entered_password = $_POST['password'];

        $stmt = $conn->prepare("SELECT email, password FROM login_details WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row["password"];

            // Verify the entered password with the hashed password in the database
            if (password_verify(trim($entered_password), $hashed_password)) {
                $_SESSION["user"] = "$email";
               header("Location: http://localhost/feedback/demo.php");
               exit();
            } else {
                echo "Password is invalid";
            }
        } else {
            echo "User not found";
        }
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    // $stmt->close();
    $conn->close();
}
     

?>