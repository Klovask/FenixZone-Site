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
		
		$name = $row['Username'];
        $money = $row['Money'];
		$email = $row['Email'];
		$exp = $row['Experiencia'];
		$idplayer = $row['ID'];
		$adm = $row['Admin'];
		$arrestado = $row['Registro'];
		$horasdejuego = $row['Sexo'];
		$numerotlf = $row['Numero'];
		$vida = $row['Vida'];
		$Chaleco = $row['Chaleco'];
		$crack = $row['Crack'];
        $score = $row['Nivel'];
		$medicamentos = $row['Medicamentos'];
		$guia = $row['Agenda'];
		$piezas = $row['Materiales'];
		$repuestos = $row['Repuestos'];
		$radio = $row['Radio'];
		$totems = $row['totemscompletados'];
		$fz = $row['Moneda'];
		$pistola = $row['WP1'];
		$escopeta = $row['WP2'];
		$subfusil = $row['WP3'];
		$asalto = $row['WP4'];
		$rifle = $row['WP5'];
		$blanca = $row['WP6'];
		$granada = $row['WP7'];
		$regalo = $row['WP8'];
		$expcamionero = $row['ExpCamionero'];
		$expbasurero = $row['ExpBasurero'];
		$exparmero = $row['ExpArmero'];
		$expladron = $row['ExpLadron'];
		$exptransportista = $row['ExpTransportista'];
		$nivelcamionero = $row['NivelCamionero'];
		$nivelbasurero = $row['NivelBasurero'];
		$nivelarmero = $row['NivelArmero'];
		$nivelladron = $row['NivelLadron'];
		$niveltransportista = $row['NivelTransportista'];
		$nivelpiloto = $row['NivelPiloto'];
		$CodigoKEY = $row['CodigoKEY'];
		$CPendiente = $row['CPendiente'];
		$nuevocorreo = $row['nuevocorreo'];
		$FinDiaC = $row['FinDiaC'];
		$FinMesC = $row['FinMesC'];
		$FinAnoC = $row['FinAnoC'];
		$exppiloto = $row['ExpPiloto'];
		$fechaban = $row['fecha'];
		$EstadoKEY = $row['EstadoKEY'];
		$razonban = $row['razon'];
		$ban = $row['ban'];
		$expfaltante = $row['expfaltante'];
		$ropa = $row['Skin'];
		$platabanco = $row['Banco'];
		$numerocuentabancaria = $row['CuentaB'];
		$posibilidad = $row['changenamefree'];
		$auto1 = $row['Auto1'];
		$auto2 = $row['Auto2'];
		$auto3 = $row['Auto3'];
		$auto4 = $row['Auto4'];
		$faccion = $row['Faccion'];
		$codigoproh = $row['ID'];
		$conexion = $row['Conexion'];
		$Online = $row['Online'];
		
		$totem = $row['totem'];
		$ent_totem = $row['ent_totem'];
		$totems = $row['totems'];
    } 
} 
else header('location: entrar.php');
$dinerototal = $money+$platabanco;

?>
<?php
if($conexion== 1){
    header('location: reg.php?u=2');
}
?>
<?php
require("./conectados/samp_query.php");
try
{
    $rQuery = new QueryServer( $serverIP, $serverPort );

    $aInformation = $rQuery->GetInfo( );
    $aServerRules = $rQuery->GetRules( );
    $aBasicPlayer = $rQuery->GetPlayers( );
    $aTotalPlayers = $rQuery->GetDetailedPlayers( );

    $rQuery->Close( );
}
catch (QueryServerException $pError)
{

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo $NombreServidor?> Roleplay - Invitar a un amigo</title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<script src="./js/jquery-latest2.js"></script>

<style>
label{display:inline-block;width:5em;}
.ui-tooltip{padding:5px;position:absolute;z-index:9999;max-width:300px;-webkit-box-shadow:0 0 5px #aaa;box-shadow:0 0 5px #aaa;background-color:#FFC;border:1px #999999 solid;}
body .ui-tooltip{border-width:1px;}.progress-label{float:left;text-align:center;margin-top:2px;width:100%;text-shadow:1px 1px 0 #fff;}
.texto-barra{float:left;margin-top:3px;text-align:center;text-shadow:1px 1px 0 #FFFFFF;width:100%;}
.ui-barra{background:url("imagenes/fondo-barra2.png") repeat-x scroll 50% 50% #CCCCCC;color:#222222;border:1px solid #AAAAAA;font-weight:bold;}
.fondo-barra{border-radius:4px;border:1px solid #AAAAAA;color:#222222;height:20px;overflow:hidden;text-align:left;float:left;width:93%}
.totem-16{width:16px;height:16px;background-image:url(imagenes/totemx16.png);float:left;margin-left:5px;margin-top:2px;}
.totem-si{width:16px;height:16px;background-image:url(imagenes/si.png);float:left;margin-left:5px;margin-top:2px;}
.totem-no{width:16px;height:16px;background-image:url(imagenes/no.png);float:left;margin-left:5px;margin-top:2px;}
.totem-gif{width:16px;height:16px;background-image:url(imagenes/spinner.gif);float:left;margin-left:5px;margin-top:2px;}
.usuario-td{color:#003366;font-size:12px;}</style>


</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tbody><tr>
<td width="997">

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
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

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
<td valign="middle" bgcolor="SKY BLUE" align="left" colspan="1" style="color:white"><img src="./imagenes/iconos/vz.png" align="absmiddle"><font size="2.6px">Te has logueado como ';?><?php if($adm== 1){echo"Ayudante";} if($adm== 2){echo"Moderador del canal de dudas";} if($adm== 3){echo"Moderador del juego";} if($adm== 4){echo"Moderador global";} if($adm== 5){echo"Moderador del foro";} if($adm== 6){echo"Administrador";} if($adm== 7){echo"Fundador";} if($adm> 7){echo"Rango desconocido";}?><?php echo '</strong>.</font></td>
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

<div style="background-image:url(./imagenes/invitar-amigo-bg.png); width:653px; height:419px;margin-left: 15px;margin-top: 12px;">
<div style=" font-size:16px; color:#000000;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;margin-left: 25px;margin-top: 15px; float:left;width: 100%;">Invitar a un amigo</div>
<div style="float:left;width: 94%; margin-left:20px; margin-top:160px; font-size:12px;">
<table width="100%" cellpadding="4">
<tbody><tr style="font-size:15px; color:#036;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;"><td width="33%" align="center">Env&iacute;a una invitaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="36%" align="center">Juega con &eacute;l&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="30%" align="center">Gana premios &uacute;nicos</td></tr>
<tr><td valign="top"><div style="width:180px"><font size="2px">Invita a un amigo o familiar envi&aacute;ndole el enlace de invitaci&oacute;n, esto le facilitar&aacute; el proceso para comenzar a jugar.</div></td><td valign="top">
<div style="width:190px"> <font size="2px">Beneficios al jugar con tu amigo:
<hr><font size="2px"> * GPS para /localizar amigo
<hr><font size="2px"> * Blindaje de guardaespaldas aumentado a 70%
<hr><font size="2px"> * Ganancias extras en trabajos grupales.
<hr><font size="2px"> * Llamadas y SMS gratuitos entre ustedes.
</div>
</td><td valign="top"><font size="2px">Cuando el sistema certifique que el invitado es un jugador estable, se te entregar&aacute; 1 Totem.<br><br>Con los totems podr&aacute;s comprar fabulosas prendas de vestir para personalizar tu personaje.</td></tr>
</tbody></table>
</div>
</div>
<div style="background-image:url(./imagenes/enlace-invitacion-bg.png); width:653px; height:93px;margin-left: 15px;">
<div style=" font-size:16px; color:#000000;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;margin-left: 25px;margin-top: 15px; float:left;width: 100%;">Enlace de invitaci&oacute;n</div>
<div style="float:left;width: 94%; margin-left:20px; margin-top:5px"><?php echo '<input name="" type="text" value="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/nuevo.php?u='.$idplayer.'" style="font-size:16px; font-family: verdana; color:#000000;text-shadow: 0 1px 0 #FFFFFF; border:1px solid #CCC; padding:5px; width:98%; text-align:center; background-color:#FF9">';?></div>
</div>
<hr>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/si.png"></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Listado de jugadores invitados</div>
<center><hr>

<style type="text/css">.Estilo1 {font-size: 13px}</style>

<?php  $ss_inv_count = 0; $stm = $con->prepare("SELECT * FROM usuarios WHERE totem = :name"); $stm->bindParam(':name', $name, PDO::PARAM_STR); $stm->execute(); ?>
<table bgcolor="#CCCCCC" cellspacing="1" width="98%" cellpadding="10">
<tr>
<td bgcolor="#E6E6E6" width="10%"><strong><span class="Estilo1">Jugador</span></strong></td>
<td bgcolor="#E6E6E6" width="22%"><strong><span class="Estilo1">Fecha de registro</span></strong></td>
<td bgcolor="#E6E6E6" width="68%"><strong><span class="Estilo1">Porcentaje de certificado</span></strong> <a href="#" title="Cuando el porcentaje llegue al 100%, recibir&aacute;s un Totem."><strong><span class="Estilo1">?</span></strong></a></td>
</tr>
<?php  while($inv_afiliater = $stm->fetch()) { $ss_inv_count++; $calc_porciento = (100*$inv_afiliater['Nivel'])/4; if($calc_porciento > 100) { $calc_porciento = 100; } if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 0 && $Online == 0 && $inv_afiliater['Online'] == 0) { $state_inv = 'totem-si'; $st = $con->prepare("UPDATE usuarios SET totems = totems+3 WHERE Username = :name"); $st->bindParam(':name', $name, PDO::PARAM_STR); $st->execute(); $stt = $con->prepare("UPDATE usuarios SET ent_totem='1' WHERE Username = :invitado"); $stt->bindParam(':invitado', $inv_afiliater['Username'], PDO::PARAM_STR); $stt->execute(); } else if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 0 && $Online == 1 || $inv_afiliater['Online'] == 1) { $state_inv = 'totem-gif'; } else if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 1) { $state_inv = 'totem-16'; } else { $state_inv = 'totem-no'; } ?>
<tr>
<td bgcolor="#FFFFFF" class="usuario-td"><strong><?php echo $inv_afiliater['Username']; ?></strong></td>
<td bgcolor="#FFFFFF" align="center"><span class="Estilo1"><?php echo $inv_afiliater['Registro']; ?></span></td>
<td bgcolor="#FFFFFF"><div class="fondo-barra"><div class="texto-barra"><span class="Estilo1">Certificado de jugador estable</span> <strong><span class="Estilo1"><?php echo round($calc_porciento, 2); ?>%</span></strong><span class="Estilo1"> completado.</span></div><div class="ui-barra" style="height:100%;margin: -1px; width:<?php echo $calc_porciento; ?>%"></div></div>
<div class="<?php echo $state_inv; ?>" title="Cuando esta barra se complete, recibir&aacute;s un totem. Pero para que esto ocurra, el sistema tiene que detectar que tu amigo sea un jugador real y estable."></div></td>
</tr>

<?php  } ?>

</table>

<?php  if($ss_inv_count == 0) { ?>
		<center><strong><hr/><font size="2.5px">No se registr&oacute; ninguna persona con el enlace de invitaci&oacute;n.<hr/></strong></center>
<?php  } ?>

<hr></center> </div>
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
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="panel-todo" title="<?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
<a href="invitar-amigo.php" class="actual1" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
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
</body>
<div id="lean_overlay"></div>
</html>