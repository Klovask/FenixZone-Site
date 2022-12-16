<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($row = $stmt->fetch()) { $name = $row['Username']; $faccion = $row['Faccion']; $fz = $row['Moneda']; $score = $row['Nivel']; $money = $row['Money']; $platabanco = $row['Banco']; $ropa = $row['Skin']; $razon = $row['razon']; $ban = $row['Baneado']; $Conexion = $row['Conexion']; } $dinerototal = $money+$platabanco; } $us = $_GET['p']; $stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :us"); $stm->bindParam(':us', $us, PDO::PARAM_STR); $stm->execute(); while($perfil = $stm->fetch()) { $name_p = $perfil['Username']; $score_p = $perfil['Nivel']; $online_p = $perfil['Online']; $horasjugadas_p = $perfil['horasjugadas']; $Registro_p = $perfil['Registro']; $Conexion_p = $perfil['Conexion']; $ropa_p = $perfil['Skin']; } $dia_a = substr($Registro_p, 0, 2); $mes_a = substr($Registro_p, 3, 2); $ano_a = substr($Registro_p, 6, 4); $dia_b = substr($Conexion_p, 0, 2); $mes_b = substr($Conexion_p, 3, 2); $ano_b = substr($Conexion_p, 6, 4); $st = $con->prepare("SELECT * FROM logros WHERE nombre = :us"); $st->bindParam(':us', $us, PDO::PARAM_STR); $st->execute(); while($logros = $st->fetch()) { $fecha_nivel = $logros['fecha_nivel']; $sobre_ruedas = $logros['sobre_ruedas']; $fecha_ruedas = $logros['fecha_ruedas']; $automedicado = $logros['automedicado']; $nro_remedio = $logros['nro_remedio']; $fecha_remedio = $logros['fecha_remedio']; $adicto_crack = $logros['adicto_crack']; 
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
$nro_crack = $logros['nro_crack']; $fecha_crack = $logros['fecha_crack']; $medico = $logros['medico']; $nro_salvado = $logros['nro_salvado']; $fecha_salvado = $logros['fecha_salvado']; $tortuga = $logros['tortuga']; $fecha_tortuga = $logros['fecha_tortuga']; $techo_propio = $logros['techo_propio']; $fecha_techo = $logros['fecha_techo']; $iniciando_negocios = $logros['iniciando_negocios']; $fecha_negocio = $logros['fecha_negocio']; $lugar_trabajo = $logros['lugar_trabajo']; $fecha_trabajo = $logros['fecha_trabajo']; $cerrajero = $logros['cerrajero']; $nro_forzado = $logros['nro_forzado']; $fecha_forzado = $logros['fecha_forzado']; $piloto_experto = $logros['piloto_experto']; $ganadas = $logros['ganadas']; $fecha_ganadas = $logros['fecha_ganadas']; $negocio_redondo = $logros['negocio_redondo']; $cosecha = $logros['cosecha']; $fecha_cosecha = $logros['fecha_cosecha']; $marihuanero = $logros['marihuanero']; $porros = $logros['porros']; $fecha_porros = $logros['fecha_porros']; $mensaje_perfil = $logros['mensaje']; $pais_perfil = $logros['pais']; $mes_perfil = $logros['mes']; $dia_perfil = $logros['dia']; $ano_perfil = $logros['ano']; $mostrar_perfil = $logros['mostrar_edad']; $color_perfil = $logros['perfil']; } $edadperfil = 2016-$ano_perfil; ?>

<?php if($_POST['submit']) { if($_POST['textarea']) { $textoarea = $_POST['textarea']; $sql = $con->prepare("UPDATE `logros` SET `mensaje`=:mensaje WHERE `nombre`= :usuario"); $sql->bindParam(':usuario', $User, PDO::PARAM_STR); $sql->bindParam(':mensaje', $textoarea, PDO::PARAM_STR); $sql->execute(); $mensaje_perfil = $textoarea; } } ?>

<?php if($_POST['submit2']) { $diaenviado = $_POST['DiaNuevo']; $mesenviado = $_POST['dobMonth']; $anoenviado = $_POST['AnoNuevo']; $mostrarenviado = $_POST['q1']; $colorenviado = $_POST['color']; $paisenviado = $_POST['pais']; $sql2 = $con->prepare("UPDATE `logros` SET `dia`=:dia, `mes`=:mes, `ano`=:ano, `mostrar_edad`=:mostraredad, `perfil`=:perfil, `pais`=:pais WHERE `nombre`= :usuario"); $sql2->bindParam(':usuario', $User, PDO::PARAM_STR); $sql2->bindParam(':dia', $diaenviado, PDO::PARAM_INT); $sql2->bindParam(':mes', $mesenviado, PDO::PARAM_INT); $sql2->bindParam(':ano', $anoenviado, PDO::PARAM_INT); $sql2->bindParam(':mostraredad', $mostrarenviado, PDO::PARAM_INT); $sql2->bindParam(':perfil', $colorenviado, PDO::PARAM_INT); $sql2->bindParam(':pais', $paisenviado, PDO::PARAM_STR); $sql2->execute(); $pais_perfil = $paisenviado; $color_perfil = $colorenviado; $mostrar_perfil = $mostrarenviado; $edadperfil = 2016-$anoenviado; } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $NombreServidor?> Roleplay - Perfil de usuario ( <?php echo $name_p ?> )</title>
<link rel="stylesheet" href="./css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./css/magnific-popup.css">
<link rel="stylesheet" href="./css/style.css">
<?php switch($color_perfil) { case 1: echo '<link rel="stylesheet" href="./css/perfil1.css">'; $color_fondos = "060d15"; $color_fondos2 = "5b7696"; break; case 2: echo '<link rel="stylesheet" href="./css/perfil2.css">'; $color_fondos = "520000"; $color_fondos2 = "856363"; break; case 3: echo '<link rel="stylesheet" href="./css/perfil3.css">'; $color_fondos = "de4700"; $color_fondos2 = "fcb593"; break; case 4: echo '<link rel="stylesheet" href="./css/perfil4.css">'; $color_fondos = "004300"; $color_fondos2 = "549654"; break; case 5: echo '<link rel="stylesheet" href="./css/perfil5.css">'; $color_fondos = "595959"; $color_fondos2 = "929ba0"; break; case 6: echo '<link rel="stylesheet" href="./css/perfil6.css">'; $color_fondos = "3d005a"; $color_fondos2 = "7b5d89"; break; case 7: echo '<link rel="stylesheet" href="./css/perfil7.css">'; $color_fondos = "c300ea"; $color_fondos2 = "d18cdf"; break; } ?>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css?a=asd"/>
<link href="./css/pie-chart.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<script src="./js/jquery.min.js"></script>
<script src="./js/star-rating.js" type="text/javascript"></script>
<script src="./js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="./js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="./js/jquery.simplyCountable.js"></script>
</head>
<body>
<div style="width:0;height:0; overflow:hidden"><img src="./imagenes/descarga_load.gif"></div>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tr>
<td width="997">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>
<style>
.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}
.alertas a{color:#FFF;}
.alertas:hover{background-color:#0068ce;}
.alertas a:hover{color:#f0f0f0;}
</style>
<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>

<?php if(isset($_SESSION['User'])) { ?>
<div class="header-s3-2">
<?php } else { ?>
<div class="header-s3-">
<?php } ?>

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


<?php if(isset($_SESSION['User'])) { ?>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="../imagenes/Skin/'.$ropa.'.png">';?>
</div>

<?php } if(!isset($_SESSION['User'])) { ?>
<div class="botones-login"><img src="../imagenes/login.png"> <a href="../ingresar.php" title="Iniciar sesión" border="0">Iniciar sesión</a></div>
<div class="botones-superiores"><a href="https://www.facebook.com/EvertZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

<?php } ?>
</div>
<div id="menu-superior">
<ul>
<li id="principal-ac"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/index.php">Foro</a></li>
<li id="tucuenta"><a href="./ingresar.php">Tu cuenta</a></li>
<?php if(!isset($_SESSION['User'])) { ?>
	<li id="crear-cuenta"><a href="./nuevo.php">Crear cuenta</a></li>
<?php } else { ?>
	<li id="cuenta-creada"><a></a></li>
<?php } ?>
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



<?php if($score_p == 0) { $mensaje="No hay ninguna cuenta con ese nombre"; echo $mensaje; } else { ?>

<div class="contenido-perfil">
<table width="98%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr class="bgtd"><td align="center" height="6"></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2" background="./imagenes/fondos/8.png">
<div class="pdiv">
<div class="sdiv" style="background-image:url(./imagenes/personajes-237/<?php echo $ropa_p ?>.png);">
</div>
<div class="fondonombre"><?php $quitargion=str_replace("_"," ",$name_p); echo $quitargion ?></div>
<div class="fondonivel"><?php echo $score_p ?></div>
<div class="mensajepublico">

<div class="mpflecha"></div>
<form method="POST">
<div class="mpdialogo">

<?php if($_SESSION['User'] == $name_p){ ?>
<span id="mensajepublico"><?php echo $mensaje_perfil ?></span>
<?php } else { ?>
<span id="mensaje"><?php echo $mensaje_perfil ?></span>
<?php }?>

<textarea style="height:120px;max-height:120px;max-width:250px;min-width:250px;width:250px; display:none" id="textarea" name="textarea" ><?php echo $mensaje_perfil ?></textarea>
<div style="float:left; margin-top:6px;text-align: center;width: 280px;display:none; font-size:12px" id="tx2">Puedes usar <strong><span id="contador"></span></strong> caracteres más.</div>

<div style="float:left; margin-top:10px; clear:both;text-align: center;width: 280px;display:none" id="tx3">
<input type="submit" name="submit" id="gtex" value="Guardar">
</div>

<div style="float:left; clear:both;text-align: center;width: 280px;display:none" id="tx4">
<img src="./imagenes/descarga_load.gif">
</div>

</div>
</form>


</div>


<div class="datosfp">
<div class="fdr_img">&nbsp;</div>
<div class="datosfp_iz">Fecha de registro:</div>

<div class="datosfp_der"> 
<?php  $quitargion=str_replace("/",".",$Registro_p); $fechats = strtotime($quitargion); switch (date('w', $fechats)) { case 0: echo "Domingo"; break; case 1: echo "Lunes"; break; case 2: echo "Martes"; break; case 3: echo "Miercoles"; break; case 4: echo "Jueves"; break; case 5: echo "Viernes"; break; case 6: echo "Sabado"; break; } ?> <?php echo $dia_a;?> de 
<?php  switch ($mes_a) { case 01: echo "Enero"; break; case 02: echo "Febrero"; break; case 03: echo "Marzo"; break; case 04: echo "Abril"; break; case 05: echo "Mayo"; break; case 06: echo "Junio"; break; case 07: echo "Julio"; break; case 08: echo "Agosto"; break; case 09: echo "Septiembre"; break; case 10: echo "Octubre"; break; case 11: echo "Noviembre"; break; case 12: echo "Diciembre"; break; } ?>
 del <?php echo $ano_a;?>.
</div>

<div class="hr"></div>
<div class="vpuv_img">&nbsp;</div>
<div class="datosfp_iz">Visto por última vez:</div>

<?php  if($Conexion_p == '1') { ?>
<div class="datosfp_der"> 
<?php  $quitargion=str_replace("/",".",$Registro_p); $fechats = strtotime($quitargion); switch (date('w', $fechats)) { case 0: echo "Domingo"; break; case 1: echo "Lunes"; break; case 2: echo "Martes"; break; case 3: echo "Miercoles"; break; case 4: echo "Jueves"; break; case 5: echo "Viernes"; break; case 6: echo "Sabado"; break; } ?> <?php echo $dia_a;?> de 
<?php  switch ($mes_a) { case 01: echo "Enero"; break; case 02: echo "Febrero"; break; case 03: echo "Marzo"; break; case 04: echo "Abril"; break; case 05: echo "Mayo"; break; case 06: echo "Junio"; break; case 07: echo "Julio"; break; case 08: echo "Agosto"; break; case 09: echo "Septiembre"; break; case 10: echo "Octubre"; break; case 11: echo "Noviembre"; break; case 12: echo "Diciembre"; break; } ?>
 del <?php echo $ano_a;?>.
</div>
<?php } else { ?>


<div class="datosfp_der">
<?php  $quitargion2=str_replace("/",".",$Conexion_p); $fechats = strtotime($quitargion2); switch (date('w', $fechats)) { case 0: echo "Domingo"; break; case 1: echo "Lunes"; break; case 2: echo "Martes"; break; case 3: echo "Miercoles"; break; case 4: echo "Jueves"; break; case 5: echo "Viernes"; break; case 6: echo "Sabado"; break; } ?> <?php echo $dia_b;?> de 
<?php  switch ($mes_b) { case 01: echo "Enero"; break; case 02: echo "Febrero"; break; case 03: echo "Marzo"; break; case 04: echo "Abril"; break; case 05: echo "Mayo"; break; case 06: echo "Junio"; break; case 07: echo "Julio"; break; case 08: echo "Agosto"; break; case 09: echo "Septiembre"; break; case 10: echo "Octubre"; break; case 11: echo "Noviembre"; break; case 12: echo "Diciembre"; break; } ?>
 del <?php echo $ano_b;?>.
</div>
 <?php  } ?>

<div class="hr"></div>
<div class="tdj_img">&nbsp;</div>
<div class="datosfp_iz">Tiempo de juego:</div><div class="datosfp_der"><?php echo $horasjugadas_p; ?> horas.</div>



<div class="hr"></div>
<div class="pais_img">&nbsp;</div>
<div class="datosfp_iz">País:</div><div class="datosfp_der"><img title="Peru" src="./imagenes/banderas/<?php echo $pais_perfil; ?>.png" align="top"> <?php echo $pais_perfil; ?></div>
<div class="hr"></div>
<div class="edad_img">&nbsp;</div>
<div class="datosfp_iz">Edad:</div>
<?php if($mostrar_perfil == 1) { ?>
<div class="datosfp_der"><?php echo $edadperfil ?> años.</div>
<?php } else { ?>
<div class="datosfp_der">No disponible.</div>
<?php } ?>

<div class="hr"></div>
</div>

<div class="cdiv">
<!--<center id="calificaciones">El jugador tiene 5 puntos de calificación.</center><input id="rating-input" type="number" value="5" style="margin-left:65px;" data-show-clear="false"/>-->
</div>

<div class="ediv">Estado</div>
<?php if($online_p == 0) { ?>
<div class="udc">Desconectado</div>
<?php } else { ?>
<div class="uc">Conectado</div>
<?php } ?>

<?php if($_SESSION['User'] == $name_p){ ?>
<div class="cfig"><a class="ajaxpopup" href="./configurar-perfil.php" title="Configurar perfil"><img src="./imagenes/config60.png" border="0"/></a></div>
<?php } ?>


</div>
</td>
</tr>
<tr class="bgtd"><td align="center" height="6"></td></tr>
</tbody>
</table>
<div style="float:left; width:991px; margin-top:10px;">
<table width="98%" cellspacing="1" cellpadding="0" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#e1e1e1"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;" id="logrosta"><h6>Logros</h6></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" colspan="2" id="tablalogros2" height="200" align="center" valign="middle">
<img src="./imagenes/descarga_load.gif">
<br/>
Cargando...
</td>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2" id="tablalogros" style="display:none">

<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/0.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Nivel <?php echo $score_p ?></span></div>
<div class="logrodesc">Alcanza el nivel <?php echo $score_p ?>.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado1">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el 
<?php  if($fecha_nivel == 0){ echo $dia_a; echo " de "; switch ($mes_a) { case 01: echo "Enero"; break; case 02: echo "Febrero"; break; case 03: echo "Marzo"; break; case 04: echo "Abril"; break; case 05: echo "Mayo"; break; case 06: echo "Junio"; break; case 07: echo "Julio"; break; case 08: echo "Agosto"; break; case 09: echo "Septiembre"; break; case 10: echo "Octubre"; break; case 11: echo "Noviembre"; break; case 12: echo "Diciembre"; break; } echo" del "; echo $ano_a; }else{ echo $fecha_nivel; } ?>.</i></div>
</div>
</div>
</div>

<div class="hrl"></div>

<?php if($sobre_ruedas == 1){?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/2.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Sobre ruedas</span></div>
<div class="logrodesc">Compra su primer vehículo.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado2">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_ruedas ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/2.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Sobre ruedas</span></div>
<div class="logrodesc" style="color:#727272">Compra su primer vehículo.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($automedicado == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/9.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Automedicado</span></div>
<div class="logrodesc">Consume 50 medicamentos.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado3">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_remedio ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/9.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Automedicado</span></div>
<div class="logrodesc" style="color:#727272">Consume 50 medicamentos.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($adicto_crack == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/10.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Adicto al crack</span></div>
<div class="logrodesc">Consume 50 gramos de crack.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado4">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_crack ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/10.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Adicto al crack</span></div>
<div class="logrodesc" style="color:#727272">Consume 50 gramos de crack.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($medico == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/11.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Medico profesional</span></div>
<div class="logrodesc">Salva la vida de 15 personas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado5">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_salvado ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/11.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Medico profesional</span></div>
<div class="logrodesc" style="color:#727272">Salva la vida de 15 personas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($tortuga == 1){?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/12.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Tortuga mayor</span></div>
<div class="logrodesc">Pesca una tortuga de 310Kg en el sur de Los Santos.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado6">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_tortuga ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/12.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Tortuga mayor</span></div>
<div class="logrodesc" style="color:#727272">Pesca una tortuga de 310Kg en el sur de Los Santos.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($techo_propio == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/5.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Techo propio</span></div>
<div class="logrodesc">Compra una casa en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado7">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_techo ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/5.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Techo propio</span></div>
<div class="logrodesc" style="color:#727272">Compra una casa en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($iniciando_negocios == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/3.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Iniciando negocios</span></div>
<div class="logrodesc">Compra un restaurante en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado8">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_negocio ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/3.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Iniciando negocios</span></div>
<div class="logrodesc" style="color:#727272">Compra un restaurante en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>



<div class="hrl"></div>

<?php if($lugar_trabajo == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/4.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Lugar de trabajo</span></div>
<div class="logrodesc">Compra una oficina en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado9">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_trabajo ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/4.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Lugar de trabajo</span></div>
<div class="logrodesc" style="color:#727272">Compra una oficina en cualquier lugar de San Andreas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<div class="hrl"></div>

<?php if($cerrajero == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/1.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Cerrajero nocturno</span></div>
<div class="logrodesc">Fuerza la cerradura de 10 casas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado10">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_forzado ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/1.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Cerrajero nocturno</span></div>
<div class="logrodesc" style="color:#727272">Fuerza la cerradura de 10 casas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<!-------------------------------->

<div class="hrl"></div>

<?php if($piloto_experto == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/7.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Piloto experto</span></div>
<div class="logrodesc">Gana 3 carreras en el estadio de Las Venturas.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado11">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_ganadas ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/7.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Piloto experto</span></div>
<div class="logrodesc" style="color:#727272">Gana 3 carreras en el estadio de Las Venturas.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<!-------------------------------->

<div class="hrl"></div>

<?php if($negocio_redondo == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/6.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Negocio redondo</span></div>
<div class="logrodesc">Cosecha 10 plantas de marihuana.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado12">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_cosecha ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/6.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Negocio redondo</span></div>
<div class="logrodesc" style="color:#727272">Cosecha 10 plantas de marihuana.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<!-------------------------------->

<?php if($marihuanero == 1){?>
<div class="logrotd">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/8.png);">
<span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas></div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#<?php echo $color_fondos ?>;" class="logrotit"> Marihuanero</span></div>
<div class="logrodesc">Fuma 30 porros.</div>
</div>
<div style="width: 290px; float:left; border-left:1px solid #d6d6d6; height:84px; position:relative">
<div style="position:absolute; bottom:0">
<div class="logrofecha completado completado13">Completado</div>
<div class="logrofecha"><img src="./imagenes/circulo-verde.png" align="top"/> <i>Logro conseguido el <?php echo $fecha_porros ?>.</i></div>
</div>
</div>
</div>
<?php } else { ?>
<div class="logrotd2">
<div data-percent="100" class="chart easyPieChart" style="background-image:url(./imagenes/logros/8.png);">
<div class="logroni"></div> <span style="background-color:#<?php echo $color_fondos ?>">&nbsp;10&nbsp;&nbsp;</span>
<canvas height="84" width="84"></canvas>
</div>
<div class="logroiz">
<div style="float:left;	width: 550px;"><span style="background-color:#cacaca;" class="logrotit"> Marihuanero</span></div>
<div class="logrodesc" style="color:#727272">Fuma 30 porros.</div>
</div>
<div style="width: 290px; float:left; height:84px; position:relative"></div>
</div>
<?php } ?>

<!-------------------------------->



<div class="hrl"></div>
<!--<center>Página creada en -0.971 segundos.</center>-->
<center>Página creada por Tanos.</center>


</td>
</tr>
</tbody>
</table>
</div>
<script src="./js/pie-chart.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#rating-input').rating({
			starCaptions: {1: "Muy malo", 2: "Malo", 3: "Bueno", 4: "Muy bueno", 5: "Excelente", 5.1: "Excelente"},
              min: 0,
              max: 5,
              step: 1,
              size: 'xs'
           });
           $("#rating-input").on("rating.change", function(event, value, caption) {
			   				$.ajax({
					type: "POST",
					url: "/agregarvoto.php",
					data: { a: "232430", v: value}
				})
				.done(function( msg ) {
					if(msg == 2){
						alert("Necesitas nivel 5 como mínimo para calificar.");
					}else{
						$("#calificaciones").html(msg);
					}
				});
							});
			$('.ajaxpopup').magnificPopup({
				type: 'ajax',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in',
				tClose: 'Cerrar (Esc)',
			});
			setTimeout(function() {
					$("#tablalogros2").hide();
				  	$("#tablalogros").fadeIn();
					$('.chart').easyPieChart({
						animate: 2000,
						lineWidth: 6,
						size: 84,
						trackColor: '#<?php echo $color_fondos2 ?>',
						barColor: '#<?php echo $color_fondos ?>',
						scaleColor: '#<?php echo $color_fondos ?>',
						lineCap: 'round'
					});
			}, 1000);
						$('#mensajepublico').click(function() {
				$('#mensajepublico').hide();
				$('#tx2').show();
				$('#tx3').show();
				$('#textarea').show();
				$('#textarea').focus();
			});
			$('#gtex').click(function() {
				$('#tx2').hide();
				$('#tx3').hide();
				$('#textarea').hide();
				$('#tx4').show();
				$.ajax({
					type: "POST",
					url: "/guardarmensaje.php",
					data: { a: "232430", v: $('#textarea').val()}
				})
				.done(function( msg ) {
					$('#tx4').hide();
					$("#mensajepublico").text(msg);
					$('#mensajepublico').fadeIn();
				});
			});
			$('#textarea').simplyCountable({
				counter: '#contador',
			  });
			      });
</script>
<script>
   $(function() {
   		
    });
</script>
</div>
</div>
<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; 2015 - 2018</div> </td>
</tr>
</table>
</body>
</html>
<?php } ?>