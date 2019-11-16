
<?php
 if($_GET['button1']){fun1();}
 if($_GET['button2']){fun2();}
 if($_GET['button3']){fun3();}
 if($_GET['button4']){fun4();}
 if($_GET['button5']){fun5();}
 if($_GET['button6']){fun6();}
 if($_GET['button7']){fun7();}
 if($_GET['button8']){fun8();}
  function fun1()
 {
        exec("php posun.php");
        exec("php Vo.php");
        header("Location:PDP.php");
 }
 function fun2()
 {
        exec("php posun.php");
        exec("php Od.php");
        header("Location:Odpor.php");
}
 function fun3()
 {
        exec("php posun.php");
        exec("php Dt.php");
        header("Location:PDP.php");
 }
 function fun4()
 {
        exec("php posun.php");
        exec("php Ch.php");
        header("Location:Naku.php");
 }
 function fun5()
 {
        exec("php posun.php");
        exec("php Po.php");
        header("Location:PDP.php");
 }
 function fun6()
 {
        exec("php posun.php");
        exec("php Ine.php");
        header("Location:Inet.php");
 }
 function fun7()
 {
        exec("php posun.php");
        exec("php Pb.php");
        header("Location:Dom.php");
 }
 function fun8()
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
height: calc(40%);
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
						$status = array();
                                                while($row = $result->fetch_assoc()) {
							$texti[$index] = $row["txt"];
							$texti[$index] = $row["Status"];
							$index++;
						}
                                                $conn->close();
						echo("<h1");
						switch ($Prior[$i]) 
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
						echo("</h1>");
                                        ?>
                </div>
                <div class="box">
                        <div class="login">
                                <button id="btnfun1" name="tlc" onClick='location.href="?button1=1"'>Som veľkoobchodný zákazník</button>
                                <button id="btnfun2" name="tlc" onClick='location.href="?button2=1"'>Som tu na odporúčanie</button>
                        </div>
                        <div class="login">
                                <button id="btnfun3" name="tlc" onClick='location.href="?button3=1"'>Mám dohodnutý termín/osobný odber</button>
                                <button id="btnfun4" name="tlc" onClick='location.href="?button4=1"'>Chcem nakúpiť ale nemám objednávku</button>
                        </div>
                        <div class="login">
                                <button id="btnfun5" name="tlc" onClick='location.href="?button5=1"'>Poradenstvo: osvetlenie skladu,výroby, kancelárie, pouličné...</button>
                                <button id="btnfun8" name="tlc" onClick='location.href="?button8=1"'>Kuriér/Pošta</button>
                        </div>
                        <div class="login">
                                <button id="btnfun7" name="tlc" onClick='location.href="?button7=1"'>Poradenstvo s výberom svetiel do domu či bytu</button>
                                <button id="btnfun6" name="tlc" onClick='location.href="?button6=1"'>Ine...</button>
            </div>
        </div>
    </body>
</html>

