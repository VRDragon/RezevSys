<?php
$page = $_SERVER['PHP_SELF'];
$sec = "180";
header("Refresh: $sec; url=$page");
?>
<?php
 if($_GET['button1']){fun1();}
  function fun1()
 {
        header("Location:Vyber.php");
 }
?>
<html>
<head>
<meta charset="UTF-8">
<title>Reletronic Rezervacny system</title>
<style>
.box{
display:inline-block;
position: relative;
float:center;
width: calc(100%);
height: calc(80%);
font-family: georgia;
font-weight: bold;
font-size:50px;
}
.boxX{
position: relative;
float:center;
text-align: center;
font-family: georgia;
font-weight: bold;
font-size:50px;
display:inline-block;
background-color:#2ECC71;
width: calc(97%);
vertical-align: baseline;
border-radius:20px;
}
button[name=tlc]{
font-family: georgia;
font-weight: bold;
width:100%;
background-color:#CADB2B;
color:#000;
padding:10px;
font-size:50px;
cursor:pointer;
border-radius:20px;
margin-bottom:10px;
height: calc(80%);
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
font-family: georgia;
font-weight: bold;
background-color:#fff;
width:100%;
color:#000;
padding:10px;
font-size:70px;
margin-bottom:1px;
margin-top:1px;
position: relative;
top: 50%;
transform: translateY(-50%);
}
html, body {
  height: 99%;
}
.Hlavicka {
  width:100%;
  height: 20%;
}
</style>
</head>
   <body style="text-align:center;">
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
                                                $sql = "SELECT txt,Status FROM oznamTab";
                                                $result = $conn->query($sql);
                                                if ($result) {
                                                }
                                                else echo "no";
                                                $index = 0;
                                                $txt = array();
						$status = array();
                                                while($row = $result->fetch_assoc()) {
							$texti[$index] = $row["txt"];
							$status[$index] = $row["Status"];
							$index++;
						}
                                                $conn->close();
		     				switch ($status[0])
                                                {
                                                case 1:
                                                        echo ("<div class='boxX' ");
                                                        echo ("style='background-color:#2ECC71;'");
							echo(">");
                                               		echo($texti[0]);
							echo("</div>");
							echo("<div class=\"box\">");
                                               		echo("<button id=\"btnfun1\" name=\"tlc\" onClick='location.href=\"?button1=1\"'>Prosím dotknite sa displeja a zvoľte možnosť. Bez tohto sa dvere neotvoria  </button>");
                                        		echo("</div>");
                                                break;
                                                case 2:
                                                        //echo ("<div class='box' ");
							echo ("<h1 style=\"color:#E74C3C;\" ");
                                                        //echo ("style='background-color:#E74C3C;'");
							echo(">");
                                                	echo($texti[0]);
							echo("<br />");	
							echo("</body>");	
                                                break;
                                                case 3:
                                                        //echo ("<div class='box' ");
							echo ("<button name=\"tlc\" ");	
                                                        echo ("style='background-color:#F4D03F;'");
							echo(">");
                                                	echo($texti[0]);
							echo("</button>");
                                                break;
                                                }				
					?>
        </body>
</html>
