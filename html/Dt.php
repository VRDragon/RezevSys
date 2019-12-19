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
$text= 'Odber/Termín '.date('H:i');
$sql = "UPDATE Zakaznici SET klient ='$text',Priorita = '2'  WHERE id='1'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
