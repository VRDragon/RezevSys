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
$sql = "UPDATE oznamTab SET txt = 'Momentalne sme vyťažený',Status = '3'  WHERE id='1'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
