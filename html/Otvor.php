<?php
$servername = "localhost";
$username = "admin";
$password = "test";
$dbname = "RezSys";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE oznamTab SET txt = 'Otvorené 8:00-15:00',Status = '1'  WHERE id='1'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
