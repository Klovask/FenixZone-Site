<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; try { $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $name = $datos['Username']; $clave = $datos['Password']; 
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
$money = $datos['Money']; $score = $datos['Nivel']; $vz = $datos['Moneda']; $online = $datos['Online']; $ropa = $datos['Skin']; $platabanco = $datos['Banco']; $posibilidad = $datos['changenamefree']; $faccion = $datos['Faccion']; $rango = $datos['Rango']; $CasaID = $datos['CasaID']; $CasaID2 = $datos['CasaID2']; $razon = $datos['razon']; $ban = $datos['Baneado']; $Conexion = $datos['Conexion']; } } catch(PDOException $e) { echo 'Error: ' . $e->getMessage(); } } else echo "<script>window.location='ingresar.php';</script>"; $dinerototal = $money+$platabanco; $cambiofree = 1; if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } ?>

<?php function validarCadena($cadena) { if(strlen($cadena) < 3 || strlen($cadena) > 12) { return false; } $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ"; for ($i=0; $i<strlen($cadena); $i++) { if (strpos($permitidos, substr($cadena,$i,1))===false) { return false; } } return true; } function validarCadenaEdad($cadena) { if(strlen($cadena) > 2) { return false; } $permitidos = "0123456789"; for ($i=0; $i<strlen($cadena); $i++) { if (strpos($permitidos, substr($cadena,$i,1))===false) { return false; } } return true; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Cambiar contrase&ntildea</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

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

<div class="td-img">

<div class="icono-td"><img src="./imagenes/editar-informacion.png"></div>

<div style=" padding-bottom:160px;height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Cambio de nombre</div>

<?php  $firmar = $_POST['firmar']; $nombrex1 = $_POST['nombre']; $apellidox1 = $_POST['apellido']; $edad = $_POST['edad']; $nombrecompleto = $nombrex1.'_'.$apellidox1; $nombrecespacio = $nombrex1.' '.$apellidox1; if($nombrex1) { if($apellidox1) { if($nombrex1 >= 12 || $apellidox1 >= 12) { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">La suma de letras entre el nombre y el apellido, no puede ser superior a 20.<br><a href="cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>'; } else { if($edad <= 18 || $edad >= 40) { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">La edad ingresada no es correcta.<br><a href="cambiar-nombre.php">Clic para reingresar los datos.</a><hr></center></div>'; } else { if(validarCadena($nombrex1) == true && validarCadena($apellidox1) == true && validarCadenaEdad($edad) == true) { if($ban == 0) { if($posibilidad == 1) { if($online == 0) { if($vz < 10) { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Se acabaron los cambios de nombres gratuitos, necesitas 10';?><?php echo $Diminutivo?><?php echo ' para volver a cambiarlo.<hr></center> </div>'; } else { $stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto"); $stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $stm->execute(); $num_rows = $stm->rowCount(); if($num_rows == 1) { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Ya hay una persona con el nombre <b>'.$nombrex1.' '.$apellidox1.'</b><br><a href="/cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>'; } else { $mssql = $con->prepare("UPDATE usuarios SET Moneda = Moneda-10 WHERE Username = :usuario"); $mssql->bindParam(':usuario', $name, PDO::PARAM_STR); $mssql->execute(); $mysql = $con->prepare("UPDATE usuarios SET totem = :nombrecompleto WHERE totem = :nombre"); $mysql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysql->bindParam(':nombre', $name, PDO::PARAM_STR); $mysql->execute(); $misqk = $con->prepare("UPDATE antecedentes SET Oficial = :nombrecompleto WHERE Oficial = :nombre"); $misqk->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqk->bindParam(':nombre', $name, PDO::PARAM_STR); $misqk->execute(); $mysql_h = $con->prepare("UPDATE logros SET nombre = :nombrecompleto WHERE nombre = :nombre"); $mysql_h->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysql_h->bindParam(':nombre', $name, PDO::PARAM_STR); $mysql_h->execute(); $mysqll = $con->prepare("UPDATE prendas SET Propietario = :nombrecompleto WHERE Propietario = :nombre"); $mysqll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysqll->bindParam(':nombre', $name, PDO::PARAM_STR); $mysqll->execute(); $misqll = $con->prepare("UPDATE log_ingresos SET Nombre = :nombrecompleto WHERE Nombre = :nombre"); $misqll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqll->bindParam(':nombre', $name, PDO::PARAM_STR); $misqll->execute(); $misqlll = $con->prepare("UPDATE log_baneos SET Baneado = :nombrecompleto WHERE Baneado = :nombre"); $misqlll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqlll->bindParam(':nombre', $name, PDO::PARAM_STR); $misqlll->execute(); $mism = $con->prepare("UPDATE log_transacciones SET Enviador = :nombrecompleto WHERE Enviador = :nombre"); $mism->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mism->bindParam(':nombre', $name, PDO::PARAM_STR); $mism->execute(); $misn = $con->prepare("UPDATE log_transacciones SET Receptor = :nombrecompleto WHERE Receptor = :nombre"); $misn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misn->bindParam(':nombre', $name, PDO::PARAM_STR); $misn->execute(); $mismm = $con->prepare("UPDATE log_ventas SET Vendedor = :nombrecompleto WHERE Vendedor = :nombre"); $mismm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mismm->bindParam(':nombre', $name, PDO::PARAM_STR); $mismm->execute(); $misnn = $con->prepare("UPDATE log_ventas SET comprador = :nombrecompleto WHERE comprador = :nombre"); $misnn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misnn->bindParam(':nombre', $name, PDO::PARAM_STR); $misnn->execute(); $misl = $con->prepare("INSERT INTO `log_nombres`(`ID`, `Viejo_Nombre`, `Nuevo_Nombre`, `Fecha`) VALUES ('', :nombre, :nombrecompleto, now())"); $misl->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misl->bindParam(':nombre', $name, PDO::PARAM_STR); $misl->execute(); $misql = $con->prepare("UPDATE smf_members SET real_name = :nombrecespacio ,member_name= :nombrecompleto ,passwd=SHA1(CONCAT(LOWER(:nombrecompleto), :clave)) WHERE member_name = :nombre"); $misql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misql->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR); $misql->bindParam(':nombre', $name, PDO::PARAM_STR); $misql->bindParam(':clave', $clave, PDO::PARAM_STR); $misql->execute(); if($rango == 6 && $faccion > 0) { $st = $con->prepare("UPDATE facciones SET Lider = :nombrecompleto WHERE Lider = :nombre"); $st->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $st->bindParam(':nombre', $name, PDO::PARAM_STR); $st->execute(); } if($CasaID > 0 || $CasaID2 > 0) { $sql = $con->prepare("UPDATE propiedades SET Propietario = :nombrecompleto WHERE Propietario = :nombre"); $sql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $sql->bindParam(':nombre', $name, PDO::PARAM_STR); $sql->execute(); } $msql = $con->prepare("UPDATE usuarios SET Username=:nombrecompleto, Edad = :edad WHERE Username = :nombre"); $msql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $msql->bindParam(':nombre', $name, PDO::PARAM_STR); $msql->bindParam(':edad', $edad, PDO::PARAM_INT); $msql->execute(); echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/bien.png" width="60"><hr><font size="2.6px">Cambio de nombre hecho con exito, recuerda ingresar ala cuenta con tu nuevo nombre, -10';?><?php echo $Diminutivo?><?php echo '</b><br><a href="cambiar-nombre.php">Clic para ingresar de nuevo</a><hr></center> </div>'; session_destroy(); } } } else { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor desconectate del juego para poder cambiar tu nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>'; } } if($posibilidad == 0) { if($online == 0) { $stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto"); $stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $stm->execute(); $num_rows = $stm->rowCount(); if($num_rows == 1) { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Ya hay una persona con el nombre <b>'.$nombrex1.' '.$apellidox1.'</b><br><a href="/cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>'; } else { $mssql = $con->prepare("UPDATE usuarios SET Moneda = Moneda-10 WHERE Username = :usuario"); $mssql->bindParam(':usuario', $name, PDO::PARAM_STR); $mssql->execute(); $mysql = $con->prepare("UPDATE usuarios SET totem = :nombrecompleto WHERE totem = :nombre"); $mysql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysql->bindParam(':nombre', $name, PDO::PARAM_STR); $mysql->execute(); $misqk = $con->prepare("UPDATE antecedentes SET Oficial = :nombrecompleto WHERE Oficial = :nombre"); $misqk->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqk->bindParam(':nombre', $name, PDO::PARAM_STR); $misqk->execute(); $mysql_h = $con->prepare("UPDATE logros SET nombre = :nombrecompleto WHERE nombre = :nombre"); $mysql_h->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysql_h->bindParam(':nombre', $name, PDO::PARAM_STR); $mysql_h->execute(); $mysqll = $con->prepare("UPDATE prendas SET Propietario = :nombrecompleto WHERE Propietario = :nombre"); $mysqll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mysqll->bindParam(':nombre', $name, PDO::PARAM_STR); $mysqll->execute(); $misqll = $con->prepare("UPDATE log_ingresos SET Nombre = :nombrecompleto WHERE Nombre = :nombre"); $misqll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqll->bindParam(':nombre', $name, PDO::PARAM_STR); $misqll->execute(); $misqlll = $con->prepare("UPDATE log_baneos SET Baneado = :nombrecompleto WHERE Baneado = :nombre"); $misqlll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misqlll->bindParam(':nombre', $name, PDO::PARAM_STR); $misqlll->execute(); $mism = $con->prepare("UPDATE log_transacciones SET Enviador = :nombrecompleto WHERE Enviador = :nombre"); $mism->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mism->bindParam(':nombre', $name, PDO::PARAM_STR); $mism->execute(); $misn = $con->prepare("UPDATE log_transacciones SET Receptor = :nombrecompleto WHERE Receptor = :nombre"); $misn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misn->bindParam(':nombre', $name, PDO::PARAM_STR); $misn->execute(); $mismm = $con->prepare("UPDATE log_ventas SET Vendedor = :nombrecompleto WHERE Vendedor = :nombre"); $mismm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $mismm->bindParam(':nombre', $name, PDO::PARAM_STR); $mismm->execute(); $misnn = $con->prepare("UPDATE log_ventas SET comprador = :nombrecompleto WHERE comprador = :nombre"); $misnn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misnn->bindParam(':nombre', $name, PDO::PARAM_STR); $misnn->execute(); $misl = $con->prepare("INSERT INTO `log_nombres`(`ID`, `Viejo_Nombre`, `Nuevo_Nombre`, `Fecha`) VALUES ('', :nombre, :nombrecompleto, now())"); $misl->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misl->bindParam(':nombre', $name, PDO::PARAM_STR); $misl->execute(); $misql = $con->prepare("UPDATE smf_members SET real_name = :nombrecespacio ,member_name= :nombrecompleto ,passwd=SHA1(CONCAT(LOWER(:nombrecompleto), :clave)) WHERE member_name = :nombre"); $misql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $misql->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR); $misql->bindParam(':nombre', $name, PDO::PARAM_STR); $misql->bindParam(':clave', $clave, PDO::PARAM_STR); $misql->execute(); if($rango == 6 && $faccion > 0) { $st = $con->prepare("UPDATE facciones SET Lider = :nombrecompleto WHERE Lider = :nombre"); $st->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $st->bindParam(':nombre', $name, PDO::PARAM_STR); $st->execute(); } if($CasaID > 0 || $CasaID2 > 0) { $sql = $con->prepare("UPDATE propiedades SET Propietario = :nombrecompleto WHERE Propietario = :nombre"); $sql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $sql->bindParam(':nombre', $name, PDO::PARAM_STR); $sql->execute(); } $msql = $con->prepare("UPDATE usuarios SET Username=:nombrecompleto, changenamefree = :cambio, Edad = :edad WHERE Username = :nombre"); $msql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); $msql->bindParam(':nombre', $name, PDO::PARAM_STR); $msql->bindParam(':edad', $edad, PDO::PARAM_INT); $msql->bindParam(':cambio', $cambiofree, PDO::PARAM_INT); $msql->execute(); echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/bien.png" width="60"><hr><font size="2.6px">Cambio de nombre hecho con exito, recuerda ingresar ala cuenta con tu nuevo nombre, gastastes tu cambio de nombre.</b><br><a href="cambiar-nombre.php">Clic para ingresar de nuevo</a><hr></center> </div>'; session_destroy(); } } else { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor desconectate del juego para poder cambiar tu nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>'; } } } else { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Tu cuenta se encuentra baneada.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>'; } } else { ?>
					<script language="javascript">alert("Error 5");</script>
<?php  session_start(); session_destroy(); echo "<script>window.location='index.php';</script>"; } } } } else { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor completa con nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>'; } } else { echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor completa con nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>'; } ?>

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

<div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px"><?php echo number_format($vz, 0, '', '.');?> <?php echo $Diminutivo?></div>

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
<a href="cambiar-nombre.php" class="actual1" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
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
<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; 2016-2017</div> </td>
</tr>
</table>
</body>
<div id="lean_overlay"></div>
</html>