
<?php
    include('config.php');
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $idm = '0';
                $namem = "VelkoObchod";
                $sql = "SELECT FROM oznamTab ";
                $result = mysqli_query($db,$sql);
        }
?>
<!DOCTYPE html>
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
display:inline-block;
background-color:#000;
position: relative;
float:center;
width: calc(100%);
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
margin-top:10px;
height: 40%;
float:left;
}
button[name=nonetlc]{
font-family: georgia;
font-weight: bold;
background-color:#fff;
width:100%;
color:#000;
padding:10px;
font-size:30px;
cursor:pointer;
border-radius:20px;
margin-bottom:10px;
margin-top:10px;
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
   <body>
        <form action="" method="post" style="text-align:center;">
        <h1 style="color:#000;">Vitajte vo ForLED.SK<br />
		<div class="boxX">
			<h1 align="center" style="color:#fff;">Otvorene</h1>
		</div>
		<div class="box">
			<div class="login">
				<button name="tlc" onclick="Vo()" value="tst"type="submit">Som veľkoobchodný zákazník</button>
				<button name="tlc" onclick="Od()" type="submit">Som tu na odporúčanie</button>
			</div>
			<div class="login">
				<button name="tlc" onclick="Dt()" type="submit">Mám dohodnutý termín/osobný odber</button>
				<button name="tlc" onclick="Ch()" type="submit">Chcem nakúpiť ale nemám objednávku</button>
			</div>
			<div class="login">
				<button name="tlc" onclick="Po()" type="submit">Poradenstvo: osvetlenie skladu,výroby, kancelárie, pouličné...</button>
				<button name="tlc" onclick="Ine()" type="submit">Ine...</button>
			</div>
			<div class="login">
				<button name="tlc" onclick="Pb()" type="submit">Poradenstvo s výberom svetiel do domu či bytu</button>
				<button name="nonetlc"  type="button"></button>
            </div>
        </div>
		<script>
			function Vo() {
				<?php
				 exec("php Vo.php");
´				?>
				alert("Za chvilku sa v  m venujeme");
			}
			function Pb() {
				alert("Za chvilku sa vám venujeme");
				<?php
                                        $txt = "Pb";
                                ?>
			}
			function Dt() {
				alert("Za chvilku sa vám venujeme");
				<?php
                                        $txt = "Dt";
                                ?>
			}
			function Od() {
				alert("Za chvilku sa vám venujeme");
				<?php
                                        $txt = "Od";
                                ?>
			}
			function Po() {
				alert("Za chvilku sa vám venujeme");
				<?php
                                        $txt = "Po";
                                ?>
			}
			function Ch() {
				alert("Prosim spravte si objednávku momentalne sme vyťaženy");
				<?php
                                        $txt = "Ch";
                                ?>
			}
			function Ine() {
				alert("Za chvilku sa vám venujeme");
				<?php
                                        $txt = "ine";
                                ?>
			}
		</script>
        </form>
    </body>

</html>

