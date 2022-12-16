<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; try { $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $name = $datos['Username']; $money = $datos['Money']; $score = $datos['Nivel']; $faccion = $row['Faccion']; 
		$CodigoKEY = $datos['CodigoKEY'];
		$CPendiente = $datos['CPendiente'];
		$nuevocorreo = $datos['nuevocorreo'];
		$FinDiaC = $datos['FinDiaC'];
		$FinMesC = $datos['FinMesC'];
		$FinAnoC = $datos['FinAnoC'];
		$formatname = ucwords($name, '_');
		$conexion = $datos['Conexion'];
		$DiaECorreo = $datos['DiaECorreo'];
		$MesECorreo = $datos['MesECorreo'];
		$MinutosECorreo = $datos['MinutosECorreo'];
		$AnoECorreo = $datos['AnoECorreo'];
		$email = $datos['Email'];
$fz = $datos['Moneda']; $ropa = $datos['Skin']; $platabanco = $datos['Banco']; $faccion = $datos['Faccion']; $razon = $datos['razon']; $ban = $datos['Baneado']; $Conexion = $datos['Conexion']; } } catch(PDOException $e) { echo 'Error: ' . $e->getMessage(); } } else echo "<script>window.location='ingresar.php';</script>"; $dinerototal = $money+$platabanco; if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } function ObtenerCombustibleVeh($i) { switch($i) { case 578: $combus = 230; return $combus; default: $combus = 100; return $combus; } } function ObtenerMaltero($i) { switch($i) { case 403: $maletero = 8; return $maletero; case 413: $maletero = 8; return $maletero; case 414: $maletero = 8; return $maletero; case 431: $maletero = 8; return $maletero; case 437: $maletero = 8; return $maletero; case 440: $maletero = 8; return $maletero; case 443: $maletero = 8; return $maletero; case 459: $maletero = 8; return $maletero; case 482: $maletero = 8; return $maletero; case 499: $maletero = 8; return $maletero; case 514: $maletero = 8; return $maletero; case 515: $maletero = 8; return $maletero; case 578: $maletero = 8; return $maletero; case 400: $maletero = 6; return $maletero; case 404: $maletero = 6; return $maletero; case 418: $maletero = 6; return $maletero; case 422: $maletero = 6; return $maletero; case 470: $maletero = 6; return $maletero; case 478: $maletero = 6; return $maletero; case 489: $maletero = 6; return $maletero; case 495: $maletero = 6; return $maletero; case 505: $maletero = 6; return $maletero; case 543: $maletero = 6; return $maletero; case 554: $maletero = 6; return $maletero; case 579: $maletero = 6; return $maletero; case 605: $maletero = 6; return $maletero; case 448: $maletero = 0; return $maletero; case 461: $maletero = 0; return $maletero; case 462: $maletero = 0; return $maletero; case 463: $maletero = 0; return $maletero; case 468: $maletero = 0; return $maletero; case 471: $maletero = 0; return $maletero; case 521: $maletero = 0; return $maletero; case 522: $maletero = 0; return $maletero; case 581: $maletero = 0; return $maletero; case 586: $maletero = 0; return $maletero; case 481: $maletero = 0; return $maletero; case 509: $maletero = 0; return $maletero; case 510: $maletero = 0; return $maletero; default: $maletero = 4; return $maletero; } } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Comprar veh&iacuteculos</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<style>
.ft1{width:300px;float:left;padding:10px;margin-left:35px;}
.ft2{width:300px;float:left;padding:10px;}
.ft1 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}
.ft2 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}
.datos2{background-color:#FFFFFF;padding:5px;float:left;width:250px;border-left:solid 1px #CCCCCC;border-right:solid 1px #CCCCCC;border-bottom:solid 1px #CCCCCC;}
.datos2 span{text-align:right;float:right;font-weight:bold}
.ft1 a{background-image:url(./imagenes/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}
.ft2 a{background-image:url(./imagenes/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}
</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tbody><tr>

<td width="997">

<script async="" src="//www.google-analytics.com/analytics.js"></script><script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-16687198-9', 'auto');

  ga('send', 'pageview');



</script>

<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>

<div class="header-s3-2">
<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php
echo $serverIP;
?><?php
if ($activar_pt == 1) {
?>:<?php
    echo $serverPort;
?><?php
}
?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php
echo $serverIP;
?><?php
if ($activar_pt == 1) {
?>:<?php
    echo $serverPort;
?><?php
}
?></a></b>

</div>
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>

<div id="menu-superior">                             
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>

<div class="invitaciones-pendientes">
<?php include_once('./invitaciones/invitacion.php'); ?> 
</div>

</div>

<div id="contenido">

<?php if($ban == 1):
    echo '
	<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</font"></strong></td></tr>
</tbody>
</table>
</div>
	
	<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr>
<td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2.6px">Tu cuenta ha sido baneada por <strong>';?><?php echo $razon;?><?php echo '</strong>  el <strong>';?><?php echo $conexion;?><?php echo '</strong>.</font></td>
</tr>
</tbody>
</table>';
endif;
if($piezas_stats == 23)
{
	echo '<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="green" align="center">
<tbody>
<tr bgcolor="green"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</font"></strong></td></tr>
</tbody>
</table>
</div>
	
	<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="green" align="center">
<tbody>
<tr>
<td valign="middle" bgcolor="green" align="left" colspan="1" style="color:white"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2.6px"><strong>Haz click <a href="./recibir_piezas.php">aquí</a> para recibir tus 500 piezas de arma.</strong></font></td>
</tr>
</tbody>
</table>';
}
if($adm >= 1)
{
	echo '<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
</div>
	
	<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr>
<td valign="middle" bgcolor="SKY BLUE" align="left" colspan="1" style="color:white"><img src="./imagenes/iconos/vz.png" align="absmiddle"><font size="2.6px">Te has logueado como ';?><?php if($adm== 1){echo"Ayudante";} if($adm== 2){echo"Moderador del canal de dudas";} if($adm== 3){echo"Moderador del juego";} if($adm== 4){echo"Moderador";} if($adm== 5){echo"Administrador";} if($adm== 6){echo"ADM";} if($adm> 6){echo"Rango desconocido";}?><?php echo '</strong>.</font></td>
</tr>
</tbody>
</table>';
}
if($EstadoKEY == 0 & $CPendiente == 0)
{
	echo '
	<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</strong></td></tr>
</tbody>
</table>
</div>

<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">

<tbody>

<tr class="alerta-roja">
<td bgcolor="#FFFFCC" valign="middle" align="left" colspan="2">
<img src="/imagenes/alerta16.png" align="absmiddle"><font size=2> Tu direcci&oacute;n de correo <strong> '.$email.' </strong> no ha sido verificada todavía. (<a href="/enviar-verificacion.php">Enviar email de verificaci&oacute;n</a> / <a href="/cambiar-correo.php" title="Cambiar direcci&oacute;n de correo.">Cambiar direcci&oacute;n de correo</a>)
</td>
</tr>
</font>
</tbody>

</table>';
}
if($CPendiente == 1)
{
	echo '
	<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</strong></td></tr>
</tbody>
</table>
</div>

<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">

<tbody>

<td valign="middle" bgcolor="#FFFFCC" align="left" colspan="2"><img src="/imagenes/alerta16.png" align="absmiddle"><font size="2"> La dirección de correo electrónico de su cuenta se cambia, para <strong>'.$nuevocorreo.'</strong> el dia '.$FinDiaC.'/'.$FinMesC.'/'.$FinAnoC.' - <a href="/ccc.php?c=960610bfe733ca3888de20d3957de080" title="Cancelar cambio de correo electrónico."><strong>Cancelar cambio</strong></font></a></td>
</tr>
</font>
</tbody>

</table>';
}
?>

<div id="contenido-izquierdo">



<div class="td-gr">
<div class="icono-td"><img src="imagenes/casa.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Listado completo de veh&iacute;culos a la venta</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_492.gif"/>
</div>
<div class="datos2"><font size="2px">Nombre: <span>Greenwood</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(492);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(492);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>135 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=492" title="Comprar Greenwood">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_515.gif"/>
</div>
<div class="datos2">Nombre: <span>Roadtrain</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(515);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(515);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>137 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=515" title="Comprar Roadtrain">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_516.gif"/>
</div>
<div class="datos2">Nombre: <span>Nebula</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(516);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(516);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=516" title="Comprar Nebula">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_518.gif"/>
</div>
<div class="datos2">Nombre: <span>Buccaneer</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(519);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(518);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>158 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=518" title="Comprar Buccaneer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_521.gif"/>
</div>
<div class="datos2">Nombre: <span>FCR-900</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(521);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(521);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>155 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=521" title="Comprar FCR-900">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_522.gif"/>
</div>
<div class="datos2">Nombre: <span>NRG-500</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(522);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(522);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>160 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=522" title="Comprar NRG-500">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_524.gif"/>
</div>
<div class="datos2">Nombre: <span>Cement Truck</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(524);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(524);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>125 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=524" title="Comprar Cement Truck">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_526.gif"/>
</div>
<div class="datos2">Nombre: <span>Fortune</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(526);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(526);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=526" title="Comprar Fortune">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_527.gif"/>
</div>
<div class="datos2">Nombre: <span>Cadrona</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(527);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(527);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=527" title="Comprar Cadrona">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_514.gif"/>
</div>
<div class="datos2">Nombre: <span>Tanker</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(514);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(514);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>116 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=514" title="Comprar Tanker">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_510.gif"/>
</div>
<div class="datos2">Nombre: <span>Mountain Bike</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(510);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(510);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>0 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=510" title="Comprar Mountain Bike">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_509.gif"/>
</div>
<div class="datos2">Nombre: <span>Bike</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(509);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(509);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>0 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=509" title="Comprar Bike">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_494.gif"/>
</div>
<div class="datos2">Nombre: <span>Hotring</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(494);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(494);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>206 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=494" title="Comprar Hotring">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_495.gif"/>
</div>
<div class="datos2">Nombre: <span>Sandking</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(495);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(495);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>169 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=495" title="Comprar Sandking">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_499.gif"/>
</div>
<div class="datos2">Nombre: <span>Benson</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(499);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(499);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>118 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=499" title="Comprar Benson">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_502.gif"/>
</div>
<div class="datos2">Nombre: <span>Hotring Racer A</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(502);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(502);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>206 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=502" title="Comprar Hotring Racer A">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_503.gif"/>
</div>
<div class="datos2">Nombre: <span>Hotring Racer B</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(503);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(503);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>206 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=503" title="Comprar Hotring Racer B">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_504.gif"/>
</div>
<div class="datos2">Nombre: <span>Bloodring Banger</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(504);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(504);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>166 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=504" title="Comprar Bloodring Banger">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_507.gif"/>
</div>
<div class="datos2">Nombre: <span>Elegant</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(507);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(507);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>159 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=507" title="Comprar Elegant">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_508.gif"/>
</div>
<div class="datos2">Nombre: <span>Journey</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(508);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(508);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>103 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=508" title="Comprar Journey">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_529.gif"/>
</div>
<div class="datos2">Nombre: <span>Willard</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(529);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(529);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=529" title="Comprar Willard">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_540.gif"/>
</div>
<div class="datos2">Nombre: <span>Vincent</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(540);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(540);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=540" title="Comprar Vincent">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_571.gif"/>
</div>
<div class="datos2">Nombre: <span>Kart</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(571);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(571);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>90 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=571" title="Comprar Kart">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_575.gif"/>
</div>
<div class="datos2">Nombre: <span>Broadway</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(575);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(575);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=575" title="Comprar Broadway">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_576.gif"/>
</div>
<div class="datos2">Nombre: <span>Tornado</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(576);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(576);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=576" title="Comprar Tornado">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_581.gif"/>
</div>
<div class="datos2">Nombre: <span>BF-400</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(581);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(581);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>146 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=581" title="Comprar BF-400">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_585.gif"/>
</div>
<div class="datos2">Nombre: <span>Emperor</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(585);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(585);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>147 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=585" title="Comprar Emperor">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_586.gif"/>
</div>
<div class="datos2">Nombre: <span>Wayfarer</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(586);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(586);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>138 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">25<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=586" title="Comprar Wayfarer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_588.gif"/>
</div>
<div class="datos2">Nombre: <span>Mobile Hotdog</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(588);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(588);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>103 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=588" title="Comprar Mobile Hotdog">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_600.gif"/>
</div>
<div class="datos2">Nombre: <span>Picador</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(600);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(600);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>145 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=600" title="Comprar Picador">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_568.gif"/>
</div>
<div class="datos2">Nombre: <span>Bandito</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(568);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(568);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>141 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=568" title="Comprar Bandito">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_562.gif"/>
</div>
<div class="datos2">Nombre: <span>Elegy</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(562);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(562);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>171 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=562" title="Comprar Elegy">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_559.gif"/>
</div>
<div class="datos2">Nombre: <span>Jester</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(559);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(559);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>171 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=559" title="Comprar Jester">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_541.gif"/>
</div>
<div class="datos2">Nombre: <span>Bullet</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(541);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(541);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>195 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=541" title="Comprar Bullet">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_543.gif"/>
</div>
<div class="datos2">Nombre: <span>Sadler</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(543);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(543);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>145 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=543" title="Comprar Sadler">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_546.gif"/>
</div>
<div class="datos2">Nombre: <span>Intruder</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(546);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(546);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=546" title="Comprar Intruder">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_547.gif"/>
</div>
<div class="datos2">Nombre: <span>Primo</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(547);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(547);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>137 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=547" title="Comprar Primo">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_549.gif"/>
</div>
<div class="datos2">Nombre: <span>Tampa</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(549);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(549);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>147 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=549" title="Comprar Tampa">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_550.gif"/>
</div>
<div class="datos2">Nombre: <span>Sunrise</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(550);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(550);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>139 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=550" title="Comprar Sunrise">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_555.gif"/>
</div>
<div class="datos2">Nombre: <span>Windsor</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(555);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(555);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>152 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=555" title="Comprar Windsor">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_558.gif"/>
</div>
<div class="datos2">Nombre: <span>Uranus</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(558);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(558);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>150 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=558" title="Comprar Uranus">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_605.gif"/>
</div>
<div class="datos2">Nombre: <span>Sadler</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(605);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(605);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>145 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">5<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=605" title="Comprar Sadler">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_401.gif"/>
</div>
<div class="datos2">Nombre: <span>Bravura</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(401);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(401);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>141 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=401" title="Comprar Bravura">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_423.gif"/>
</div>
<div class="datos2">Nombre: <span>Mr. Whoopee</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(423);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(423);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>95 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=423" title="Comprar Mr. Whoopee">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_424.gif"/>
</div>
<div class="datos2">Nombre: <span>BF. Injection</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(424);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(424);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>130 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=424" title="Comprar BF. Injection">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_426.gif"/>
</div>
<div class="datos2">Nombre: <span>Premier</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(426);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(426);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>166 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=426" title="Comprar Premier">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_431.gif"/>
</div>
<div class="datos2">Nombre: <span>Bus</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(431);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(431);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>125 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=431" title="Comprar Bus">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_436.gif"/>
</div>
<div class="datos2">Nombre: <span>Previon</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(436);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(436);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=436" title="Comprar Previon">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_437.gif"/>
</div>
<div class="datos2">Nombre: <span>Coach</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(437);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(437);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=437" title="Comprar Coach">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_438.gif"/>
</div>
<div class="datos2">Nombre: <span>Cabbie</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(438);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(438);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>137 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=438" title="Comprar Cabbie">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_439.gif"/>
</div>
<div class="datos2">Nombre: <span>Stallion</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(439);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(439);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>162 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=439" title="Comprar Stallion">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_440.gif"/>
</div>
<div class="datos2">Nombre: <span>Rumpo</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(440);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(440);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>131 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=440" title="Comprar Rumpo">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_422.gif"/>
</div>
<div class="datos2">Nombre: <span>Bobcat</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(422);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(422);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>134 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=422" title="Comprar Bobcat">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_421.gif"/>
</div>
<div class="datos2">Nombre: <span>Washington</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(421);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(421);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>147 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=421" title="Comprar Washington">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_402.gif"/>
</div>
<div class="datos2">Nombre: <span>Buffalo</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(402);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(402);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>179 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=402" title="Comprar Buffalo">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_403.gif"/>
</div>
<div class="datos2">Nombre: <span>Linerunner</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(403);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(403);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>106 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=403" title="Comprar Linerunner">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_405.gif"/>
</div>
<div class="datos2">Nombre: <span>Sentinel</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(405);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(405);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>157 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=405" title="Comprar Sentinel">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_408.gif"/>
</div>
<div class="datos2">Nombre: <span>Trashmaster</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(408);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(408);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>96 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=408" title="Comprar Trashmaster">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_410.gif"/>
</div>
<div class="datos2">Nombre: <span>Manana</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(410);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(410);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>124 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=410" title="Comprar Manana">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_413.gif"/>
</div>
<div class="datos2">Nombre: <span>Pony</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(413);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(413);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>106 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=413" title="Comprar Pony">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_418.gif"/>
</div>
<div class="datos2">Nombre: <span>Moonbeam</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(418);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(418);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>111 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=418" title="Comprar Moonbeam">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_419.gif"/>
</div>
<div class="datos2">Nombre: <span>Esperanto</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(419);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(419);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=419" title="Comprar Esperanto">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_420.gif"/>
</div>
<div class="datos2">Nombre: <span>Taxi</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(420);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(420);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>139 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=420" title="Comprar Taxi">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_442.gif"/>
</div>
<div class="datos2">Nombre: <span>Romero</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(442);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(442);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>134 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=442" title="Comprar Romero">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_443.gif"/>
</div>
<div class="datos2">Nombre: <span>Packer</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(443);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(443);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>121 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=443" title="Comprar Packer">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_462.gif"/>
</div>
<div class="datos2">Nombre: <span>Faggio</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(462);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(462);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>108 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">25<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=462" title="Comprar Faggio">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_467.gif"/>
</div>
<div class="datos2">Nombre: <span>Oceanic</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(467);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(467);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>135 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=467" title="Comprar Oceanic">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_468.gif"/>
</div>
<div class="datos2">Nombre: <span>Sanchez</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(468);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(468);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>138 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=468" title="Comprar Sanchez">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_470.gif"/>
</div>
<div class="datos2">Nombre: <span>Patriot</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(470);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(470);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=470" title="Comprar Patriot">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_471.gif"/>
</div>
<div class="datos2">Nombre: <span>Quad</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(471);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(471);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>106 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=471" title="Comprar Quad">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_474.gif"/>
</div>
<div class="datos2">Nombre: <span>Hermes</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(474);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(474);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>143 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=474" title="Comprar Hermes">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_481.gif"/>
</div>
<div class="datos2">Nombre: <span>BMX</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(481);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(481);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>0 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=481" title="Comprar BMX">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_483.gif"/>
</div>
<div class="datos2">Nombre: <span>Camper</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(483);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(483);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>118 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=483" title="Comprar Camper">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_461.gif"/>
</div>
<div class="datos2">Nombre: <span>PCJ-600</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(461);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(461);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>153 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=461" title="Comprar PCJ-600">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_459.gif"/>
</div>
<div class="datos2">Nombre: <span>Berkleys RC Van</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(459);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(459);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>131 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=459" title="Comprar Berkleys RC Van">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_434.gif"/>
</div>
<div class="datos2">Nombre: <span>Hotknife</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(434);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(434);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>160 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=434" title="Comprar Hotknife">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_455.gif"/>
</div>
<div class="datos2">Nombre: <span>Flatbed</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(455);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(455);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=455" title="Comprar Flatbed">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_457.gif"/>
</div>
<div class="datos2">Nombre: <span>Caddy</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(457);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(457);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>91 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=457" title="Comprar Caddy">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_458.gif"/>
</div>
<div class="datos2">Nombre: <span>Solair</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(458);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(458);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>151 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=458" title="Comprar Solair">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_453.gif"/>
</div>
<div class="datos2">Nombre: <span>Reefer</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(453);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(453);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>54 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=453" title="Comprar Reefer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_595.gif"/>
</div>
<div class="datos2">Nombre: <span>Launch</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(595);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(595);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>95 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=595" title="Comprar Launch">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_446.gif"/>
</div>
<div class="datos2">Nombre: <span>Squalo</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(446);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(446);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>205 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=446" title="Comprar Squalo">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_493.gif"/>
</div>
<div class="datos2">Nombre: <span>Jetmax</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(493);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(493);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>150 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=493" title="Comprar Jetmax">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_452.gif"/>
</div>
<div class="datos2">Nombre: <span>Speeder</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(452);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(452);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>141 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=452" title="Comprar Speeder">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_473.gif"/>
</div>
<div class="datos2">Nombre: <span>Dinghy</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(473);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(473);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>102 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=473" title="Comprar Dinghy">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_454.gif"/>
</div>
<div class="datos2">Nombre: <span>Tropic</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(454);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(454);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>125 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=454" title="Comprar Tropic">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos-miniatura/Vehicle_484.gif"/>
</div>
<div class="datos2">Nombre: <span>Marquis</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(484);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(484);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>57 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=484" title="Comprar Marquis">Comprar</a></span>
</div>
</div>
<!--<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_593.gif"/>
</div>
<div class="datos2">Nombre: <span>Dodo</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(593);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(593);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>220 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">80<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=593" title="Comprar Dodo">Comprar</a></span>
</div>
</div>-->
<div class="ft2"> <div>
<img src="imagenes/autos-miniatura/Vehicle_487.gif"/>
</div>
<div class="datos2">Nombre: <span>Maverick</span>
<div class="hr2"></div>
Capacidad de combustible: <span><?php echo ObtenerCombustibleVeh(487);?> Litros</span>
<div class="hr2"></div>
Espacio en el ba&uacute;l: <span><?php echo ObtenerMaltero(487);?> lugares</span>
<div class="hr2"></div>
Velocidad m&aacute;xima: <span>181 KM/h</span>
<div class="hr2"></div>
Precio: <span style="color:#339900"><font color="orange">110<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=487" title="Comprar Maverick">Comprar</a></span>
</div>
</div>


</div>

</div>

<div id="menu-derecho"><style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>

<div class="td">

<div class="icono-td">

<img src="./imagenes/dinero_p.png">

</div>

<div class="titulo-td">

Tu cuenta

</div>

</div>

<div class="bloque-monedas">

<div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px"><?php echo number_format($fz, 0, '', '.');?> <?php echo $Diminutivo?></div>

<div class="hr2"></div>

<div style="float:left; margin-left:170px; font-size:18px; color:#003366;">$<?php echo number_format($dinerototal, 0, '', '.');?></div>

<div class="hr2"></div>

<div style="float:left; margin-left:170px; font-size:18px; color:#003366;"><?php echo $score;?></div>

<div class="hr2"></div>

</div>

<hr>

<a href="comprar-vz.php"><center><img src="imagenes/comprar-vz.png" title="Comprar VZ" border="0"></center></a>

<hr>

<div class="td-menu">

<div class="icono-td">

<img src="./imagenes/casa.png">

</div>

<div class="titulo-td">

Tus opciones

</div>

</div>

<div class="bloque-menu">
<a href="cuenta.php" class="panel-todo" title="Panel principal con informaci&oacute;n de tu cuenta">&raquo; Panel principal</a>
<a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo; Comprar ropa</a>
<a href="comprar-vehiculos.php" class="actual1" title="Compra veh&iacute;culos especiales">&raquo; Comprar veh&iacute;culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="panel-todo" title="<?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;n">&raquo; Salir</a>
</div>
<hr>
<span style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;" class="rounded-img"><a href="invitar-amigo.php" title="Click aqu&iacute; para m&aacute;s informaci&oacute;n"><span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;"><img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0; border:0"></span></a></span>

<?php if($activar_jc == 1) {?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/diario.png"/></div>
<div class="titulo-td">
Jugadores Conectados
</div>
</div>
<div class="bloque">
<span id="total" style="font-size:35px; color:#050;text-shadow: 0 1px 0 #FFFFFF; margin-left:35%"><center><?php if(!empty($aInformation)){echo $aInformation['Players'];}?></center></span>
</div>
<?php } ?>


<?php if($activar_es == 1) {?>
<hr>
<div class="td">
<div class="icono-td"><img src="./imagenes/estadisticas.png"/></div>
<div class="titulo-td">
Estado de los servidores
</div>
</div>
<div class="bloque">
<span style="font-weight:bold;font-size:12px; color:#003366">Roleplay S1:&nbsp;&nbsp;&nbsp;</span> <span style="font-size:12px; font-weight:bold; color:#305B79"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></span><span style="float:right; width:68px"><img src="./imagenes/en-linea.png" align="absmiddle" title="En linea"><span id="rols4" style="color:#030"><font size="2px"><?php if(!empty($aInformation)){echo $aInformation['Players'];}?>/<?php if(!empty($aInformation)){echo $aInformation['MaxPlayers'];}?></span></span>
</div>
<?php } ?>
<!---->

<?php if($activar_fb == 1) {?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/facebook.png"></div>
<div class="titulo-td"><?php echo strtoupper($Diminutivo)?>:RP en Facebook</div>
</div>

<div class="bloque">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php echo $FacebookURL?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:68px;" allowTransparency="true">
</iframe>

</div>
<?php } ?>
<!---->

<?php if($activar_tw == 1) {?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/twitter.png" height="16" width="16"></div>
<div class="titulo-td"><?php echo strtoupper($Diminutivo)?>:RP en Twitter</div>
</div>
<div class="bloque">
<a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php echo $TwitterID?>">Twitter <?php echo $NombreServidor?></a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</div>
<?php } ?>
<!---->

<hr/>
<div class="td">
<div class="icono-td">
<img src="./imagenes/auto2.png"/>
</div>
<div class="titulo-td">
Torneo de carreras LV (Posiciones)
</div>
</div>
<div class="bloque">
<?php $carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 5"); $carrera->execute(); $counter = 0; if($row = $carrera->fetch(PDO::FETCH_ASSOC)) { do { $counter++; echo "".$counter.". ".$row["Username"]."<span style='float:right; font-size:11px;'>".$row["PuntosCarrera"]." Puntos</span><div class='hr'></div>"; } while($row = $carrera->fetch(PDO::FETCH_ASSOC)); } ?>
<center><a href="./torneo-carreras.php">Ver tabla de posiciones</a></center>
</div>

<!-- -->
</div>
<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; 2015 - 2018</div> </td>
</tr>
</table>
</body>
<div id="lean_overlay"></div>
</html>