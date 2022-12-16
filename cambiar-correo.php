<?php
require_once "seguridad/sql_inject.php";
$bDestroy_session = TRUE;
$url_redirect     = 'index.php';
$sqlinject        = new sql_inject('./log_file_sql.log', $bDestroy_session, $url_redirect);
session_start();
error_reporting(0);
include_once('./kev/pdo.php');
if (isset($_SESSION['User'])) {
    $User = $_SESSION['User'];
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
    $stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $name               = $row['Username'];
        $faccion            = $row['Faccion'];
        $fz                 = $row['Moneda'];
        $score              = $row['Nivel'];
        $money              = $row['Money'];
        $platabanco         = $row['Banco'];
        $ropa               = $row['Skin'];
        $razon              = $row['razon'];
        $ban                = $row['Baneado'];
        $Conexion           = $row['Conexion'];
        $email              = $row['Email'];
        $exp                = $row['Experiencia'];
        $arrestado          = $row['arrestado'];
        $horasdejuego       = $row['horasjugadas'];
        $numerotlf          = $row['Numero'];
        $vida               = $row['Vida'];
        $Chaleco            = $row['Chaleco'];
        $crack              = $row['Crack'];
        $medicamentos       = $row['Medicamentos'];
        $guia               = $row['Agenda'];
        $piezas             = $row['Materiales'];
        $repuestos          = $row['Repuestos'];
        $radio              = $row['Radio'];
        $totems             = $row['totems'];
        $blanca             = $row['WP1'];
        $pistola            = $row['WP2'];
        $escopeta           = $row['WP3'];
        $subfusil           = $row['WP4'];
        $asalto             = $row['WP5'];
        $rifle              = $row['WP6'];
        $granada            = $row['WP8'];
        $regalo             = $row['WP10'];
        $exparmero          = $row['ExpArmero'];
        $expminero          = $row['ExpMinero'];
        $exppiloto          = $row['ExpPiloto'];
        $expladron          = $row['ExpLadron'];
        $exppescador        = $row['ExpPescador'];
        $expbasurero        = $row['ExpBasurero'];
        $expcamionero       = $row['ExpCamionero'];
        $exptransportista   = $row['ExpTransportista'];
        $nivelarmero        = $row['NivelArmero'];
        $nivelladron        = $row['NivelLadron'];
        $nivelpiloto        = $row['NivelPiloto'];
        $nivelminero        = $row['NivelMinero'];
        $nivelpescador      = $row['NivelPescador'];
        $nivelbasurero      = $row['NivelBasurero'];
        $nivelcamionero     = $row['NivelCamionero'];
        $niveltransportista = $row['NivelTransportista'];
		$EstadoKEY = $row['EstadoKEY'];
		$CodigoKEY = $row['CodigoKEY'];
		$CPendiente = $row['CPendiente'];
		$nuevocorreo = $row['nuevocorreo'];
		$FinDiaC = $row['FinDiaC'];
		$FinMesC = $row['FinMesC'];
		$FinAnoC = $row['FinAnoC'];
		$formatname = ucwords($name, '_');
		$conexion = $row['Conexion'];
		$DiaECorreo = $row['DiaECorreo'];
		$MesECorreo = $row['MesECorreo'];
		$MinutosECorreo = $row['MinutosECorreo'];
		$AnoECorreo = $row['AnoECorreo'];
		$dinerototal = $money+$platabanco;
		$password = $row['Password'];
    }
    $dominio = strstr($email, '@');
} else
    echo "<script>window.location='ingresar.php';</script>";
if ($Conexion == '1') {
    echo "<script>window.location='reg.php?u=2';</script>";
}
if ($numerotlf == 0) {
    $numerodetelefono == "No tiene";
}
?>
<?php
require("./conectados/samp_query.php");
try {
    $rQuery        = new QueryServer($serverIP, $serverPort);
    $aInformation  = $rQuery->GetInfo();
    $aServerRules  = $rQuery->GetRules();
    $aBasicPlayer  = $rQuery->GetPlayers();
    $aTotalPlayers = $rQuery->GetDetailedPlayers();
    $rQuery->Close();
}
catch (QueryServerException $pError) {
}
?>

<!-- Verificar y cambiar correo 7 days -->
<?php
	$day = date("d");
	$month = date("m");
	$year = date("y");
	
	if($month >= 13)
	{
 		$month = 1;
	}
	if($day >= $FinDiaC  && $month >= $FinMesC && $year >= $FinAnoC)
	{
		$sql_update = mysql_query("UPDATE `usuarios` SET `FinDiaC`='0',`FinMesC`='0',`FinAnoC`='0',`CPendiente`='0' WHERE `Username`='".$name."'");
        $sql_update = mysql_query("UPDATE `usuarios` SET `Correo`='".$nuevocorreo."' WHERE `Username`='".$name."'");
	}
?>
<!--------------------------->

<!-- Volver a enviar email de verificacion -->
<?php
	$day = date("d");
	$month = date("m");
	$year = date("y");
	$minutos = date("i");

	if($day >= $DiaECorreo  && $month >= $MesECorreo && $year >= $AnoECorreo && $minutos >= $MinutosECorreo)
	{
		$sql_update = mysql_query("UPDATE `usuarios` SET `enviocorreo`='0' WHERE `Username`='".$name."'");
		$sql_update = mysql_query("UPDATE `usuarios` SET `DiaECorreo`='0', `MesECorreo`='0', `MinutosECorreo`='0', `anoECorreo`='0' WHERE `Username`='".$name."'");
	}
?>
<!--------------------------->


<html xmlns="https://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Cambiar correo</title>

<link rel="stylesheet" href="./css/estilos3.css">

<link rel="stylesheet" href="./css/style.css">

<script src="https://code.jquery.com/jquery-latest.js"></script>

<style>DIV#loader.loading{background:url(./imagenes/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>

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
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesi&oacuten - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>

<div class="botones-superiores"><a href="https://www.facebook.com/EvertZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

</div>

<div id="menu-superior">
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>
<?php
function validarCadena($cadena)
{ 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789._?/\*-+,:@#?¿^çÇ!¡=)( "; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}
?>

<?php include_once('./seguridad/p_numinv.php'); ?>

</div>

<div id="contenido">

<?php
if($ban == 1):
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
<td valign="middle" bgcolor="green" align="left" colspan="1" style="color:white"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2.6px"><strong>Haz click <a href="./recibir_piezas.php">aqu&iacute</a> para recibir tus 500 piezas de arma.</strong></font></td>
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
?>
<div id="contenido-izquierdo">
<?php

$submit			= mysql_real_escape_string($_POST['commit']);
$contraactual	= mysql_real_escape_string($_POST['pass']);
$correonuevo	= mysql_real_escape_string($_POST['correo']);
$correonuevo2	= mysql_real_escape_string($_POST['correo2']);

if($submit)
{
	if($CPendiente == 0)
	{
		if($estaonline == 0)
		{
			if($contraactual || $correonuevo || $correonuevo2)
			{
				if($contraactual == $password)
				{
					if($correonuevo == $correonuevo2)
					{
						if(validarCadena($contraactual) == true && validarCadena($correonuevo) == true && validarCadena($correonuevo2) == true)
						{
						$sql_update = mysql_query("UPDATE usuarios SET CPendiente=1 WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
						$sql_update = mysql_query("UPDATE usuarios SET enviocorreo=0 WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
						$sql_update = mysql_query("UPDATE usuarios SET nuevocorreo='".$correonuevo."' WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
						$mes_siguiente = mktime(0, 0, 0, date("m"),   date("d")+7,   date("Y"));
						$fecha_fin1 = date('d-m-Y', $mes_siguiente);
						$exp_fecha1 = explode('-', $fecha_fin1);
						$sql_update = mysql_query("UPDATE usuarios SET FinMesC='".mysql_real_escape_string($exp_fecha1['1'])."' WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
						$sql_update = mysql_query("UPDATE usuarios SET FinDiaC='".mysql_real_escape_string($exp_fecha1['0'])."' WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
						$sql_update = mysql_query("UPDATE usuarios SET FinAnoC='".mysql_real_escape_string($exp_fecha1['2'])."' WHERE Username='".mysql_real_escape_string($_SESSION['User'])."';");
										
						echo '<section class="elcontenedor"><div class="login"><h1>Cambiar direccion de e-mail</h1> El cambio se completará después de 7 d&iacuteas a partir de ahora, esta demora es para la seguridad de su cuenta <p><a href="/cuenta.php"><input type="submit" name="comit" value="Aceptar"></a></p></div></section>';
					}
					else
					{
						echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No puedes usar caracteres invalidos en la contrase&ntilde;a</strong></div>
						<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' ?>"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
					}
				}
				else
				{
					echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Las contrase&ntilde;as no son iguales</strong></div>
					<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' ?>"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
				}
			}
			else
			{
				echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>La contrase&ntilde;a  actual ingresada no es correcta</strong></div>
				<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' ?>"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
			}
		}
		else
		{
			echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltaron ingresar los datos.</strong></div>
			<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' ?"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';  
		}
	}
	else
	{
		echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:667px; text-align:center;"><strong>Tienes que estar desconectado para cambiarte el correo.</strong></div>
		<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' >"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
	}
}
else
	{
		echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:667px; text-align:center;"><strong>Ya hay un cambio de correo electr&oacutenico pendiente, espera que se cambie o cancele para solicitar un nuevo cambio.</strong></div>
		<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.' >"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
	}
}
else
{
	echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:667px; text-align:center;"><strong>IMPORTANTE: El cambio de correo electr&oacutenico tarda 30 d&iacuteas por motivos de seguridad.</strong></div>
	<section class="elcontenedor">

<div class="login">
<h1>Cambiar direccion de e-mail</h1>

<form method="post" name="cambio">

<input name="cambiar" type="hidden" value="1"/>

<input name="1h" type="text" maxlength="1" style="display:none"/>

<input name="1v" type="password" maxlength="1" style="display:none"/>

<p><input name="correo" type="text" maxlength="90" placeholder="Nueva direccion de e-mail"/></p>

<p><input name="correo2" type="text" maxlength="90" placeholder="Repetir direccion de e-mail"/></p>

<p><input name="pass" type="password" maxlength="30" placeholder="Contraseña de  '.$name.'"</p>

<p><input type="submit" name="commit" value="Cambiar e-mail"></p>
</form>
</div>
</section>';
}

?>


</div>

<div id="menu-derecho"><style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>

<div class="td">
<div class="icono-td"><img src="./imagenes/dinero_p.png"></div>
<div class="titulo-td">
Tu cuenta
</div>
</div>

<div class="bloque-monedas">
<div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px"><?php
echo number_format($fz, 0, '', '.');
?> <?php
echo $Diminutivo;
?></div>
<div class="hr2"></div>
<div style="float:left; margin-left:170px; font-size:18px; color:#003366;">$<?php
echo number_format($dinerototal, 0, '', '.');
?></div>
<div class="hr2"></div>
<div style="float:left; margin-left:170px; font-size:18px; color:#003366;"><?php
echo $score;
?></div>
<div class="hr2"></div>
</div>
<hr>
<a href="comprar-vz.php"><center><img src="imagenes/comprar-vz.png" title="Comprar VZ<?php
echo $Diminutivo;
?>" border="0"></center></a>
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
<a href="cuenta.php" class="actual1" title="Panel principal con informaci&oacute;n de tu cuenta">&raquo; Panel principal</a>
<a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo; Comprar ropa</a>
<a href="comprar-vehiculos.php" class="panel-todo" title="Compra veh&iacute;culos especiales">&raquo; Comprar veh&iacute;culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="<?php
if ($faccion == 0) {
    echo "crear-banda.php";
} else {
    echo "tubanda.php";
}
?>" class="panel-todo" title="<?php
if ($faccion == 0) {
    echo "Crear banda";
} else {
    echo "Tu banda";
}
?>">&raquo; <?php
if ($faccion == 0) {
    echo "Crear banda";
} else {
    echo "Tu banda";
}
?></a>
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

<?php
if ($activar_jc == 1) {
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/diario.png"/></div>
<div class="titulo-td">
Jugadores Conectados
</div>
</div>

<div class="bloque">
<span id="total" style="font-size:35px; color:#050;text-shadow: 0 1px 0 #FFFFFF; margin-left:35%"><center><?php
    if (!empty($aInformation)) {
        echo $aInformation['Players'];
    }
?></center></span>
</div>
<?php
}
?>

<?php
if ($activar_es == 1) {
?>
<hr>

<div class="td">
<div class="icono-td"><img src="./imagenes/estadisticas.png"/></div>
<div class="titulo-td">
Estado de los servidores
</div>
</div>

<div class="bloque">
<span style="font-weight:bold;font-size:12px; color:#003366">Roleplay S1:&nbsp;&nbsp;&nbsp;</span> <span style="font-size:12px; font-weight:bold; color:#305B79"><?php
    echo $serverIP;
?><?php
    if ($activar_pt == 1) {
?>:<?php
        echo $serverPort;
?><?php
    }
?></span><span style="float:right; width:68px"><img src="./imagenes/en-linea.png" align="absmiddle" title="En linea"><span id="rols4" style="color:#030"><font size="2px"><?php
    if (!empty($aInformation)) {
        echo $aInformation['Players'];
    }
?>/<?php
    if (!empty($aInformation)) {
        echo $aInformation['MaxPlayers'];
    }
?></span></span>
</div>
<?php
}
?>
<!---->

<?php
if ($activar_fb == 1) {
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/facebook.png"></div>
<div class="titulo-td"><?php
    echo strtoupper($Diminutivo);
?>:RP en Facebook</div>
</div>

<div class="bloque">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php
    echo $FacebookURL;
?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:68px;" allowTransparency="true">
</iframe>

</div>
<?php
}
?>
<!---->

<?php
if ($activar_tw == 1) {
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/twitter.png" height="16" width="16"></div>
<div class="titulo-td"><?php
    echo strtoupper($Diminutivo);
?>:RP en Twitter</div>
</div>
<div class="bloque">
<a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php
    echo $TwitterID;
?>">Twitter <?php
    echo $NombreServidor;
?></a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</div>
<?php
}
?>

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
<?php
$carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 5");
$carrera->execute();
$counter = 0;
if ($row = $carrera->fetch(PDO::FETCH_ASSOC)) {
    do {
        $counter++;
        echo "" . $counter . ". " . $row["Username"] . "<span style='float:right; font-size:11px;'>" . $row["PuntosCarrera"] . " Puntos</span><div class='hr'></div>";
    } while ($row = $carrera->fetch(PDO::FETCH_ASSOC));
}
?>
<center><a href="./torneo-carreras.php">Ver tabla de posiciones</a></center>
</div>

<!-- -->
</div>
<div id="pie"><hr><?php
echo $NombreServidor;
?> Roleplay &copy; 2015 - 2018</div> </td>
</tr>
</table>
</body>
<div id="lean_overlay"></div>
</html>