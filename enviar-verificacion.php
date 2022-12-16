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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Verificar email - <?php echo $NombreServidor?> Roleplay</title>

<link rel="stylesheet" type="text/css" href="./estilo.css"> 
<link rel="stylesheet" href="css/estilos3.css">
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="./js/scripts.js"></script>

<script src="./js/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

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
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</font><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>

<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

</div>

<div id="menu-superior">
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul><?php include_once('./int_static/p_numinv.php'); ?>

</div>

<div id="contenido" style="position:relative; z-index:999;">

<div id="contenido-izquierdo">
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
<?php 
if($enviocorreo == 1)
{
$submit = mysql_real_escape_string($_POST['commit']);
$code = mysql_real_escape_string($_POST['codigo']);

if($submit)
{
    if($code == $CodigoKEY)
    {
		if(validarCadena($contraactual) == true && validarCadena($code) == true && validarCadena($CodigoKEY) == true)
					{
				$sql_update = mysql_query("UPDATE usuarios SET EstadoKEY='1' WHERE Username='".$name."'");
				echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Correo verificado correctamente.</strong></div>< <section class="elcontenedor">
			<div class="login">';
            }
    }
    else
    {
      echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;">Codigo incorrecto.</div>< <section class="elcontenedor">
<div class="login">';
    }
}
else
{
	echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;">Ya fue enviado un correo espera 30 minutos para volver a enviarlo.</div>< <section class="elcontenedor">
<div class="login">';
}
}
if($enviocorreo == 0){
				
				///calcular hora para volver a enviar el correo
				$mes = date("m");
				$dia = date("d");
				$ano = date("Y");
				$minutos = date("i")+30;
				$sql_update = mysql_query("UPDATE usuarios SET DiaECorreo='$dia', MesECorreo='$mes', AnoECorreo='$ano', MinutosECorreo='$minutos' WHERE Username='".$name."'");
				///enviar email
				$usuariodelcorreo = ucwords($row['Username'], '_');
				$contraseñadelcorreo = $row['Password'];
				$mensaje = "Su codigo de confirmacion es --> ".$CodigoKEY." <-- no lo compartas con nadie, atentamente la Administración de VZRP";
				$titulo = "Codigo de confirmacion VZRP";
				mail($correo, $titulo ,$mensaje);
	echo '
<div class="login" style="padding:5px;top:20px;background-color:#599800; color:#FFFFFF; width:560px; text-align:center;">Fue enviado un email a <strong>'.$email.'</strong> con el codigo de verificacion.</div><div style="padding:5px;top:40px;background-color:#fbee80; color:#000; width:560px; text-align:center;" class="login">Si no encuentra el email, revise la carpeta SPAM.</div> <section class="elcontenedor">
<div class="login">';
}
?>
<h1>Verificar e-mail</h1>
<form method="post" name="cambio">
<input name="cambiar" type="hidden" value="1"/>
<input name="1h" type="text" maxlength="1" style="display:none"/>
<input name="1v" type="password" maxlength="1" style="display:none"/>
<p><input name="codigo" type="text" maxlength="6" placeholder="Codigo de 6 caracteres" style="text-align:center"/></p>
<p><input type="submit" name="commit" value="Verificar"></p>
</form>
</div>
</section>


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