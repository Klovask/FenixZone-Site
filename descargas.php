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
<title>Descargar GTA San Andreas</title>
<style>
.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}
</style>
<link rel="stylesheet" href="./css/estilos3.css">
<link rel="stylesheet" href="./css/style.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" href="cssmin/bootstrap.css">

<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
</head>
<body>
<style>
.mySlides {display:none}
button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:bold}
button,input{overflow:visible}button,select{text-transform:none}
button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
button::-moz-focus-inner, [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner{border-style:none;padding:0}
button:-moz-focusring, [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring{outline:1px dotted ButtonText}

.w3-btn,.w3-button{border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.w3-btn:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}
.w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
.w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
.w3-btn.w3-disabled:hover,.w3-btn:disabled:hover{box-shadow:none}

.w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
.w3-rojo,.w3-hover-rojo:hover{color:#fff!important;background-color:#be2a2a!important}
.w3-content img{ border-radius:16px;    margin-left: 143px; margin-bottom:8px;border: 6px #dddddd solid;width: 300px;}
hr{ border-top:1px #dadada solid;}
.DescargaT{ border-radius:4px;}
#tiban{position: absolute;text-align: center;margin-left: 133px;width: 341px;margin-top: 23px;font-size: 32px;color: #FFF;text-shadow: 0 1px 0 #000000;}
#b1,#b2{ border-left:#4CAF50 solid 4px; padding-left:10px;color:#111111;}
#b3{ border-left:#be2a2a solid 4px; padding-left:10px;color:#111111;}
</style>
</head>
<body>	

<script>
function Ocultar(){
      $('#banner').fadeOut();
}
</script>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
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
</font><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</font></a>
</font>
</div>

<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>

<?php
}
if (!isset($_SESSION['User'])) {
?>
<div class="botones-login"><img src="../imagenes/login.png"> <a href="../ingresar.php" title="Iniciar sesión" border="0">Iniciar sesión</a></div>

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
<div id="contenido" style="position:relative; z-index:999;">
<div id="contenido-izquierdo">
<section class="elcontenedor" style="margin: 27px auto;">
<div class="login" style="width:600px;box-shadow: 0 0 40px rgba(255,255,255,0.5),0 1px 2px rgba(0,0,0,0.3); float:left">
<h1 style="color:#286090; padding-left:11px; text-align:left"><span class="glyphicon glyphicon-cloud-download" style="top:2px"></span> Descargas del juego</h1>
<div style="text-align:center; font-size:15px;">
<div class="w3-content">
<img class="mySlides" src="imagenes/gta_desc.png">
<img class="mySlides" src="imagenes/gta_desc.png">
<img class="mySlides" src="imagenes/gta_desc2.png">
</div>
<div class="w3-center">
<button class="w3-button DescargaT" onclick="currentDiv(1)" style="background-color:#dddddd">Juego completo</button>
<button class="w3-button DescargaT" onclick="currentDiv(2)" style="background-color:#dddddd">Juego semi-completo</button>
<button class="w3-button DescargaT" onclick="currentDiv(3)" style="background-color:#dddddd">Cliente SA-MP</button>
</div>
<hr />
<div style="text-align: left;
    margin-left: 10px;
    margin-right: 24px;
    font-size: 17px;">
<div id="b1">
<strong>Juego completo</strong><br />
Esta versi&oacuten del juego es la m&aacutes completa, similar a la original.<br />
<hr />
<span style="font-size:14px">Peso: 3.9GB.<br />
Enlace de descarga: <a href="https://goo.gl/RURw5H">http://rol.evertzone.com/descargas/GTA_SA_Completo.zip</a></span>
</div>
<div id="b2" style="display:none">
<strong>Juego semi-completo</strong><br />
Esta versi&oacuten es un RIP del juego, no contiene sonidos de radios.
<br />
<hr />
<span style="font-size:14px">
Peso: 532MB.<br />
Enlace de descarga: <a href="https://goo.gl/MmHiyd">http://rol.evertzone.com/descargas/GTA_SA_Rip_VortexZoneRP.zip</a></span>
</div>
<div id="b3" style="display:none">
<strong>Cliente de SA-MP</strong><br />
Programa necesario para jugar en el modo multijugador.
<br />
<hr />
<span style="font-size:14px">
Peso: 15.5MB.<br />
Enlace de descarga: <a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe">http://files.sa-mp.com/sa-mp-0.3.7-install.exe</a></span>
</div>
</div>
<div style="float:left;width: 600px;    border-top: 1px #dadada solid;margin-top: 8px;padding-top: 10px;">
<a href="https://goo.gl/RURw5H" id="l1"><button class="w3-button" style="color: #fff !important;background-color: #265680 !important; border-radius:5px" id="botoncrear1"><span class="glyphicon glyphicon-cloud-download"></span> Descargar</button> </a>
<a href="https://goo.gl/MmHiyd" id="l2" style="display:none"><button class="w3-button" style="color: #fff !important;background-color: #265680 !important; border-radius:5px" id="botoncrear1"><span class="glyphicon glyphicon-cloud-download"></span> Descargar</button> </a> <a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" id="l3" style="display:none"><button class="w3-button" style="color: #fff !important;background-color: #265680 !important; border-radius:5px" id="botoncrear1"><span class="glyphicon glyphicon-cloud-download"></span> Descargar</button> </a><div style="float:left;width: 600px;    border-top: 1px #dadada solid;margin-top: 8px;padding-top: 10px;">
<a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" id="l3" style="display:none"><button class="w3-button" style="color: #fff !important;background-color: #265680 !important; border-radius:5px" id="botoncrear1"><span class="glyphicon glyphicon-cloud-download"></span> Descargar</button></a>
</div>
</section>
</div>
<div id="menu-derecho">
<div class="td-menu">
<div class="icono-td">
<img src="/imagenes/casa.png"/>
</div>
<div class="titulo-td">
Tus opciones
</div>
</div>
<div class="bloque-menu">
<a href="cuenta.php" class="panel-principal" title="Panel principal con informaci&oacute;n de tu cuenta">&raquo; Panel principal</a>
<a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo; Comprar ropa</a>
<a href="comprar-vehiculos.php" class="panel-todo" title="Compra veh&iacute;culos especiales">&raquo; Comprar veh&iacute;culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="crear-banda.php" class="panel-todo" title="Crea una banda">&raquo; Crear banda</a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia el sexo de tu personaje">&raquo; Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membresía VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
<a href="entrar.php" class="panel-todo" title="Ingresar">&raquo; Ingresar</a>

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

<hr/>
<?php
if ($activar_jc == 1) {
?>
<hr>
<a href="/descargas.php" title="Descargas" style="padding-top: 5px;float: left;margin-bottom: 8px;border-top: #DEDEDE 1px solid;margin-top: 5px;border-bottom: #DEDEDE 1px solid;padding-bottom: 5px;"><img src="imagenes/descargas-boton.png"></a>
<hr/>
<hr>
<span style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;" class="rounded-img"><a href="invitar-amigo.php" title="Click aqu&iacute; para m&aacute;s informaci&oacute;n"><span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;"><img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0; border:0">
</span>
</a>
</span>
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
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
    if(n == 1){
        $("#b2").hide();
        $("#b3").hide();
        $("#b1").show();
        $("#l2").hide();
        $("#l3").hide();
        $("#l1").show();
    }else if(n == 2){
        $("#l1").hide();
        $("#l3").hide();
        $("#l2").show();
        $("#b1").hide();
        $("#b3").hide();
        $("#b2").show();
    }else if(n == 3){
        $("#l2").hide();
        $("#l1").hide();
        $("#l3").show();
        $("#b2").hide();
        $("#b1").hide();
        $("#b3").show();    
    }
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("DescargaT");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-rojo", "");
     dots[i].className = dots[i].className.replace(" w3-green", "");
  }
  x[slideIndex-1].style.display = "block";  
  if(slideIndex == 3){
      dots[slideIndex-1].className += " w3-rojo";
  }else{
      dots[slideIndex-1].className += " w3-green";
  }
}

Creando = 0;
$( "#botoncrear" ).click(function() {
        if(Creando == 0){
            Creando = 1;
            $(this).hide();
            $("#cargando").show();  
        }
    });
</script>
</body>
</html>