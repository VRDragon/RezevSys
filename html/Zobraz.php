<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
header("Refresh: $sec; url=$page");
?>
<html>
<head>
<meta charset="UTF-8">
<title>Reletronic Rezervacmny system</title>
<style>
.login{
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", ser$
font-size:20px;
padding:0.1% 0.1% 0.1%;
margin-right: calc(0.5%);
margin-left: calc(0.5%);
display:inline-block;
position: relative;
float:center;
width: calc(99%);
}
.box{
display:inline-block;
position: relative;
float:center;
width: calc(100%);
}
button[name=tlc]{
font-family: georgia;
font-weight: bold;
width:100%;
background-color:#2ECC71;
color:#000;
padding:10px;
font-size:60px;
cursor:pointer;
border-radius:20px;
margin-bottom:10px;
height: calc(19%);
float:left;
}
h4
{
margin-bottom:1px;
margin-top:1px;
color:#0f0;
}
h1
{
margin-bottom:1px;
margin-top:1px;
color:#0f0;
}
</style>
</head>
        <body background=color:#fff>
                <form action="" method="post" style="text-align:center;">
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
                             $sql = "SELECT klient,priorita FROM Zakaznici";
                             $result = $conn->query($sql);
                             if ($result) {
                             }
                             else echo "no";
                             $index = 0;
                             $Klienty = array();
                             while($row = $result->fetch_assoc()) {
			     	$Klienty[$index] = $row["klient"];
				$Prior[$index] = $row["priorita"];
				$index++;
			     }
                             $conn->close();
                             for ($i = 0; $i < 5; $i++)
                             {
                             	echo("<button name='tlc'");
				switch ($Prior[$i]) 
				{
				case 1:
				echo ("style='background-color:#2ECC71;'");
				break;
				case 2:
				echo ("style='background-color:#5DADE2;'");
				break;
				case 3:
				echo ("style='background-color:#F4D03F;'");
				break;
				case 4:
				echo ("style='background-color:#F39C12;'");
				break;
				case 5:
				echo ("style='background-color:#E74C3C;'");
				break;
				case 6:
				echo ("style='background-color:#8E44AD;'");
				break;
				case 7:
				echo ("style='background-color:#707B7C;'");
				break;
				case 8:
				echo ("style='background-color:#00FEFE;'");
				break;
				}
			echo(">");
                        echo($Klienty[$i]);
                        echo("</button>");
                        }
               		?>
               </form>
    </body>
</html>
