<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = strtolower($_SESSION['User']); $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($row = $stmt->fetch()) { $name = $row['Username']; $money = $row['Money']; $score = $row['Nivel']; $fz = $row['Moneda']; $ropa = $row['Skin']; 
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
$platabanco = $row['Banco']; $razon = $row['razon']; $ban = $row['Baneado']; $Conexion = $row['Conexion']; $faccionjugador = $row['Faccion']; $rangojugador = $row['Rango']; } $dinerototal = $money+$platabanco; } else echo "<script>window.location='ingresar.php';</script>"; ?>

<?php  if(isset($_SESSION['User'])) { $User = strtolower($_SESSION['User']); $stmt2 = $con->prepare("SELECT * FROM facciones WHERE id = :faccion"); $stmt2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT); $stmt2->execute(); while($row2 = $stmt2->fetch()) { $idfaccion = $row2['id']; $nombrefaccion = $row2['Nombre']; $integrantes = $row2['Integrantes']; $Lider = $row2['Lider']; $Rango1 = $row2['Rango1']; $Rango2 = $row2['Rango2']; $Rango3 = $row2['Rango3']; $Rango4 = $row2['Rango4']; $Rango5 = $row2['Rango5']; $Rango6 = $row2['Rango6']; $Rango1Inv = $row2['Rango1Inv']; $Rango1Exp = $row2['Rango1Exp']; $Rango1Edi = $row2['Rango1Edi']; $Rango2Inv = $row2['Rango2Inv']; $Rango2Exp = $row2['Rango2Exp']; $Rango2Edi = $row2['Rango2Edi']; $Rango3Inv = $row2['Rango3Inv']; $Rango3Exp = $row2['Rango3Exp']; $Rango3Edi = $row2['Rango3Edi']; $Rango4Inv = $row2['Rango4Inv']; $Rango4Exp = $row2['Rango4Exp']; $Rango4Edi = $row2['Rango4Edi']; $Rango5Inv = $row2['Rango5Inv']; $Rango5Exp = $row2['Rango5Exp']; $Rango5Edi = $row2['Rango5Edi']; $fecha = $row2['fecha']; $territorio = $row2['territorio']; $tipodebanda = $row2['tipobanda']; } } if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } if($faccionjugador == 0) { echo "<script>window.location='crear-banda.php';</script>"; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $NombreServidor?> Roleplay - Tu banda</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> <link rel="shortcut icon" href="favicon.ico" />

<script src="./js/jquery-2.1.3.min.js" type="text/javascript"></script>


<script src="./js/jquery.tools.min.js" type="text/javascript"></script>


<script type="text/javascript" src="./js/scripts.js"></script>

<script src="./js/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-latest.js"></script>

<style>DIV#loader.loading{background:url(./imagenes/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
<style type="text/css">
h3{margin:0px;padding:0px;}.CajaRelacionados{position:absolute;left:130px;margin:10px 0px 0px 0px;width:200px;background-color:#FFFFFF;-moz-border-radius:7px;-webkit-border-radius:7px;border:2px solid #F2F2F2;color:#000;}.LastaRelacionados{margin:0px;padding:0px;}.LastaRelacionados li{list-style:none;margin:0px 0px 3px 0px;padding:3px;cursor:pointer;}.LastaRelacionados li:hover{background-color:#EBEBEB;}DIV#loader.loading{background:url(/imagenes/spinner.gif) no-repeat center center;}.CajaRangos{position:absolute;margin:7px 0px 0px 0px;width:200px;background-color:#FFFFFF;background-image:url(imagenes/menu-flotante-fondo.png);-moz-border-radius:7px;-webkit-border-radius:7px;border:1px solid #D6D6D6;color:#000;}.ListaRelacionados li:hover{background-position:0 -20px;color:#0099FF;}.ListaRelacionados{margin:0px;padding:0px;text-shadow:0 1px 0 #FFFFFF;}.ListaRelacionados li{color:#003366;list-style:none;height:18px;cursor:pointer;background-image:url(imagenes/menu-flotante.png);overflow-x:hidden;overflow-y:hidden;text-align:left;padding-left:17px;padding-top:2px;}.ListaRelacionados ul{margin:5px 0px 5px 0px;border-bottom:solid 1px #CCCCCC;padding:0px;}#solucioncuadro{position:absolute;left:15%;top:30%;display:none;width:700px;height:300px;background-image:url(imagenes/muestraskins.png)}div#solucioncuadro{position:fixed;}
<!--['if gte IE 5.5']><!['if lt IE 7']>
div#solucioncuadro {
left: 15%; top: 30%;
left: expression( ( 0 - solucioncuadro.offsetWidth + ( document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body.clientWidth ) + ( ignoreMe2 = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft ) ) - (document.body.clientWidth/100*25) + 'px' );
top: expression( ( 0 - solucioncuadro.offsetHeight + ( document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight ) + ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ) ) - (document.body.clientHeight/100*40) + 'px' );
}
		<!['endif']><!['endif']-->
</style>
</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tbody><tr>

<td width="997">

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
</font><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="./logout.php" title="Cerrar sesi�n - Salir"><font size="2px;">&raquo; SALIR</font></a>
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

<div class="icono-td">
<img src="imagenes/info.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Informaci&oacute;n de tu banda</div>
<div style="padding:10px; float:left; width:280px; margin-left:22px">
<div style="float:left"><img src="./imagenes/texto.png"/>&nbsp;</div><div><font size="2px">&nbsp;Nombre:<span style="float:right;"><?php echo $nombrefaccion;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/puerta.png"/>&nbsp;</div><div>&nbsp;Territorio:<span style="float:right;"><?php echo $territorio;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/fecha.png"/>&nbsp;</div><div>&nbsp;Fecha de creaci&oacute;n:<span style="float:right;"><?php echo $fecha;?></span></div>
<div class="hr"></div>
<?php  if($rangojugador < 6) { ?>
		<div style="float:left"><img src="/imagenes/abandonar-banda.png"/>&nbsp;</div><div>&nbsp;Abandonar banda:<span style="float:right;"><a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a></span></div>
		<div class="hr"></div>
<?php  } ?>
</div>

<div style="padding:10px; float:left; width:280px; margin-left:22px">
<div style="float:left"><img src="./imagenes/bandera.png"/>&nbsp;</div><div>&nbsp;Tipo de banda:<span style="float:right;"><?php echo $tipodebanda;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/estrella.png"/>&nbsp;</div><div>&nbsp;Lider:<span style="float:right;"><?php echo $Lider;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/personas.png"/>&nbsp;</div><div>&nbsp;Integrantes:<span style="float:right;"><?php echo $integrantes;?></span></div>
<div class="hr"></div>
<?php  $sql3 = $con->prepare("SELECT * FROM `usuarios` WHERE Online = '1' AND Faccion = :idfaccion"); $sql3->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql3->execute(); $mconectados = $sql3->rowCount(); ?>
<div style="float:left"><img src="./imagenes/conectado.png"/>&nbsp;</div><div>&nbsp;Integrantes conectados:<span style="float:right;"><?php echo $mconectados;?></span></div>
<div class="hr"></div>
</div>
</div>

<div class="td-gr">
<div class="icono-td"><img src="imagenes/personas.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Integrantes</div>
<div style="padding:10px">

<!-- Rango 6 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='6'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango6;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF"></td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Rango 5 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='5'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<br/>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango5;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php  if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6) { echo '<a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>'; } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Exp == 1 || $rangojugador == 2 && $Rango2Exp == 1 || $rangojugador == 3 && $Rango3Exp == 1 || $rangojugador == 4 && $Rango4Exp == 1 || $rangojugador == 5 && $Rango5Exp == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { echo '<img src="imagenes/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;'; } } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { ?>
				<img src="imagenes/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php  echo '<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>'; if($rangojugador >= 2) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>'; if($rangojugador >= 3) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>'; if($rangojugador >= 4) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>'; if($rangojugador >= 5) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>'; if($rangojugador >= 6) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>'; } } ?>
</ul>
</div>
</div>
</td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Rango 4 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='4'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango4;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php  if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6) { echo '<a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>'; } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Exp == 1 || $rangojugador == 2 && $Rango2Exp == 1 || $rangojugador == 3 && $Rango3Exp == 1 || $rangojugador == 4 && $Rango4Exp == 1 || $rangojugador == 5 && $Rango5Exp == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { echo '<img src="imagenes/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;'; } } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { ?>
				<img src="imagenes/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
				<?php  echo '<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>'; if($rangojugador >= 2) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>'; if($rangojugador >= 3) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>'; if($rangojugador >= 4) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>'; if($rangojugador >= 5) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>'; if($rangojugador >= 6) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>'; } } ?>
</ul>
</div>
</div>
</td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Rango 3 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='3'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango3;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php  if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6) { echo '<a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>'; } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Exp == 1 || $rangojugador == 2 && $Rango2Exp == 1 || $rangojugador == 3 && $Rango3Exp == 1 || $rangojugador == 4 && $Rango4Exp == 1 || $rangojugador == 5 && $Rango5Exp == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { echo '<img src="imagenes/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;'; } } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { ?>
				<img src="imagenes/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php  echo '<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>'; if($rangojugador >= 2) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>'; if($rangojugador >= 3) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>'; if($rangojugador >= 4) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>'; if($rangojugador >= 5) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>'; if($rangojugador >= 6) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>'; } } ?>
</ul>
</div>
</div>
</td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Rango 2 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='2'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango2;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">

<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>

<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php  if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6) { echo '<a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>'; } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Exp == 1 || $rangojugador == 2 && $Rango2Exp == 1 || $rangojugador == 3 && $Rango3Exp == 1 || $rangojugador == 4 && $Rango4Exp == 1 || $rangojugador == 5 && $Rango5Exp == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { echo '<img src="imagenes/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;'; } } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { ?>
				<img src="imagenes/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
				<?php  echo '<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>'; if($rangojugador >= 2) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>'; if($rangojugador >= 3) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>'; if($rangojugador >= 4) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>'; if($rangojugador >= 5) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>'; if($rangojugador >= 6) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>'; } } ?>
</ul>
</div>
</div>
</td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Rango 1 -->
<?php $sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='1'"); $sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT); $sql_tt->execute(); $jugadores = $sql_tt->rowCount(); if($jugadores > 0) { ?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango1;?></strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php  while($memberff = $sql_tt->fetch()) { ?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario público." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php  $conectadoss = $memberff['Online']; if($conectadoss == 1) { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php  } else { ?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px"><?php echo $memberff['Conexion']; ?></span></td>
<?php  } ?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php  if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6) { echo '<a href="abandonar-banda.php"><img src="imagenes/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>'; } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Exp == 1 || $rangojugador == 2 && $Rango2Exp == 1 || $rangojugador == 3 && $Rango3Exp == 1 || $rangojugador == 4 && $Rango4Exp == 1 || $rangojugador == 5 && $Rango5Exp == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { echo '<img src="imagenes/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;'; } } if($rangojugador == 6 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 && $faccionjugador == $idfaccion) { if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador) { ?>
				<img src="imagenes/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php  echo '<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>'; if($rangojugador >= 2) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>'; if($rangojugador >= 3) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>'; if($rangojugador >= 4) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>'; if($rangojugador >= 5) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>'; if($rangojugador >= 6) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>'; } } ?>
</ul>
</div>
</div>
</td>
<?php  } ?>
</tr>
</table>
<?php  } ?>

<!-- Invitaciones -->
<div class="hr"></div>
</div>
</div>
<?php if($rangojugador == 6 || $rangojugador == 1 && $Rango1Inv == 1 || $rangojugador == 2 && $Rango2Inv == 1 || $rangojugador == 3 && $Rango3Inv == 1 || $rangojugador == 4 && $Rango4Inv == 1 || $rangojugador == 5 && $Rango5Inv == 1) { ?>
<div class="td-gr">
				<div class="icono-td"><img src="imagenes/usuarios.png"/></div>
				<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Invitar a nuevos integrantes</div>
				<div style="height:40px">
				<div class="text" id="fm1">
				<input type="text" size="26" value="" id="invString" />
				</div>
				<div style="float:left; margin-top:7px" id="fm2">
				<input type="image" value="Crear" src="imagenes/boton-invitar.png" title="Invitar" onclick="Invitar('<?php echo $idfaccion; ?>');"/>
				</div>
				<div id="boxinvitando" style="display:none"><p><font size="3px" color="orange">Invitando...</font></p></div>
				</div>
				<script>
									$("#inputString").keyup(function(event){
										if(event.keyCode == 13){
											Invitar();
										}
									});
								</script>
				<div class="CajaRelacionados" id="Relacionados" style="display: none;">
				<img src="imagenes/flecha-arriba.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow"/>
				<div class="LastaRelacionados" id="autoRelacionadosList"></div>
				</div>
				</div>

<?php } ?>

<?php if($rangojugador == 6) { echo '<div class="td-gr"><div class="icono-td"><img src="imagenes/estrella.png"/></div>
					<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Rangos</div>
					<div style="padding:10px;">
					<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
					 
					<tr class="primertd">
					<td width="233" height="22" valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">&nbsp;Rango</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Invitar</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Expulsar</font></td>
					<td width="163" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Ascender/descender</font></td>
					</tr>

					<tr class="listadointegrantes" id="5">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input id="Cargo5" name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>
					<script>
						$("#inp5").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(5);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar5" onclick="javascript:EditarNombreRango(5);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar5" onclick="javascript:GuardarNombreRango(5);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>'; echo '
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-5" src="imagenes/si.png" /></td>
					</tr>
					
					<tr class="listadointegrantes" id="4">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input id="Cargo4" name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>
					<script>
						$("#inp4").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(4);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar4" onclick="javascript:EditarNombreRango(4);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar4" onclick="javascript:GuardarNombreRango(4);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>'; if($Rango5Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/si.png" onclick="javascript:CambiarValor(1,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/no.png" onclick="javascript:CambiarValor(1,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango5Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/si.png" onclick="javascript:CambiarValor(2,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/no.png" onclick="javascript:CambiarValor(2,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango5Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/si.png" onclick="javascript:CambiarValor(3,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/no.png" onclick="javascript:CambiarValor(3,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="3">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input id="Cargo3" name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>
					<script>
						$("#inp3").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(3);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar3" onclick="javascript:EditarNombreRango(3);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar3" onclick="javascript:GuardarNombreRango(3);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>'; if($Rango4Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/si.png" onclick="javascript:CambiarValor(4,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/no.png" onclick="javascript:CambiarValor(4,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango4Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/si.png" onclick="javascript:CambiarValor(5,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/no.png" onclick="javascript:CambiarValor(5,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango4Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/si.png" onclick="javascript:CambiarValor(6,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/no.png" onclick="javascript:CambiarValor(6,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="2">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input id="Cargo2" name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>
					<script>
						$("#inp2").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(2);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar2" onclick="javascript:EditarNombreRango(2);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar2" onclick="javascript:GuardarNombreRango(2);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>'; if($Rango3Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/si.png" onclick="javascript:CambiarValor(7,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/no.png" onclick="javascript:CambiarValor(7,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango3Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/si.png" onclick="javascript:CambiarValor(8,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/no.png" onclick="javascript:CambiarValor(8,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango3Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/si.png" onclick="javascript:CambiarValor(9,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/no.png" onclick="javascript:CambiarValor(9,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="1">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input id="Cargo1" name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>
					<script>
						$("#inp1").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("1");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar1" onclick="javascript:EditarNombreRango(1);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar1" onclick="javascript:GuardarNombreRango(1);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>'; if($Rango2Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/si.png" onclick="javascript:CambiarValor(10,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/no.png" onclick="javascript:CambiarValor(10,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango2Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/si.png" onclick="javascript:CambiarValor(11,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/no.png" onclick="javascript:CambiarValor(11,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango2Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/si.png" onclick="javascript:CambiarValor(12,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/no.png" onclick="javascript:CambiarValor(12,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="0">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input id="Cargo0" name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>
					<script>
						$("#inp0").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("0");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar0" onclick="javascript:EditarNombreRango(0);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar0" onclick="javascript:GuardarNombreRango(0);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>'; if($Rango1Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/si.png" onclick="javascript:CambiarValor(13,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/no.png" onclick="javascript:CambiarValor(13,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango1Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/si.png" onclick="javascript:CambiarValor(14,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/no.png" onclick="javascript:CambiarValor(14,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } if($Rango1Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/si.png" onclick="javascript:CambiarValor(15,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/no.png" onclick="javascript:CambiarValor(15,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; } echo '</tr>'; echo '</table>
					</div>
					</div>'; } else { echo '<div class="td-gr"><div class="icono-td"><img src="imagenes/estrella.png"/></div>
					<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Rangos</div>
					<div style="padding:10px;">
					<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
					 
					<tr class="primertd">
					<td width="233" height="22" valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">&nbsp;Rango</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Invitar</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Expulsar</font></td>
					<td width="163" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Ascender/descender</font></td>
					</tr>

					<tr class="listadointegrantes" id="5">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input id="Cargo5" name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>
					<script>
						$("#inp5").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(5);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar5" onclick="javascript:EditarNombreRango(5);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar5" onclick="javascript:GuardarNombreRango(5);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>'; echo '
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-5" src="imagenes/si.png" /></td>
					</tr>
					
					<tr class="listadointegrantes" id="4">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input id="Cargo4" name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>
					<script>
						$("#inp4").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(4);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar4" onclick="javascript:EditarNombreRango(4);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar4" onclick="javascript:GuardarNombreRango(4);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>'; if($Rango5Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/no.png" /></td>'; } if($Rango5Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/no.png" /></td>'; } if($Rango5Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/no.png" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="3">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input id="Cargo3" name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>
					<script>
						$("#inp3").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(3);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar3" onclick="javascript:EditarNombreRango(3);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar3" onclick="javascript:GuardarNombreRango(3);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>'; if($Rango4Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/no.png" /></td>'; } if($Rango4Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/no.png" /></td>'; } if($Rango4Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/no.png" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="2">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input id="Cargo2" name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>
					<script>
						$("#inp2").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(2);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar2" onclick="javascript:EditarNombreRango(2);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar2" onclick="javascript:GuardarNombreRango(2);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>'; if($Rango3Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/no.png" /></td>'; } if($Rango3Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/no.png" /></td>'; } if($Rango3Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/no.png" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="1">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input id="Cargo1" name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>
					<script>
						$("#inp1").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("1");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar1" onclick="javascript:EditarNombreRango(1);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar1" onclick="javascript:GuardarNombreRango(1);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>'; if($Rango2Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/no.png" /></td>'; } if($Rango2Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/no.png" /></td>'; } if($Rango2Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/no.png" /></td>'; } echo '</tr>'; echo '<tr class="listadointegrantes" id="0">'; if($rangojugador >= 6) { echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input id="Cargo0" name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>
					<script>
						$("#inp0").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("0");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar0" onclick="javascript:EditarNombreRango(0);"/><img src="imagenes/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar0" onclick="javascript:GuardarNombreRango(0);"/>&nbsp;</span></div></td>'; } else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>'; if($Rango1Inv == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/no.png" /></td>'; } if($Rango1Exp == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/no.png" /></td>'; } if($Rango1Edi == 1) { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/si.png" /></td>'; } else { echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/no.png" /></td>'; } echo '</tr>'; echo '</table>
					</div>
					</div>'; } ?>





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
<a href="comprar-vehiculos.php" class="panel-todo" title="Compra veh&iacute;culos especiales">&raquo; Comprar veh&iacute;culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="<?php if($faccionjugador == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="actual1" title="<?php if($faccionjugador == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccionjugador == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;n">&raquo; Salir</a>
</div>
<hr>
<span style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;" class="rounded-img"><a href="invitar-amigo.php" title="Click aqu&iacute; para m&aacute;s informaci&oacute;n"><span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;"><img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0; border:0"></span></a></span>
<script type="text/javascript">
$(document).ready(function(){

  $(".rounded-img").load(function() {
    $(this).wrap(function(){
      return '<span class="' + $(this).attr('class') + '" style="background:url(' + $(this).attr('src') + ') no-repeat center center; width: ' + $(this).width() + 'px; height: ' + $(this).height() + 'px;" />';
    });
    $(this).css("opacity","0");
  });

});
</script>

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

<script>
var procesando = 0;

function Invitar(fac) 
{
	if(procesando == 0)
	{
		var n = document.getElementById('invString').value;
		$.get("./mandar-invitacion.php?p=" + n + "&f=" + fac , function(data) {
			if(data == 1){
				location.href='./entrar.php';
			}else if(data == 2){
				alert("Este jugador ya está en una banda.");
				document.getElementById("invString").value = "";
			}else if(data == 3){
				alert("No tienes permiso para mandar invitaciones.");
				location.href='./tubanda.php';
			}else if(data == 4){
				alert("Ese jugador no existe");
				document.getElementById("invString").value = "";
			}else if(data == 44){
				alert("No existe ese usuario en la base de datos.");
				document.getElementById("invString").value = "";
			}else if(data == 46){
				alert("La banda ya está llena.");
				document.getElementById("invString").value = "";
			}else if(data == 71){
				alert("Este jugador ya esta invitado.");
				document.getElementById("invString").value = "";
			}else if(data == 99){
				alert("No existe ese usuario en la base de datos.");
				document.getElementById("invString").value = "";
			}else if(data == 5){
				procesando = 0;
				alert("El jugador fue invitado correctamente.");
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a algún administrador.");
			}
			procesando = 0;
		});
	}
}

function CambiarRango(fac, n) 
{
	if(procesando == 0)
	{
		if(n >= 6) 
		{
			procesando = 1;
			var resp = confirm("Vas a entregar el liderazgo de la banda a otro usuario.\n¿Estás seguro?\nPasarás a tener su rango.");
			if(resp == true)
			{
					$.get("./cambiar-rango.php?j=" + fac + "&r=" + n, function(data) {
					if(data == 1){
						location.href='./index.php';
					}else if(data == 2){
						alert("No tienes permisos para cambiar de rango.");
						location.href='./tubanda.php';
					}else if(data == 3){
						alert("Ese jugador no existe.");
						location.href='./tubanda.php';
					}else if(data == 4){
						alert("Ese jugador no pertenece a tu banda.");
					}else if(data == 5){
						alert("No puedes dar un rango superior al tuyo.");
					}else if(data == 6){
						alert("El jugador tiene un rango superior al tuyo.");
						location.href='./tubanda.php';
					}else if(data == 7){
						procesando = 0;
						location.href='./tubanda.php';
					}
					else {
						alert("Error 56 contacta a algún administrador.");
					}
					procesando = 0;
				});
			}
			else {
				location.href='./tubanda.php';
			}
		}
		else 
		{
			procesando = 1;
			$.get("./cambiar-rango.php?j=" + fac + "&r=" + n, function(data) {
				procesando = 1;
				if(data == 1){
					location.href='./index.php';
				}else if(data == 2){
					alert("No tienes permisos para cambiar de rango.");
					location.href='./tubanda.php';
				}else if(data == 3){
					alert("Ese jugador no existe.");
					location.href='./tubanda.php';
				}else if(data == 4){
					alert("Ese jugador no pertenece a tu banda.");
				}else if(data == 5){
					alert("No puedes dar un rango superior al tuyo.");
				}else if(data == 6){
					alert("El jugador tiene un rango superior al tuyo.");
					location.href='./tubanda.php';
				}else if(data == 7){
					procesando = 0;
					location.href='./tubanda.php';
				}
				else {
					alert("Error 56 contacta a algún administrador.");
				}
			});
		}
	}
}

function ExpulsarMiembro(fac) 
{
	if(procesando == 0)
	{
		var resp = confirm("¿Realmente deseas expulsar a este jugador?");
		if(resp == true)
		{
			$.get("./expulsar-jugador.php?j=" + fac , function(data) 
			{
				if(data == 1){
					alert("No tienes permiso para expulsar a miembros.");
					location.href='./tubanda.php';
				}else if(data == 2){
					alert("El jugador especificado no existe.");
					location.href='./tubanda.php';
				}else if(data == 3){
					alert("Ese jugador no pertenece a tu banda.");
				}else if(data == 4){
					alert("No puedes expulsar a alguien con más rango que tú.");
					location.href='./tubanda.php';
				}else if(data == 5){
					procesando = 0;
					location.href='./tubanda.php';
				}
				else {
					alert("Error 56 contacta a algún administrador.");
				}
				procesando = 0;
			});
		}
	}
} 
</script>

<?php if($rangojugador >= 6) { ?>

<script>
function CambiarValor(rango,valor) 
{
	if(procesando == 0)
	{
		procesando = 1;
		$.get("./cambiar-valor.php?r=" + rango + "&v=" + valor, function(data) {
			procesando = 1;
			if(data == 1){
				location.href='./index.php';
			}else if(data == 2){
				alert("No tienes permisos para hacer esto.");
				location.href='./tubanda.php';
			}else if(data == 3){
				procesando = 0;
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a algún administrador.");
			}
		});
	}
}

function GuardarNombreRango(id) 
{
	if(id == 5) { var n = document.getElementById("Cargo5").value; }
	if(id == 4) { var n = document.getElementById("Cargo4").value; }
	if(id == 3) { var n = document.getElementById("Cargo3").value; }
	if(id == 2) { var n = document.getElementById("Cargo2").value; }
	if(id == 1) { var n = document.getElementById("Cargo1").value; }
	if(id == 0) { var n = document.getElementById("Cargo0").value; }
	if(procesando == 0)
	{
		if(n == "<?php echo $Rango1; ?>" || n == "<?php echo $Rango2; ?>" || n == "<?php echo $Rango3; ?>" || n == "<?php echo $Rango4; ?>" || n == "<?php echo $Rango5; ?>" || n == "<?php echo $Rango6; ?>")
		{
			alert("Ese nombre de rango ya existe en tu banda.");
			location.href="./tubanda.php";
		}
		else
		{
			$.get("./guardar-nombre.php?p=" + id + "&f=" + n , function(data) {
				if(data == 1)
				{
					location.href='./index.php';
				}
				else if(data == 2)
				{
					alert("No puedes cambiar el nombre de los rangos.");
					location.href='./tubanda.php';
				}
				else if(data == 3)
				{
					procesando = 0;
					location.href='./tubanda.php';
				}
				else 
				{
					alert("Error 56 contacta a algún administrador.");
				}
				procesando = 0;
			});
		}
    }
}
</script>

<?php } ?>

</body>
<div id="lean_overlay"></div>
</html>