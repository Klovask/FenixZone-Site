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
        $vz                 = $row['Moneda'];
        $marihuana          = $row['Marihuana'];
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
		$expmedico        = $row['ExpMedico'];
        $expbasurero        = $row['ExpBasurero'];
        $expcamionero       = $row['ExpCamionero'];
        $exptransportista   = $row['ExpTransportista'];
        $nivelarmero        = $row['NivelArmero'];
        $nivelladron        = $row['NivelLadron'];
        $nivelpiloto        = $row['NivelPiloto'];
        $nivelminero        = $row['NivelMinero'];
        $nivelpescador      = $row['NivelPescador'];
		$nivelmedico      = $row['NivelMedico'];
        $nivelbasurero      = $row['NivelBasurero'];
        $nivelcamionero     = $row['NivelCamionero'];
        $niveltransportista = $row['NivelTransportista'];
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php
echo $NombreServidor;
?> Roleplay - Tu cuenta</title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="stylesheet" type="text/css" href="./css/layer.css">
<style>body{font-size: 13px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 6px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px;background-color:#00CC00}</style>
<link rel="stylesheet" href="./css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
<script>
 var cargadocambiarcorreo = 0;
$(function() {
    $( "#tabs" ).tabs({
        beforeLoad: function( event, ui ) {
            ui.panel.html("<div style=\"padding-left:300px;padding-top:80px;padding-bottom:100px;font-size:15px;\"><img src=\"./imagenes/spinner.gif\"> Cargando...</div>");
            ui.jqXHR.error(function() {
                ui.panel.html("Problema al cargar. Por favor, recarga la p&aacute;gina." );
            });
        }
    });
    $('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });
    $("#cambiar-correo").click(function() {
        if(cargadocambiarcorreo == 0){
            $("#cargando-cambiar-correo").fadeIn();
            $("#cambiar-correo-ct").load("_cambiarcorreo.php",  function(){
                $("#cargando-cambiar-correo").hide();
                $("#cambiar-correo-ct").fadeIn(800);
            });
        }else{
            $("#cambiar-correo-ct").fadeIn(800);
        }
    });
});

</script>

<script>
$(function() {
    $("#email")
         .mouseover(function() {
        $("#email").html("<?php
echo $email;
?>");
        })
        .mouseout(function() {
        $("#email").html("***********<?php
echo $dominio;
?>");
        });
});
</script>
</head>
<body>
<div style="width:0;height:0; overflow:hidden"><img src="./imagenes/spinner.gif"></div>
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
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario">
<?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>

</div>
<div id="menu-superior">
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>

<div class="invitaciones-pendientes">
<?php
include_once('./invitaciones/invitacion.php');
?> 
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
<img src="/imagenes/alerta16.png" align="absmiddle"><font size=2> Tu direcci&oacute;n de correo <strong> '.$email.' </strong> no ha sido verificada todav&iacute­a. (<a href="/enviar-verificacion.php">Enviar email de verificaci&oacute;n</a> / <a href="/cambiar-correo.php" title="Cambiar direcci&oacute;n de correo.">Cambiar direcci&oacute;n de correo</a>)
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

<td valign="middle" bgcolor="#FFFFCC" align="left" colspan="2"><img src="/imagenes/alerta16.png" align="absmiddle"><font size="2"> La direcci&iacute³n de correo electr&iacute³nico de su cuenta se cambia, para <strong>'.$nuevocorreo.'</strong> el dia '.$FinDiaC.'/'.$FinMesC.'/'.$FinAnoC.' - <a href="/ccc.php?c=960610bfe733ca3888de20d3957de080" title="Cancelar cambio de correo electr&iacute³nico."><strong>Cancelar cambio</strong></font></a></td>
</tr>
</font>
</tbody>

</table>';
}
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
?>

<div id="contenido-izquierdo">
<div style="height:160px; float:left; padding-top:20px">
<table width="680" align="center" id="bloquesp">
<tbody><tr>
<td align="center" width="226"><a href="./cambiar-nombre.php" title="Cambiar nombre"><img src="./imagenes/nuevo-panel/cambiar-nombre.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button">Cambiar nombre</button></a></td>
<td align="center" width="227"><a href="./comprar-vehiculos.php" title="Comprar veh&iacute;culos"><img src="./imagenes/nuevo-panel/vehiculos.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button">Comprar veh&iacute;culos</button></a></td>
<td align="center" width="227"><a href="./comprar-ropa.php" title="Comprar ropa"><img src="./imagenes/nuevo-panel/comprar-ropa.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button">Comprar ropa</button></a></td>
<td align="center" width="227"><a href="./cnum.php" title="Cambiar número"><img src="./imagenes/nuevo-panel/cambiar-numero.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button">Cambiar número</button></a></td>
</tr>
</tbody></table>
</div>
<div style="float:left; width:690px">
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="info" aria-labelledby="ui-id-1" aria-selected="true"><a href="#info" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-1">Tu cuenta</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-1" aria-labelledby="ui-id-2" aria-selected="false"><a href="vehiculos.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-2">Veh&iacute;culos</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="propiedades.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7">Propiedades</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="prendas.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7">Prendas</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="banco.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7">Cuenta bancaria</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="firmas.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7">Firmas</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="log.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7">Log de acceso</a></li>
</ul>
<div id="info" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF; font-size: 12px;"><strong>Informaci&oacute;n de tu cuenta</strong></td></tr>
<tr>
<?php
$dinerototal = $money + $platabanco;
if ($guia == "No") {
    $guia == "No tiene";
}
if ($radio == "No") {
    $radio == "No tiene";
}
if ($guia == 1) {
    $guia == "Si tiene";
}
?>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2">
<div style="padding:10px; float:left; width:290px; margin-left:5px">
<!--<div style="float:left"><img src="./imagenes/tarjeta.png">&nbsp;</div><div>&nbsp;<font size="2px">Nombre completo:<span style="float:right;"><a href="perfil.php?p=<?php
echo $name;
?>"><?php
echo $name;
?></a></span></div>-->
<div style="float:left"><img src="./imagenes/tarjeta.png">&nbsp;</div><div>&nbsp;<font size="2px">Nombre completo:<span style="float:right;"><a title="Perfil de usuario público." href="./u/<?php
echo $name;
?>"><?php
echo $name;
?></a></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/dinero.png">&nbsp;</div><div>&nbsp;Dinero total:<span style="float:right; color:green;">$<?php
echo number_format($dinerototal, 0, '', '.');
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/nivel2.png">&nbsp;</div><div>&nbsp;Nivel:<span style="float:right;"><?php
echo $score;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/reputacion.png">&nbsp;</div><div>&nbsp;Reputaci&oacute;n:<span style="float:right;"><?php
echo $exp;
?>/<?php
switch ($score) {
    case 1:
        echo 7;
        break;
    case 2:
        echo 12;
        break;
    case 3:
        echo 19;
        break;
    case 4:
        echo 31;
        break;
    case 5:
        echo 52;
        break;
    case 6:
        echo 86;
        break;
    case 7:
        echo 143;
        break;
    case 8:
        echo 239;
        break;
    case 9:
        echo 397;
        break;
    case 10:
        echo 662;
        break;
    case 11:
        echo 1103;
        break;
    case 12:
        echo 1838;
        break;
    case 13:
        echo 3063;
        break;
    case 14:
        echo 5105;
        break;
}
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/arrestado.png">&nbsp;</div><div>&nbsp;Arrestado:<span style="float:right;"><?php
echo $arrestado;?> veces</span></div>
<div class="hr"></div>
</div>
<div style="padding:10px; float:left; width:310px; margin-left:5px">
<div style="float:left"><img src="./imagenes/tiempo.png">&nbsp;</div><div>&nbsp;Horas de juego:<span style="float:right;"><?php
echo $horasdejuego;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/tel.png">&nbsp;</div><div>&nbsp;Tel&eacute;fono:<span style="float:right;"><?php
if ($numerotlf == 0) {
    echo "No tiene";
} else {
    echo $numerotlf;
}
?></span></div>
<div class="hr"></div>

<div style="float:left"><img src="./imagenes/email.png">&nbsp;</div><div><div>&nbsp;E-Mail:<span style="float:right;"><span id="email">***********<?php
echo $dominio;
?></span></span></div>
<div class="hr"></div>

<div style="float:left"><img src="./imagenes/corazon.png">&nbsp;</div><div>&nbsp;Salud:<span style="float:right;"><?php
echo $vida;
?>/100</span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/blindaje.png">&nbsp;</div><div>&nbsp;Chaleco antibalas:<span style="float:right;"><?php
echo $Chaleco;
?>/100</span></div>
<div class="hr"></div>
</font>
</div>
</td>
</tr>
</tbody>
</table>
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;font-size: 12px;"><strong>Inventario</strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2">
<div style="padding:10px; float:left; width:290px; margin-left:5px">
<div style="float:left"><img src="./imagenes/crack.png">&nbsp;</div><div>&nbsp;<font size="2px">Crack:<span style="float:right;"><?php
echo $crack;
?>g.</span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/pildora.png">&nbsp;</div><div>&nbsp;Medicamentos:<span style="float:right;"><?php
echo $medicamentos;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/marihuana.png">&nbsp;</div><div>&nbsp;Marihuana:<span style="float:right;"><?php
echo $marihuana;
?>g.</span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/guia.png">&nbsp;</div><div>&nbsp;Gu&iacute;a telef&oacute;nica:<span style="float:right;"><?php
if ($guia == 0) {
    echo "No tiene";
} else {
    echo "S&iacute";
}
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/piezas.png">&nbsp;</div><div>&nbsp;Piezas de armas:<span style="float:right;"><?php
echo $piezas;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/herramientas.png">&nbsp;</div><div>&nbsp;Repuestos:<span style="float:right;"><?php
echo $repuestos;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/radiocomunicador.png">&nbsp;</div><div>&nbsp;Radio comunicador:<span style="float:right;"><?php
if ($radio == 0) {
    echo "No tiene";
} else {
    echo "S&iacute;";
}
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/totemx16.png">&nbsp;</div><div>&nbsp;Totems:<span style="float:right;"><?php
echo $totems;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/vz.png">&nbsp;</div><div>&nbsp;Monedas <?php
echo $Diminutivo;
?>:<span style="float:right;"><?php
echo $vz;
?></span></div>
</div>
<div style="padding:10px; float:left; width:310px; margin-left:5px">
<div style="float:left"><img src="imagenes/iconos/pistolas.png">&nbsp;</div><div>&nbsp;Pistola:<span style="float:right;">

<?php
switch ($pistola) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?>

</span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/escopeta.png">&nbsp;</div><div>&nbsp;Escopeta:<span style="float:right;"><?php
switch ($escopeta) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class=
"hr"></div>
<div style="float:left"><img src="imagenes/iconos/subfusil.png">&nbsp;</div><div>&nbsp;Subfusil:<span style="float:right;"><?php
switch ($subfusil) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/asalto.png">&nbsp;</div><div>&nbsp;Asalto:<span style="float:right;"><?php
switch ($asalto) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/rifle.png">&nbsp;</div><div>&nbsp;Rifle:<span style="float:right;"><?php
switch ($rifle) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/armas-blancas.png">&nbsp;</div><div>&nbsp;Arma blanca:<span style="float:right;"><?php
switch ($blanca) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/granada.png">&nbsp;</div><div>&nbsp;Granada:<span style="float:right;"><?php
switch ($granada) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/regalos.png">&nbsp;</div><div>&nbsp;Regalos:<span style="float:right;"><?php
switch ($regalo) {
    case 0:
        echo "No tiene";
        break;
    case 1:
        echo "Manopla";
        break;
    case 2:
        echo "Palo de golf";
        break;
    case 3:
        echo "Porra";
        break;
    case 4:
        echo "Cuchillo";
        break;
    case 5:
        echo "Bate de beisboll";
        break;
    case 6:
        echo "Pala";
        break;
    case 7:
        echo "Palo de billar";
        break;
    case 8:
        echo "Katana";
        break;
    case 9:
        echo "Moto cierra";
        break;
    case 10:
        echo "Consolador morado";
        break;
    case 11:
        echo "Consolador";
        break;
    case 12:
        echo "Vibrador";
        break;
    case 13:
        echo "Vibrador de plata";
        break;
    case 14:
        echo "Flores";
        break;
    case 15:
        echo "Cane";
        break;
    case 16:
        echo "Granada";
        break;
    case 17:
        echo "Lacrimojena";
        break;
    case 18:
        echo "Cocktel Molotov";
        break;
    case 22:
        echo "9MM";
        break;
    case 23:
        echo "9mm Silenciada";
        break;
    case 24:
        echo "Desert Eagle";
        break;
    case 25:
        echo "Escopeta Normal";
        break;
    case 26:
        echo "Escopeta recortada";
        break;
    case 27:
        echo "Escopeta de combate";
        break;
    case 28:
        echo "Micro UZI";
        break;
    case 29:
        echo "MP5";
        break;
    case 30:
        echo "AK-47";
        break;
    case 31:
        echo "M4";
        break;
    case 32:
        echo "Tec-9";
        break;
    case 33:
        echo "Rifle";
        break;
    case 34:
        echo "Sniper Rifle";
        break;
    case 35:
        echo "RPG";
        break;
    case 36:
        echo "HS Rocket";
        break;
    case 37:
        echo "Lanzallamas";
        break;
    case 38:
        echo "Minigun";
        break;
    case 39:
        echo "Satchel Charger";
        break;
    case 40:
        echo "Detonador";
        break;
    case 41:
        echo "Spray";
        break;
    case 42:
        echo "Extintor";
        break;
    case 43:
        echo "Camara";
        break;
    case 44:
        echo "Vision nocturna";
        break;
    case 45:
        echo "Thermal Googles";
        break;
    case 46:
        echo "Paracaidas";
        break;
}
;
?></span></div>
<div class="hr"></div>
</div>
</font>
</td>
</tr>
</tbody>
</table>
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;font-size: 12px;" colspan="2"><strong>Habilidades en trabajos</strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left">
<table width="100%" cellspacing="1" cellpadding="4" border="0" bgcolor="#D9D9D9" align="center">
<tbody>
<tr>
<td valign="middle" align="left" bgcolor="#F4F4F4"><font size="2px">Trabajo</font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px">Nivel</font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px">Habilidad</font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Camionero</font></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelcamionero;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $expcamionero;
?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Mec&aacute;nico</font></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelpiloto;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $exppiloto;
?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Basurero</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelbasurero;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $expbasurero;
?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Minero</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelminero;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $expminero;
?>/50</td></font>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Médico</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo 1;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo 0;
?>/50</td></font>
</tr>
</tbody>
</table>
</td>
<td valign="top" bgcolor="#FFFFFF" align="left">
<table width="100%" cellspacing="1" cellpadding="6" border="0" bgcolor="#D9D9D9" align="center">
<tbody>
<tr>
<td valign="middle" align="left" bgcolor="#F4F4F4"><font size="2px">Trabajo</font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px">Nivel</font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px">Habilidad</font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Armero</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelarmero;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $exparmero;
?>/50</td></font>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Ladr&oacute;n</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelladron;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $expladron;
?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Transportista</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $niveltransportista;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $exptransportista;
?>/50</td></font>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - Pescador</td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $nivelpescador;
?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php
echo $exppescador;
?>/50</td></font>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div><div id="ui-tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-4" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-5" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-6" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div>
</div></div>
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
<a href="comprar-vz.php"><center><img src="imagenes/comprar-vz.png" title="Comprar <?php
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
<a href="../sapd/index.php" class="panel-todo" title="Este panel esta disponible no mas para los policias del servidor">&raquo; Panel de Policías</a>
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;n">&raquo; Salir</a>
</div>
<hr>
<a href="/descargas.php" title="Descargas" style="padding-top: 5px;float: left;margin-bottom: 8px;border-top: #DEDEDE 1px solid;margin-top: 5px;border-bottom: #DEDEDE 1px solid;padding-bottom: 5px;"><img src="imagenes/descargas-boton.png"></a>
<hr/>
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