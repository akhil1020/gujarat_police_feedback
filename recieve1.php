<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data from Database</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>mob_no</th>
            <th>email</th>
            <th>feedback</th>
        </tr>

        <?php 
        $servername = "localhost"; // Change this to your server name
        $username = "root"; // Change this to your username
        $password = ""; // No password set
        $dbname = "qrfeedback"; // Change this to your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
          
        $sql = "SELECT name, mob_no, email, feedback FROM feedback_details"; // Corrected SQL query
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row["name"] ."</td><td>". $row["mob_no"] ."</td><td>". $row["email"] ."</td><td>". $row["feedback"] ."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?> 

    </table>
</body>
</html>
