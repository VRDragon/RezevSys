<?php
$servername = "localhost";
$username = "admin";
$password = "test";
$dbname = "RezSys";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT klient,priorita FROM Zakaznici";
$result = $conn->query($sql);
if ($result) {
}
else echo "no";
$index = 1;
$Klienty = array();
$Prior = array();
while($row = $result->fetch_assoc()) {
        $Klienty[$index] = $row["klient"];
        $Prior[$index] = $row["priorita"];
        $index++;
}
$k = 4;
for ($i = 5; $i > 1; $i--)
{
        $sql = "UPDATE Zakaznici SET klient ='$Klienty[$k]',priorita = '$Prior[$k]'  WHERE id=$i;";
        $k--;
        echo $sql . "<br>" .$k . "<br>";
        if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        $conn->close();
?>

