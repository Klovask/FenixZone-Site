<?php 

session_start(); 
error_reporting(0); 
include_once('./kev/pdo.php');

if(isset($_SESSION['k_username']))
{
	$query = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$query->bindParam(':usuario', $_SESSION[k_username], PDO::PARAM_STR);
	$query->execute();

	while($row = $query->fetch())
	{
		$name = $row['Username'];
		if($row['Faccion'] != 1)
		{
			session_destroy();
			echo '<script type="text/javascript">window.location="../index.php";</script>';
		}	
	}
}
else echo '<script type="text/javascript">window.location="../sapd/index.php";</script>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="./css/estilo.css" type="text/css" rel="stylesheet">
<title>Departamento de policía de San Andreas</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" width="998" cellspacing="1">
<tbody><tr>
<td background="./imagenes/fondo-top.png"><img src="./imagenes/logopoliciax100.png" align="absmiddle"> <span class="titulo-top">Departamento de Policía de San Andreas</span></td>
</tr>
<tr><td>
<div class="contenido">
<script src="./js/jquery-1.10.2.js"></script>
<div style="float:left; width:579px; margin-left:8px">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td height="24"><span style="font-size:12px;"><a href="./principal.php" class="boton-menu">Principal</a> | <a href="./antecedentes.php" class="boton-menu">Buscar antecedentes</a> | <a href="./vehiculos.php" class="boton-menu">Identificar vehículo</a> | <a href="./policias.php" class="boton-menu">Policías</a> | <a href="./log.php" class="boton-menu">Log</a></span></td>
</tr>
</tbody></table>
</div>
<div style="float:left; width:397px;">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td width="24"><img src="./imagenes/policia64.png" align="absmiddle" width="24" height="24"></td>
<td width="410"><span style="font-size:12px;">Identificado como <strong><?php echo $name; ?></strong></span><strong style="font-size:10px;"> - (<a href="../sapd/index.php?action=exit">Salir</a>)</strong></td>
</tr>
</tbody></table>
</div>

<?php

$coloresveh = array(
"000000", "F5F5F5", "2A77A1", "840410", "263739", "86446E", "D78E10", "4C75B7", "BDBEC6", "5E7072", "46597A", "656A79", "5D7E8D", "58595A", "D6DAD6", "9CA1A3", "335F3F", "730E1A", "7B0A2A", "9F9D94",
"3B4E78", "732E3E", "691E3B", "96918C", "515459", "3F3E45", "A5A9A7", "635C5A", "3D4A68", "979592", "421F21", "5F272B", "8494AB", "767B7C", "646464", "5A5752", "252527", "2D3A35", "93A396", "6D7A88",
"221918", "6F675F", "7C1C2A", "5F0A15", "193826", "5D1B20", "9D9872", "7A7560", "989586", "ADB0B0", "848988", "304F45", "4D6268", "162248", "272F4B", "7D6256", "9EA4AB", "9C8D71", "6D1822", "4E6881",
"9C9C98", "917347", "661C26", "949D9F", "A4A7A5", "8E8C46", "341A1E", "6A7A8C", "AAAD8E", "AB988F", "851F2E", "6F8297", "585853", "9AA790", "601A23", "20202C", "A4A096", "AA9D84", "78222B", "0E316D",
"722A3F", "7B715E", "741D28", "1E2E32", "4D322F", "7C1B44", "2E5B20", "395A83", "6D2837", "A7A28F", "AFB1B1", "364155", "6D6C6E", "0F6A89", "204B6B", "2B3E57", "9B9F9D", "6C8495", "4D8495", "AE9B7F",
"406C8F", "1F253B", "AB9276", "134573", "96816C", "64686A", "105082", "A19983", "385694", "525661", "7F6956", "8C929A", "596E87", "473532", "44624F", "730A27", "223457", "640D1B", "A3ADC6", "695853",
"9B8B80", "620B1C", "5B5D5E", "624428", "731827", "1B376D", "EC6AAE", "000000", "177517", "210606", "125478", "452A0D", "571E1E", "010701", "25225A", "2C89AA", "8A4DBD", "35963A", "B7B7B7", "464C8D",
"84888C", "817867", "817A26", "6A506F", "583E6F", "8CB972", "824F78", "6D276A", "1E1D13", "1E1306", "1F2518", "2C4531", "1E4C99", "2E5F43", "1E9948", "1E9999", "999976", "7C8499", "992E1E", "2C1E08",
"142407", "993E4D", "1E4C99", "198181", "1A292A", "16616F", "1B6687", "6C3F99", "481A0E", "7A7399", "746D99", "53387E", "222407", "3E190C", "46210E", "991E1E", "8D4C8D", "805B80", "7B3E7E", "3C1737",
"733517", "781818", "83341A", "8E2F1C", "7E3E53", "7C6D7C", "020C02", "072407", "163012", "16301B", "642B4F", "368452", "999590", "818D96", "99991E", "7F994C", "839292", "788222", "2B3C99", "3A3A0B",
"8A794E", "0E1F49", "15371C", "15273A", "375775", "060820", "071326", "20394B", "2C5089", "15426C", "103250", "241663", "692015", "8C8D94", "516013", "090F02", "8C573A", "52888E", "995C52", "99581E",
"993A63", "998F4E", "99311E", "0D1842", "521E1E", "42420D", "4C991E", "082A1D", "96821D", "197F19", "3B141F", "745217", "893F8D", "7E1A6C", "0B370B", "27450D", "071F24", "784573", "8A653A", "732617",
"319490", "56941D", "59163D", "1B8A2F", "38160B", "041804", "355D8E", "2E3F5B", "561A28", "4E0E27", "706C67", "3B3E42", "2E2D33", "7B7E7D", "4A4442", "28344E"
);

function GetVehicleName($idveh)
  {
    if($idveh == 400){ return "Landstalker"; }
    else if($idveh == 401){ return "Bravura"; }
    else if($idveh == 402){ return "Buffalo"; }
    else if($idveh == 403){ return "Linerunner"; }
    else if($idveh == 404){ return "Perenniel"; }
    else if($idveh == 405){ return "Sentinel"; }
    else if($idveh == 406){ return "Dumper"; }
    else if($idveh == 407){ return "Firetruck"; }
    else if($idveh == 408){ return "Trashmaster"; }
    else if($idveh == 409){ return "Stretch"; }
    else if($idveh == 410){ return "Manana"; }
    else if($idveh == 411){ return "Infernus"; }
    else if($idveh == 412){ return "Voodoo"; }
    else if($idveh == 413){ return "Pony"; }
    else if($idveh == 414){ return "Mule"; }
    else if($idveh == 415){ return "Cheetah"; }
    else if($idveh == 416){ return "Ambulancia"; }
    else if($idveh == 417){ return "Leviathan"; }
    else if($idveh == 418){ return "Moonbeam"; }
    else if($idveh == 419){ return "Esperanto"; }
    else if($idveh == 420){ return "Taxi"; }
    else if($idveh == 421){ return "Washington"; }
    else if($idveh == 422){ return "Bobcat"; }
    else if($idveh == 423){ return "MrWhoopee"; }
    else if($idveh == 424){ return "BFInjection"; }
    else if($idveh == 425){ return "Hunter"; }
    else if($idveh == 426){ return "Premier"; }
    else if($idveh == 427){ return "Enforcer"; }
    else if($idveh == 428){ return "Securicar"; }
    else if($idveh == 429){ return "Banshee"; }
    else if($idveh == 430){ return "Predator"; }
    else if($idveh == 431){ return "Bus"; }
    else if($idveh == 432){ return "Rhino"; }
    else if($idveh == 433){ return "Barracks"; }
    else if($idveh == 434){ return "Hotknife"; }
    else if($idveh == 435){ return "+Trailer"; }
    else if($idveh == 436){ return "Previon"; }
    else if($idveh == 437){ return "Coach"; }
    else if($idveh == 438){ return "Cabbie"; }
    else if($idveh == 439){ return "Stallion"; }
    else if($idveh == 440){ return "Rumpo"; }
    else if($idveh == 441){ return "RCBandit"; }
    else if($idveh == 442){ return "Romero"; }
    else if($idveh == 443){ return "Packer"; }
    else if($idveh == 444){ return "Monster"; }
    else if($idveh == 445){ return "Admiral"; }
    else if($idveh == 446){ return "Squalo"; }
    else if($idveh == 447){ return "Seasparrow"; }
    else if($idveh == 448){ return "Pizzaboy"; }
    else if($idveh == 449){ return "Tram"; }
    else if($idveh == 450){ return "+Trailer"; }
    else if($idveh == 451){ return "Turismo"; }
    else if($idveh == 452){ return "Speeder"; }
    else if($idveh == 453){ return "Reefer"; }
    else if($idveh == 454){ return "Tropic"; }
    else if($idveh == 455){ return "Flatbed"; }
    else if($idveh == 456){ return "Yankee"; }
    else if($idveh == 457){ return "Caddy"; }
    else if($idveh == 458){ return "Solair"; }
    else if($idveh == 459){ return "TopfunVan"; }
    else if($idveh == 460){ return "Skimmer"; }
    else if($idveh == 461){ return "PCJ-600"; }
    else if($idveh == 462){ return "Faggio"; }
    else if($idveh == 463){ return "Freeway"; }
    else if($idveh == 464){ return "RCBaron"; }
    else if($idveh == 465){ return "RCRaider"; }
    else if($idveh == 466){ return "Glendale"; }
    else if($idveh == 467){ return "Oceanic"; }
    else if($idveh == 468){ return "Sanchez"; }
    else if($idveh == 469){ return "Sparrow"; }
    else if($idveh == 470){ return "Patroit"; }
    else if($idveh == 471){ return "Quad"; }
    else if($idveh == 472){ return "Coastguard"; }
    else if($idveh == 473){ return "Dinghy"; }
    else if($idveh == 474){ return "Hermes"; }
    else if($idveh == 475){ return "Sabre"; }
    else if($idveh == 476){ return "Rustler"; }
    else if($idveh == 477){ return "ZR-350"; }
    else if($idveh == 478){ return "Walton"; }
    else if($idveh == 479){ return "Regina"; }
    else if($idveh == 480){ return "Comet"; }
    else if($idveh == 481){ return "BMX"; }
    else if($idveh == 482){ return "Burrito"; }
    else if($idveh == 483){ return "Camper"; }
    else if($idveh == 484){ return "Marquis"; }
    else if($idveh == 485){ return "Baggage"; }
    else if($idveh == 486){ return "Dozer"; }
    else if($idveh == 487){ return "Maverik"; }
    else if($idveh == 488){ return "HeliNews"; }
    else if($idveh == 489){ return "Rancher"; }
    else if($idveh == 490){ return "FBIRancher"; }
    else if($idveh == 491){ return "Virgo"; }
    else if($idveh == 492){ return "Greenwood"; }
    else if($idveh == 493){ return "Jetmax"; }
    else if($idveh == 494){ return "H.R."; }
    else if($idveh == 495){ return "Sandking"; }
    else if($idveh == 496){ return "Blista C."; }
    else if($idveh == 497){ return "P. Maverik"; }
    else if($idveh == 498){ return "Boxville"; }
    else if($idveh == 499){ return "Benson"; }
    else if($idveh == 500){ return "Mesa"; }
    else if($idveh == 501){ return "RCGoblin"; }
    else if($idveh == 502){ return "H.R."; }
    else if($idveh == 503){ return "H.R."; }
    else if($idveh == 504){ return "B.B."; }
    else if($idveh == 505){ return "Rancher"; }
    else if($idveh == 506){ return "SuperGT"; }
    else if($idveh == 507){ return "Elegant"; }
    else if($idveh == 508){ return "Journey"; }
    else if($idveh == 509){ return "Bike"; }
    else if($idveh == 510){ return "M.Bike"; }
    else if($idveh == 511){ return "Beagle"; }
    else if($idveh == 512){ return "Cropduster"; }
    else if($idveh == 513){ return "Stuntplane"; }
    else if($idveh == 514){ return "Tanker"; }
    else if($idveh == 515){ return "Roadtrain"; }
    else if($idveh == 516){ return "Nebula"; }
    else if($idveh == 517){ return "Majestic"; }
    else if($idveh == 518){ return "Buccaneer"; }
    else if($idveh == 519){ return "Shamal"; }
    else if($idveh == 520){ return "Hydra"; }
    else if($idveh == 521){ return "FCR-900"; }
    else if($idveh == 522){ return "NRG-500"; }
    else if($idveh == 523){ return "HPV1000"; }
    else if($idveh == 524){ return "C.Truck"; }
    else if($idveh == 525){ return "Towtruck"; }
    else if($idveh == 526){ return "Fortune"; }
    else if($idveh == 527){ return "Cadrona"; }
    else if($idveh == 528){ return "FBITruck"; }
    else if($idveh == 529){ return "Willard"; }
    else if($idveh == 530){ return "Forklift"; }
    else if($idveh == 531){ return "Tractor"; }
    else if($idveh == 532){ return "C.Harvester"; }
    else if($idveh == 533){ return "Feltzer"; }
    else if($idveh == 534){ return "Remington"; }
    else if($idveh == 535){ return "Slamvan"; }
    else if($idveh == 536){ return "Blade"; }
    else if($idveh == 537){ return "Freight"; }
    else if($idveh == 538){ return "Brownstreak"; }
    else if($idveh == 539){ return "Vortex"; }
    else if($idveh == 540){ return "Vincent"; }
    else if($idveh == 541){ return "Bullet"; }
    else if($idveh == 542){ return "Clover"; }
    else if($idveh == 543){ return "Sadler"; }
    else if($idveh == 544){ return "Firetruck"; }
    else if($idveh == 545){ return "Hustler"; }
    else if($idveh == 546){ return "Intruder"; }
    else if($idveh == 547){ return "Primo"; }
    else if($idveh == 548){ return "Cargobob"; }
    else if($idveh == 549){ return "Tampa"; }
    else if($idveh == 550){ return "Sunrise"; }
    else if($idveh == 551){ return "Merit"; }
    else if($idveh == 552){ return "UtilityVan"; }
    else if($idveh == 553){ return "Nevada"; }
    else if($idveh == 554){ return "Yosemite"; }
    else if($idveh == 555){ return "Windsor"; }
    else if($idveh == 556){ return "MonsterT1"; }
    else if($idveh == 557){ return "MonsterT2"; }
    else if($idveh == 558){ return "Uranus"; }
    else if($idveh == 559){ return "Jester"; }
    else if($idveh == 560){ return "Sultan"; }
    else if($idveh == 561){ return "Stratum"; }
    else if($idveh == 562){ return "Elegy"; }
    else if($idveh == 563){ return "Raindance"; }
    else if($idveh == 564){ return "RCTiger"; }
    else if($idveh == 565){ return "Flash"; }
    else if($idveh == 566){ return "Tahoma"; }
    else if($idveh == 567){ return "Savanna"; }
    else if($idveh == 568){ return "Bandito"; }
    else if($idveh == 569){ return "+Train"; }
    else if($idveh == 570){ return "+Train"; }
    else if($idveh == 571){ return "Kart"; }
    else if($idveh == 572){ return "Mower"; }
    else if($idveh == 573){ return "Dune"; }
    else if($idveh == 574){ return "Sweepeer"; }
    else if($idveh == 575){ return "Broadway"; }
    else if($idveh == 576){ return "Tornado"; }
    else if($idveh == 577){ return "AT400"; }
    else if($idveh == 578){ return "DFT-30"; }
    else if($idveh == 579){ return "Huntley"; }
    else if($idveh == 580){ return "Stafford"; }
    else if($idveh == 581){ return "BF-400"; }
    else if($idveh == 582){ return "Newsvan"; }
    else if($idveh == 583){ return "Tug"; }
    else if($idveh == 584){ return "+Trailer"; }
    else if($idveh == 585){ return "Emperor"; }
    else if($idveh == 586){ return "Wayfarer"; }
    else if($idveh == 587){ return "Euros"; }
    else if($idveh == 588){ return "Hotdog"; }
    else if($idveh == 589){ return "Club"; }
    else if($idveh == 590){ return "+Train"; }
    else if($idveh == 591){ return "+Trailer"; }
    else if($idveh == 592){ return "Andromada"; }
    else if($idveh == 593){ return "Dodo"; }
    else if($idveh == 594){ return "RCCam"; }
    else if($idveh == 595){ return "Launch"; }
    else if($idveh == 596){ return "LSPD"; }
    else if($idveh == 597){ return "SFPD"; }
    else if($idveh == 598){ return "LVPD"; }
    else if($idveh == 599){ return "Ranger"; }
    else if($idveh == 600){ return "Picador"; }
    else if($idveh == 601){ return "S.W.A.T."; }
    else if($idveh == 602){ return "Alpha"; }
    else if($idveh == 603){ return "Phoenix"; }
    else if($idveh == 604){ return "Glendale"; }
    else if($idveh == 605){ return "Sadler"; }
    else if($idveh == 606){ return "+Trailer"; }
    else if($idveh == 607){ return "+Trailer"; }
    else if($idveh == 608){ return "+Trailer"; }
    else if($idveh == 609){ return "Boxville"; }
    else if($idveh == 610){ return "+Trailer"; }
    else if($idveh == 611){ return "+Trailer"; }
    else { return "Unknow"; }
  }
?>

<div class="td-gr">
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/buscar22.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
<font size="2px">Sistema de búsqueda de vehículos
</div>
<div class="central-td2" style="padding: 10px;">
<form method="post">
<table width="300" align="center">
<tbody><tr>
<td align="center"><hr><input type="text" name="patente" id="patente" placeholder="Patente" style="text-align:center"></td>
</tr>
<tr>
<td align="center"><hr><input type="submit" name="submit" value="Buscar" class="boton-entrar"></td>
</tr>
</tbody></table>
</form>
</div>
</div>

<?php 

if(isset($_POST['submit'])) 
{
	echo '<hr>';
	$patente = $_POST['patente'];

	$Contador = 0;
	
	$sql = $con->prepare("SELECT Username FROM usuarios WHERE 1Patente = :patente");
	$sql->bindParam(':patente', $patente, PDO::PARAM_STR);
	$sql->execute();
	
	$num_rows = $sql->rowCount();

	if($num_rows > 0)
	{
		$Contador = 1;
	}
	
	$sql2 = $con->prepare("SELECT Username FROM usuarios WHERE 2Patente = :patente");
	$sql2->bindParam(':patente', $patente, PDO::PARAM_STR);
	$sql2->execute();
	
	$num_rows2 = $sql2->rowCount();
	
	if($num_rows2 > 0)
	{
		$Contador = 2;
	}
	
	$sql3 = $con->prepare("SELECT Username FROM usuarios WHERE 3Patente = :patente");
	$sql3->bindParam(':patente', $patente, PDO::PARAM_STR);
	$sql3->execute();
	
	$num_rows3 = $sql3->rowCount();
	
	if($num_rows3 > 0)
	{
		$Contador = 3;
	}

	$sql4 = $con->prepare("SELECT Username FROM usuarios WHERE 4Patente = :patente");
	$sql4->bindParam(':patente', $patente, PDO::PARAM_STR);
	$sql4->execute();
	
	$num_rows4 = $sql4->rowCount();
	
	if($num_rows4 > 0)
	{
		$Contador = 4;
	}

	if($Contador == 0)
	{
		echo '<hr><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#FF0000" style="margin-top:10px;margin-bottom:10px"><tbody><tr><td colspan="2" bgcolor="#FF0000" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Vehículo no encontrada.</strong></td></tr></tbody></table>';
	}
	else
	{
		if($Contador == 1)
		{			
			$query2 = $con->prepare("SELECT * FROM usuarios WHERE 1Patente = :placa");
		}
		if($Contador == 2)
		{
			$query2 = $con->prepare("SELECT * FROM usuarios WHERE 2Patente = :placa");
		}
		if($Contador == 3)
		{
			$query2 = $con->prepare("SELECT * FROM usuarios WHERE 3Patente = :placa");
		}
		if($Contador == 4)
		{
			$query2 = $con->prepare("SELECT * FROM usuarios WHERE 4Patente = :placa");
		}
		
		$query2->bindParam(':placa', $_POST[patente], PDO::PARAM_STR);
		$query2->execute();
		
		$busqueda = $query2->fetch(PDO::FETCH_ASSOC);

?>

<div class="td-gr">
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/persona24.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;"><font size="2px">Resultados de la búsqueda</div>

<div class="central-td2" style="padding: 10px;">
<form method="POST" action="">
<table width="700" align="center" bgcolor="#062c54" cellspacing="1" cellpadding="5">
<tbody><tr>
<td colspan="3" class="min-tit"><font size="2px">Vehiculo 
<?php  
if($Contador == 1) { echo $busqueda['1Patente']; }
if($Contador == 2) { echo $busqueda['2Patente']; }
if($Contador == 3) { echo $busqueda['3Patente']; }
if($Contador == 4) { echo $busqueda['4Patente']; }
?>
</td>
</tr>
<tr>
<td bgcolor="#00162d" rowspan="8" width="300">
<center><img src="./imagenes/Vehiculos/Vehicle_
<?php  
if($Contador == 1) { echo $busqueda['Modelo']; }
if($Contador == 2) { echo $busqueda['Modelo2']; }
if($Contador == 3) { echo $busqueda['Modelo3']; }
if($Contador == 4) { echo $busqueda['Modelo4']; }
?>.jpg" ></center></td>
<td bgcolor="#00162d" width="200"><font size="2px">Propietario:</td>
<td bgcolor="#00162d"><i><font size="2px">
<?php echo $busqueda['Username']; ?>
</i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Color principal:</td>
<?php  
if($Contador == 1) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['Color1'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 2) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['2Color1'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 3) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['3Color1'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 4) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['4Color1'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
?>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Color secundario:</td>
<?php  
if($Contador == 1) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['Color2'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 2) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['2Color2'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 3) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['3Color2'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
if($Contador == 4) { echo '<td bgcolor="#00162d"><i><div style="border:1px solid #999999; background-color:#'.$coloresveh[''.$busqueda['4Color2'].''].';float:left; width:74px; height:15px;margin-top:2px;"></div></i></td> '; }
?></tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Modelo:</td>
<td bgcolor="#00162d"><i><font size="2px">
<?php  
if($Contador == 1) { echo GetVehicleName($busqueda['Modelo']); }
if($Contador == 2) { echo GetVehicleName($busqueda['Modelo2']); }
if($Contador == 3) { echo GetVehicleName($busqueda['Modelo3']); }
if($Contador == 4) { echo GetVehicleName($busqueda['Modelo4']); }
?>

</i></td>
</tr>
</tbody></table>
</form>
</div>

</div>

<?php 
	}
} 
?>
</div>
</td></tr>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>