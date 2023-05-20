<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli('localhost', 'root', '', 'students');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST["full_name"];
$email = $_POST["email"];
$gender = $_POST["gender"];

if (empty($full_name) || empty($email) || empty($gender)) {
    die("Error: Fill in all the fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format.");
}


$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration success.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql_select_data = "SELECT * FROM students";
$result = $conn->query($sql_select_data);

if ($result->num_rows > 0) {
    echo "<h2>Student list: </h2>";
    echo "<table border = '1'>
            <tr>
            <th>ID</th>
            <th>Full_Name</th>
            <th>Email</th>
            <th>Gender</th>
</tr>";

    while ($row = $result->fetch_assoc()){
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['full_name']."</td>
              <td>".$row['email']."</td>
              <td>".$row['gender']."</td>
</tr>";
    }
    echo "</table>";
}
else {
    echo "NO DATA";
}
$conn->close();
?>
