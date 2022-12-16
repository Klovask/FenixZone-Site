<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $name = $datos['Username']; 
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
$money = $datos['Money']; $score = $datos['Nivel']; $sexo = $datos['Sexo']; $vz = $datos['Moneda']; $online = $datos['Online']; $ropa = $datos['Skin']; $platabanco = $datos['Banco']; $faccion = $datos['Faccion']; $razon = $datos['razon']; $ban = $datos['Baneado']; $Conexion = $datos['Conexion']; } } else echo "<script>window.location='ingresar.php';</script>"; $dinerototal = $money+$platabanco; if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Cambia de sexo</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="stylesheet" href="./css/style.css">
<style>.ft1{width:300px;float:left;padding:10px;margin-left:35px;}.ft2{width:300px;float:left;padding:10px;}.ft1 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}.ft2 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}.datos2{background-color:#FFFFFF;padding:5px;float:left;width:250px;border-left:solid 1px #CCCCCC;border-right:solid 1px #CCCCCC;border-bottom:solid 1px #CCCCCC;}.datos2 span{text-align:right;float:right;font-weight:bold}.ft1 a{background-image:url(imagenes/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}.ft2 a{background-image:url(imagenes/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 10px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px}</style>

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

<script async="" src="./js/analytics.js"></script>
<script src="./js/jquery-1.9.1.js"></script>

<script>
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
<img src="/imagenes/alerta16.png" align="absmiddle"><font size=2> Tu direcci&oacute;n de correo <strong> '.$email.' </strong> no ha sido verificada todavÃ­a. (<a href="/enviar-verificacion.php">Enviar email de verificaci&oacute;n</a> / <a href="/cambiar-correo.php" title="Cambiar direcci&oacute;n de correo.">Cambiar direcci&oacute;n de correo</a>)
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

<td valign="middle" bgcolor="#FFFFCC" align="left" colspan="2"><img src="/imagenes/alerta16.png" align="absmiddle"><font size="2"> La direcciÃ³n de correo electrÃ³nico de su cuenta se cambia, para <strong>'.$nuevocorreo.'</strong> el dia '.$FinDiaC.'/'.$FinMesC.'/'.$FinAnoC.' - <a href="/ccc.php?c=960610bfe733ca3888de20d3957de080" title="Cancelar cambio de correo electrÃ³nico."><strong>Cancelar cambio</strong></font></a></td>
</tr>
</font>
</tbody>

</table>';
}
?>


<?php if($ban == 1): echo '
	<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</strong></td></tr>
</tbody>
</table>
</div>
	
	<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr>
<td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2.6px">Tu cuenta ha sido baneada por <strong>';?><?php echo $razon;?><?php echo '</strong>  el <strong>';?><?php echo $Conexion;?><?php echo '</strong>.</td>
</tr>
</tbody>
</table>'; endif; ?>

<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>



<div id="contenido-izquierdo">
<section class="elcontenedor">
<div class="login">
<h1>Cambio de sexo</h1>
<div style="background-image:url(/imagenes/Skin/<?php echo $ropa;?>.png); width:150px;height:120px;background-position: -20px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php  if($sexo == 1) { ?>
	<div style="background-image:url(/imagenes/Skin/11.png); width:150px;height:120px;background-position: -10px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php  } else { ?>
	<div style="background-image:url(/imagenes/Skin/250.png); width:150px;height:120px;background-position: -10px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php  } ?>
<div style="float:left; position:absolute;margin-left: 135px;margin-top: 50px;"><img src="/imagenes/flecha-derecha.png"/></div>
<div style="float:left; border:solid #C9C9C9 1px; margin-left:5px; padding:10px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12) inset; width:278px; font-weight:bold; background-color:#E7E7E7; margin-bottom:10px;"><font size="2px">Costo: <span style="float:right; color:green" id="ozn">10<?php echo $Diminutivo?></span></div>
<input name="viejaa" type="password" maxlength="30" placeholder="Contraseña" style="display:none"/>
<input name="cambiar" type="hidden" value="1"/>
<p><input name="nueva" type="password" maxlength="30" placeholder="Ingresa tu contraseña" id="psw"/></p>
<p id="cmp">
<input type="submit" name="commit" value="Realizar cambio" id="cambiar-sexo"><img src="/imagenes/spinner.gif" style="display:none; margin-top:15px;" id="cargando"/>
</p>
</div>
</section>
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
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="panel-todo" title="<?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="actual1" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar de sexo</a>
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
<script>
var Comprando = 0;
	$( "#cambiar-sexo" ).click(function() 
	{
		if(Comprando == 0){
			if($("#psw").val().length < 3)
			{
				$("#psw").focus();
				$("#psw").attr('style','outline-color: #fff584; border-color:#ffcba1;');
				return;
			}
			Comprando = 1;
			$("#cargando").fadeIn();
			$("#cambiar-sexo").hide();
			$("#psw").hide();
			$.post("cambiar-sexo.php", { ps: $("#psw").val(),sx: '2'} , 
			function(data) 
			{
				if(data == 1)
				{
					alert("ERROR: Inicia sesión nuevamente.");
					location.href='./ingresar.php';
				}
				else if(data == 2)
				{
					$("#ozn").attr('style','float:right; color:red');
					alert("ERROR: Necesitas 10<?php echo $Diminutivo?> para realizar el cambio de sexo.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 4)
				{
					alert("ERROR: Tienes que salir del juego para cambiar de sexo.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 9)
				{
					alert("ERROR INTERNO, intenta nuevamente.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 5)
				{
					alert("ERROR: Contraseña incorrecta.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
					$("#psw").focus();
					$("#psw").attr('style','outline-color: #fff584; border-color:#ffcba1;');
				}
				else if(data == 3)
				{ 
					$("#cmp").html("<center><strong><span style=\"color:green;\">Cambio realizado corractamente.</span></strong></center>");
					setTimeout(
						function(){
							window.location = './cuenta.php';
						},
					1000);
				}
				else
				{
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
			});
		}
	});
</script>
</body>
<div id="lean_overlay"></div>
</html>