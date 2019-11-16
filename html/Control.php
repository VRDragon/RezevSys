<?php
 if($_GET['button1']){fun1();}
 if($_GET['button2']){fun2();}
 if($_GET['button3']){fun3();}
  function fun1()
 {
        exec("php Otvor.php");
 }
 function fun2()
 {
        exec("php Zatvor.php");
 }
 function fun3()
 {
        exec("php Vytaz.php");
 }
?>
<html>
<head>
<meta charset="UTF-8">
<title>Reletronic Rezervacny system</title>
<style>
.login{
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", ser$
margin-right: calc(1%);
margin-left: calc(1%);
display:inline-block;
position: relative;
vertical-align: baseline;
width: calc(23%);
}
.box{
display:inline-block;
position: relative;
float:center;
width: calc(100%);
vertical-align: baseline;
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
margin-bottom:10px;
margin-top:10px;
}
button[name=tlc]{
font-family: georgia;
font-weight: bold;
width:100%;
background-color:#2ECC71;
color:#000;
padding:10px;
font-size:30px;
cursor:pointer;
border-radius:20px;
margin-bottom:10px;
height: calc(20%);
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
   <body style="text-align:center;">
        <h1 style="color:#000;">Vitajte vo ForLED.SK<br />
                <div class="boxX">
				
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
                                                $sql = "SELECT txt FROM oznamTab";
                                                $result = $conn->query($sql);
                                                if ($result) {
                                                }
                                                else echo "no";
                                                $index = 0;
                                                $txt = array();
                                                while($row = $result->fetch_assoc()) {
							$texti[$index] = $row["txt"];
							$index++;
						}
                                                $conn->close();
                                                echo($texti[0]);
                                        ?>
                </div>
                <div class="box">
                        <div class="login">
                                <button id="btnfun1" name="tlc" onClick='location.href="?button1=1"'>Otvorene</button>
                                <button id="btnfun2" name="tlc" onClick='location.href="?button2=1"'>Zatvorene</button>
                                <button id="btnfun3" name="tlc" onClick='location.href="?button3=1"'>Vyťazené</button>
                        </div>
                </div>
        </div>
    </body>
</html>
