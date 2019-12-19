<?php
$page = "index.php";
$sec = "180";
header("Refresh: $sec; url=$page");
?>
<?php
 if($_GET['button1']){fun1();}
 if($_GET['button2']){fun2();}
 if($_GET['button3']){fun3();}
  function fun1()//exist
 {
        header("Location:ExistZ.php");
 }
 function fun2()//nový
 {
        header("Location:NovyZ.php");
 }
 function fun3()//nový
 {
        exec("php posun.php");
        exec("php Kur.php");
	    header("Location:PDP.php");
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
width: calc(30%);
height:calc(100%);
}
.box{
display:inline-block;
position: relative;
float:center;
width: calc(100%);
height: calc(80%);
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
height: calc(90%);
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
font-size: 50px;
color:#0f0;
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
		<div  class="Hlavicka" >
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
		     				echo ("<div class='boxX' ");
						switch ($status[0]) 
						{
						case 1:
							echo ("style='background-color:#2ECC71;'");
						break;
						case 2:
							echo ("style='background-color:#E74C3C;'");
						break;
						case 3:
							echo ("style='background-color:#F4D03F;'");
						break;
						}
						echo(">");
                                                echo($texti[0]);
                                        ?>
				</div>
		</div>
                <div class="box">
                        <div class="login">
                                <button id="btnfun1" name="tlc" onClick='location.href="?button1=1"'>Som existujúci zákazník</button>
                        </div>
                        <div class="login">
                                <button id="btnfun2" name="tlc" onClick='location.href="?button2=1"'>Som nový zákazník</button>
                        </div>
                        <div class="login">
                                <button id="btnfun2" name="tlc" onClick='location.href="?button3=1"'>Kurier/pošta</button>
                        </div>
				</div>
	</body>
</html>
