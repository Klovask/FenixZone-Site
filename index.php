<?php
require_once "seguridad/sql_inject.php";
$bDestroy_session = TRUE;
$url_redirect     = 'index.php';
$sqlinject        = new sql_inject('./log_file_sql.log', $bDestroy_session, $url_redirect);
session_start();
error_reporting(0);
include_once('./kev/pdo.php');
include_once('./foro/SSI.php');
if (isset($_SESSION['User'])) {
    $User = $_SESSION['User'];
    try {
        $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
        $stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
        $stmt->execute();
        while ($datos = $stmt->fetch()) {
            $name       = $datos['Username'];
            $money      = $datos['Money'];
            $score      = $datos['Nivel'];
            $vz         = $datos['Moneda'];
            $ropa       = $datos['Skin'];
            $platabanco = $datos['Banco'];
            $faccion    = $datos['Faccion'];
            $razon      = $datos['razon'];
            $adm        = $datos['Admin'];
            $ban        = $datos['Baneado'];
            $Conexion   = $datos['Conexion'];
        }
    }
    catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
$dinerototal = $money + $platabanco;
if ($Conexion == '1') {
    echo "<script>window.location='reg.php?u=2';</script>";
}
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title><?php
echo $NombreServidor;
?> Roleplay - San Andreas Multiplayer (SAMP en Espa&ntildeol)</title>
<style>
.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}
</style>
<meta name="description" content="El mejor servidor de SAMP Roleplay, el m&aacutes grande, con m&aacutes de 100 usuarios conectados simult&aacuteneamente todos los d&iacuteas. En espa&ntildeol." />
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="stylesheet" href="./css/default.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
</head>
<body>

<script>
function Ocultar(){
      $('#banner').fadeOut();
}
</script>
</head>
<body>
<link rel="stylesheet" href="./css/popup-azul2.css" type="text/css" media="screen"/>
<div id="popup1" style="top: 50%;left: 50%;position: absolute;">
<div class="overlay" id="overlay">
<div class="popup" id="rect">
<span class="close" title="Cerrar" id="cerrar" style="background-color:transparent;">&times;</span>
<div class="content">
<div class="popup-caption" style="display: block; padding: 10px;top: 0;left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:22px;">PRENDAS EN <font color="#29c8ff">VENTA</font></span>
<br>Prendas especiales para comenzar un nuevo a&ntilde;o con personalidad.
</span>
</div>
<div class="popup-caption" style="display: block; padding: 10px; bottom:0; left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:18px;" class="botoncomprar"><a href="comprar-prendas.php">VER PRENDAS</a></span>
<br>Venta &uacutenica desde el 1 de Diciembre hasta el 31 de Enero del a&ntildeo pr&oacuteximo.
</span>
</div>
<div id="efecto-fuego"></div>
<div id="efecto-fuego2"></div>
<div id="logo-min"></div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $("#cerrar").click(function(){
        $("#popup1").hide();
    });
     $("#overlay").click(function(event){
         if($(event.target).html().indexOf("rect") >= 0){
            $("#popup1").hide();
         }
    });
</script>



<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
 
<tr>
<td width="997">
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


<?php
if (isset($_SESSION['User'])) {
?>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesi&oacuten - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>

<?php
}
if (!isset($_SESSION['User'])) {
?>
<div class="botones-login"><img src="../imagenes/login.png"> <a href="../ingresar.php" title="Iniciar sesi&oacuten" border="0">Iniciar sesi&oacuten</a></div>

<?php
}
?>
</div>
<div id="menu-superior">
<ul>
<li id="principal-ac"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/index.php">Foro</a></li>

<?php
if (!isset($_SESSION['User'])) {
?>
<li id="tucuenta"><a href="./ingresar.php">Tu cuenta</a></li>
<?php
} else {
?>
<li id="tucuenta"><a href="./cuenta.php">Tu cuenta</a></li>
<?php
}
?>


<?php
if (!isset($_SESSION['User'])) {
?>
   <li id="crear-cuenta"><a href="./nuevo.php">Crear cuenta</a></li>
<?php
} else {
?>
   <li id="cuenta-creada"><a></a></li>
<?php
}
?>
</ul>
<div class="invitaciones-pendientes">
<?php
include_once('./invitaciones/invitacion.php');
?> 
</div>
</div>

<?php
if (isset($_SESSION['User'])) {
?>
<?php
if ($ban == 1):
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
<tr>
<td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2.6px">Tu cuenta ha sido baneada por <strong>';
?><?php
    echo $razon;
?><?php
    echo '</strong>  el <strong>';
?><?php
    echo $Conexion;
?><?php
    echo '</strong>.</td>
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
<td valign="middle" bgcolor="SKY BLUE" align="left" colspan="1" style="color:white"><img src="./imagenes/iconos/vz.png" align="absmiddle"><font size="2.6px"> Ingresaste como ';?><?php if($adm== 1){echo"Ayudante";} if($adm== 2){echo"Moderador del canal de dudas";} if($adm== 3){echo"Moderador del juego";} if($adm== 4){echo"Moderador global";} if($adm== 5){echo"Moderador del foro";} if($adm== 6){echo"Admin";} if($adm== 7){echo"Fundador";} if($adm> 7){echo"Rango desconocido";}?><?php echo '</strong>.</font></td>
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


<div id="contenido">

<?php
}
?>
</ul>

<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="./imagenes/ctrl.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php
echo $NombreServidor;
?> - Roleplay</div>
<div style="height:190px; background-color:#FFF; padding-top:131px; padding-left:325px;" id="cargando-slider"><img src="./imagenes/cargando_g.gif"/></div>
<div id="wrapper">
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
<img src="./imagenes/images/6.gif" data-thumb="./imagenes/images/6.gif" alt="" title="#tab-carreras"/>
<img src="./imagenes/images/2.gif" data-thumb="./imagenes/images/2.gif" alt="" title="#tab-restaurante"/>
<img src="./imagenes/images/3.gif" data-thumb="./imagenes/images/3.gif" alt="" title="#tab-policia"/>
<img src="./imagenes/images/4.gif" data-thumb="./imagenes/images/4.gif" alt="" title="#tab-medico"/>
<img src="./imagenes/images/5.gif" data-thumb="./imagenes/images/5.gif" alt="" title="#tab-autos"/>
<img src="./imagenes/images/1.gif" data-thumb="./imagenes/images/1.gif" alt="" title="#tab-municipalidad"/>
</div>
<div id="tab-municipalidad" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">EDIFICIO <font color="#FF9900">MUNICIPAL</font></span>
<br>Este moderno edificio cuenta con servicio de gr&uacute;a, compra de veh&iacute;culos y propiedades.
</span>
</div>
<div id="tab-restaurante" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">TU PROPIO <font color="#FF9900">NEGOCIO</font></span>
<br>Compra tu propio negocio, contrata empleados y gana dinero vendiendo productos.
</span>
</div>
<div id="tab-policia" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">CONTROL DEL <font color="#FF9900">CRIMEN</font></span>
<br>La polic&iacute;a controla San Andreas para que sea un lugar m&aacute;s seguro y t&uacute; puedes ser uno de ellos.
</span>
</div>
<div id="tab-medico" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">SERVICIO <font color="#FF9900">M&Eacute;DICO</font></span>
<br>M&eacute;dicos capacitados est&aacute;n las 24 horas del d&iacute;a a la espera de cualquier emergencia.
</span>
</div>
<div id="tab-autos" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">VEH&Iacute;CULOS <font color="#FF9900">EN VENTA</font></span>
<br>Tenemos la m&aacute;s amplia variedad de veh&iacute;culos disponibles en venta.
</span>
</div>
<div id="tab-carreras" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;">TORNEO DE <font color="#FF9900">CARRERAS</font></span>
<br>Torneos mensuales con fabulosos premios te esperan, compite y gana puntos en cada carrera.
</span>
</div>
</div>
<script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
      effect: 'boxRain',
      pauseTime: 8000,
      beforeChange: function(){
        $('#msn').hide();
        $(".nivo-caption").hide();
        $(".nivo-caption").css("padding","0");
      },
      afterChange: function(){
        $(".nivo-caption").css("padding","10px");
        $(".nivo-caption").fadeIn(1000);
        $('#msn').fadeIn(1500);
      },
      afterLoad: function(){
        $('#cargando-slider').hide();
        $(".nivo-caption").css("padding","10px");
        $(".nivo-caption").fadeIn(1000);
        $('#msn').fadeIn(1500);
      }
    });
    });
    </script>
</div></div>
<?php
include_once('./foro/SSI.php');
?>

<div class="td-gr">
<div class="icono-td"><img src="./imagenes/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Actualizaci&oacute;n obligatoria del cliente de SA-MP</a>
</div>
<div class="news_body" style="padding: 10px;">
<strong>Para jugar en <?php echo $NombreServidor?> apartir de hoy necesitar&aacute;n instalar la versi&oacute;n 0.3.7 de SAMP.</strong><br/><br/>Si no la instalan, no podr&aacute;n entrar a jugar en nuestros servidores. <br/>A continuaci&oacute;n dejamos diferentes enlaces para que descarguen el nuevo cliente.<br/><br/><div align="center"><a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" class="bbc_link" target="_blank" id="linkbbc">

<img src="./imagenes/037es.png" alt="" class="bbc_img"/></a><br/></div><br/>
Enlace de descarga 1: <strong><a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" class="bbc_link" target="_blank" id="linkbbc">http://files.sa-mp.com/sa-mp-0.3.7-install.exe</a></strong></br>
Enlace de descarga 2: <strong><a href="http://dl.gta-sa-mp.de/samp/sa-mp-0.3.7-install.exe" class="bbc_link" target="_blank" id="linkbbc">http://dl.gta-sa-mp.de/samp/sa-mp-0.3.7-install.exe</a></strong></br>
<br/>Si tienen alguna duda o problema, publiquen en el foro para que podamos ayudarlos.<div class="hr"></div>

<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Nuevo servidor</a>
</div>
<div class="news_body" style="padding: 10px;">El servidor, como as&iacute tambi&eacuten la web, se encuentran en construcci&oacuten. En este foro podr&aacuten ver los cambios realizados en cada versi&oacuten de <strong><?php echo strtoupper($Diminutivo)?>:RP</strong><br>
  <br>Aprovecho para avisarles que por el momento no necesitamos admins.<br><br>Un saludo Kropper<div class="hr"></div>
<div><a href"#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Informaci&oacute;n importante</a>
</div>
<div class="news_body" style="padding: 10px;">Ya no se sacan bans, as&iacute; que ya saben, <strong>si no quieren ser baneados, no usen cheats</strong>. Mensajes privados por asuntos de baneos ser&aacute;n ignorados. Si crean temas en el foro reclamando por alg&uacute;n ban, se les banear&aacute; la cuenta del foro tambi&eacute;n.<div class="hr"></div>
<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Cambios y mejoras en el servidor</a>
</div>
<div class="news_body" style="padding: 10px;"><ul class="bbc_list"></ul>
<strong><span style="color: orange;" class="bbc_color"><span style="font-size: 13pt;" class="bbc_size">Cambios <?php echo strtoupper($Diminutivo)?>:RP</span></span></strong><br/>
<br/>

<strong><span style="color: green;" class="bbc_color">v0.00</span></strong><br/>
<ul>
        <li>Se creo la Gamemode.</li>
</ul>

<strong><span style="color: black;" class="bbc_color">v0.01</span></strong><br/>
<ul>
        <li>Se agregon las casas de robo faltantes.</li>
		<li>Se modificaron algunos textos.</li>
</ul>

<strong><span style="color: black;" class="bbc_color">v1.24</span></strong><br/>
<ul>
        <li>Se agrego el comando /ref para todas las bandas.</li>
		<li>Se arreglo un error que habia en algunas tiendas con los iconos de compra de ropa.</li>
		<li>Se modificaron algunos mapeos.</li>
</ul>

<strong><span style="color: black;" class="bbc_color">v1.23</span></strong><br/>
<ul>
        <li>Se modificaron algunos modulos en la web.</li>
		<li>Ahora la compra de algunos skins seran via codigos en el servidor.</li>
		<li>S... <a href="#">[Leer m&aacute;s]</a></li>
</ul>

<br/>

<div class="hr"></div>
<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div>

</div>
</div>
</div>
<div id="menu-derecho">
<!---->
<?php
if (isset($_SESSION['User'])) {
?>
<div class="td">
<div class="icono-td"><img src="./imagenes/dinero_p.png"></div>
<div class="titulo-td">Tu cuenta</div>
</div>

<div class="bloque-monedas">
<div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px"><?php
    echo number_format($vz, 0, '', '.');
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
<?php
}
?>
<!---->

<div class="td-menu">

<div class="icono-td"><img src="./imagenes/casa.png"/></div>
<div class="titulo-td">Tus opciones</div>
</div>

<div class="bloque-menu">
<a href="cuenta.php" class="panel-principal" title="Panel principal con informaci&oacute;n de tu cuenta">&raquo; Panel principal</a>
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
<?php
if (isset($_SESSION['User'])) {
?>
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;n">&raquo; Salir</a>
<?php
} else {
?>
<a href="ingresar.php" class="panel-todo" title="Ingresar">&raquo; Ingresar</a>
<?php
}
?>
</div>
<hr>
<a href="/descargas.php" title="Descargas" style="padding-top: 5px;float: left;margin-bottom: 8px;border-top: #DEDEDE 1px solid;margin-top: 5px;border-bottom: #DEDEDE 1px solid;padding-bottom: 5px;"><img src="imagenes/descargas-boton.png"></a>
<hr/>
<hr>
<?php
if (isset($_SESSION['User'])) {
?>
<span style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;" class="rounded-img">
<a href="invitar-amigo.php" title="Click aqu&iacute; para m&aacute;s informaci&oacute;n">
<span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;">
<img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0; border:0">
</span>
</a>
</span>
<?php
}
?>
<hr>
</hr>

<!---->
<div class="td">
<div class="icono-td"><img src="./imagenes/diario.png"/></div>
<div class="titulo-td">
Jugadores Conectados
</div>
</div>
<div class="bloque">
<span id="total" style="font-size:35px; color:#050;text-shadow: 0 1px 0 #FFFFFF; margin-left:35%"><center><?php if(!empty($aInformation)){echo $aInformation['Players'];}?></center></span>
</div>

<?php if($activar_es == 1) {?>
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