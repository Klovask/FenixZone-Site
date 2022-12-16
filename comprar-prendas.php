<?php  require_once "seguridad/sql_inject.php";
 $bDestroy_session = TRUE;
 $url_redirect = 'index.php';
 $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect);
 session_start();
 error_reporting(0);
 include_once('./kev/pdo.php');
 if(isset($_SESSION['User'])) { $User = $_SESSION['User'];
 $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
 $stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
 $stmt->execute();
 while($datos = $stmt->fetch()) { $name = $datos['Username'];
 $money = $datos['Money'];
 $score = $datos['Nivel'];
 $vz = $datos['Moneda'];
 $online = $datos['Online'];
 $ropa = $datos['Skin'];
 $platabanco = $datos['Banco'];
 $faccion = $datos['Faccion'];
 $razon = $datos['razon'];
 $ban = $datos['Baneado'];
 $Conexion = $datos['Conexion'];
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
 } $Objeto1 = 0;
 $Objeto2 = 0;
 $Objeto3 = 0;
 $Objeto4 = 0;
 $obj1 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '1' AND `Propietario` = :usuario");
 $obj1->bindParam(':usuario', $User, PDO::PARAM_STR);
 $obj1->execute();
 if($row1 = $obj1->fetch(PDO::FETCH_ASSOC)) { $Objeto1 = $row1['Objeto'];
 } $obj2 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '2' AND `Propietario` = :usuario");
 $obj2->bindParam(':usuario', $User, PDO::PARAM_STR);
 $obj2->execute();
 if($row2 = $obj2->fetch(PDO::FETCH_ASSOC)) { $Objeto2 = $row2['Objeto'];
 } $obj3 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '3' AND `Propietario` = :usuario");
 $obj3->bindParam(':usuario', $User, PDO::PARAM_STR);
 $obj3->execute();
 if($row3 = $obj3->fetch(PDO::FETCH_ASSOC)) { $Objeto3 = $row3['Objeto'];
 } $obj4 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '4' AND `Propietario` = :usuario");
 $obj4->bindParam(':usuario', $User, PDO::PARAM_STR);
 $obj4->execute();
 if($row4 = $obj4->fetch(PDO::FETCH_ASSOC)) { $Objeto4 = $row4['Objeto'];
 } } else echo "<script>window.location='ingresar.php';
</script>";
 $dinerototal = $money+$platabanco;
 if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';
</script>";
 } ?>

<?php require("./conectados/samp_query.php");
 try { $rQuery = new QueryServer( $serverIP, $serverPort );
 $aInformation = $rQuery->GetInfo( );
 $aServerRules = $rQuery->GetRules( );
 $aBasicPlayer = $rQuery->GetPlayers( );
 $aTotalPlayers = $rQuery->GetDetailedPlayers( );
 $rQuery->Close( );
 } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html;
 charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Comprar Prendas</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<style>.ft1{width:300px;
float:left;
padding:10px;
margin-left:35px;
}.ft2{width:300px;
float:left;
padding:10px;
}.ft1 img{background-color:#FFFFFF;
padding:5px;
border:solid 1px #CCCCCC;
width:250px;
height:150px}.ft2 img{background-color:#FFFFFF;
padding:5px;
border:solid 1px #CCCCCC;
width:250px;
height:150px}.datos2{background-color:#FFFFFF;
padding:5px;
float:left;
width:250px;
border-left:solid 1px #CCCCCC;
border-right:solid 1px #CCCCCC;
border-bottom:solid 1px #CCCCCC;
}.datos2 span{text-align:right;
float:right;
font-weight:bold}.ft1 a{background-image:url(imagenes/carrito.png);
background-repeat:no-repeat;
height:16px;
padding-left:20px;
width:0;
float:right;
overflow:hidden;
margin-left:5px;
}.ft2 a{background-image:url(imagenes/carrito.png);
background-repeat:no-repeat;
height:16px;
padding-left:20px;
width:0;
float:right;
overflow:hidden;
margin-left:5px;
}.verde-btn{-moz-border-bottom-colors:none;
-moz-border-left-colors:none;
-moz-border-right-colors:none;
-moz-border-top-colors:none;
background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');
background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));
border-color:#7CB32F #387411 #387411;
border-image:none;
border-right:1px solid #387411;
border-style:solid;
border-width:1px;
box-shadow:0 1px 2px 0 #999999;
color:#FFFFFF!important;
text-shadow:0 1px 0 rgba(0,0,0,0.3);
font-size:15px!important;
padding:2px 10px!important;
}.verde-btn:hover{-moz-border-bottom-colors:none;
-moz-border-left-colors:none;
-moz-border-right-colors:none;
-moz-border-top-colors:none;
background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');
background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));
border-color:#7CB32F #387411 #387411;
border-image:none;
border-right:1px solid #387411;
border-style:solid;
border-width:1px;
box-shadow:0 1px 2px 0 #999999;
color:#FFFFFF;
text-shadow:0 1px 0 rgba(0,0,0,0.3);
}.btn{padding:4px 12px;
margin-bottom:0;
line-height:20px;
text-align:center;
vertical-align:middle;
cursor:pointer;
color:#333333;
border-radius:7px}</style>

<style>
.ft1{width:300px;
float:left;
padding:10px;
margin-left:35px;
}
.ft2{width:300px;
float:left;
padding:10px;
}
.ft1 img{background-color:#FFFFFF;
padding:5px;
border:solid 1px #CCCCCC;
width:250px;
height:150px}
.ft2 img{background-color:#FFFFFF;
padding:5px;
border:solid 1px #CCCCCC;
width:250px;
height:150px}
.datos2{background-color:#FFFFFF;
padding:5px;
float:left;
width:250px;
border-left:solid 1px #CCCCCC;
border-right:solid 1px #CCCCCC;
border-bottom:solid 1px #CCCCCC;
}
.datos2 span{text-align:right;
float:right;
font-weight:bold}
.ft1 a{background-image:url(./imagenes/carrito.png);
background-repeat:no-repeat;
height:16px;
padding-left:20px;
width:0;
float:right;
overflow:hidden;
margin-left:5px;
}
.ft2 a{background-image:url(./imagenes/carrito.png);
background-repeat:no-repeat;
height:16px;
padding-left:20px;
width:0;
float:right;
overflow:hidden;
margin-left:5px;
}
</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tbody><tr>

<td width="997">
<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>

<script async="" src="./js/analytics.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];
a.async=1;
a.src=g;
m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-16687198-9', 'auto');

  ga('send', 'pageview');


</script>


<style>.alertas{float:left;
margin-left:660px;
margin-top:170px;
position:absolute;
background-color:#0081ff;
border-radius:3px;
padding:0.2em 0.4em 0.2em;
color:#FFFFFF;
font-weight:bold;
}.alertas a{color:#FFF;
}.alertas:hover{background-color:#0068ce;
}.alertas a:hover{color:#f0f0f0;
}</style>

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
<?php include_once('./invitaciones/invitacion.php');
 ?> 
</div>

</div>

<div id="contenido">

<?php
if(isset($_SESSION['User']))
{ 
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
}
?>

<style>
.alertas{float:left;
margin-left:660px;
margin-top:170px;
position:absolute;
background-color:#0081ff;
border-radius:3px;
padding:0.2em 0.4em 0.2em;
color:#FFFFFF;
font-weight:bold;
}.alertas a{color:#FFF;
}.alertas:hover{background-color:#0068ce;
}.alertas a:hover{color:#f0f0f0;
}
</style>

<?php  function validarCadena($cadena) { if(strlen($cadena) > 6) { return false;
 } $permitidos = "0123456789";
 for ($i=0;
 $i<strlen($cadena);
 $i++) { if (strpos($permitidos, substr($cadena,$i,1))===false) { return false;
 } } return true;
 } function ObtenerPrecioPrenda($i) { switch($i) { 
 case 18962: $precioprenda = 25;
 return $precioprenda;
 case 19064: $precioprenda = 20;
 return $precioprenda;
 case 19078: $precioprenda = 30;
 return $precioprenda;
 case 19010: $precioprenda = 25;
 return $precioprenda;
 case 19033: $precioprenda = 25;
 return $precioprenda;
 case 19009: $precioprenda = 25;
 return $precioprenda;
 case 18913: $precioprenda = 25;
 return $precioprenda;
 case 18912: $precioprenda = 25;
 return $precioprenda;
 case 18916: $precioprenda = 25;
 return $precioprenda;
 case 18946: $precioprenda = 25;
 return $precioprenda;
 case 18966: $precioprenda = 30;
 return $precioprenda;
 case 18933: $precioprenda = 25;
 return $precioprenda;
 case 18964: $precioprenda = 25;
 return $precioprenda;
 case 18976: $precioprenda = 30;
 return $precioprenda;
 case 18941: $precioprenda = 25;
 return $precioprenda;
 } } $prenda = $_GET['u'];
 if($prenda > 10000) { if($online == 0) { if(validarCadena($prenda) == true) { if(ObtenerPrecioPrenda($prenda) <= $vz) { if($prenda == 18962 || $prenda == 19064 || $prenda == 19078 || $prenda == 19010 || $prenda == 19033 || $prenda == 19009 || $prenda == 18913 || $prenda == 18912 || $prenda == 18916 || $prenda == 18946 || $prenda == 18966 || $prenda == 18933 || $prenda == 18964 || $prenda == 18976 || $prenda == 18941) { $precioprenda = ObtenerPrecioPrenda($prenda);
 if($Objeto1 == 0) { $st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE Username= :usuario");
 $st->bindParam(':precio', $precioprenda, PDO::PARAM_INT);
 $st->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st->execute();
 $st2 = $con->prepare("INSERT INTO `prendas` (Propietario,Objeto,Slot) VALUES (:usuario,:prenda,'1')");
 $st2->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
 $st2->execute();
 echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';
?><?php echo ObtenerPrecioPrenda($prenda);
 echo "";
?> <?php echo $Diminutivo?><?php echo ")";
?><?php echo '");
</script>';
 } else if($Objeto2 == 0) { $st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE Username= :usuario");
 $st->bindParam(':precio', $precioprenda, PDO::PARAM_INT);
 $st->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st->execute();
 $st2 = $con->prepare("INSERT INTO `prendas` (Propietario,Objeto,Slot) VALUES (:usuario,:prenda,'2')");
 $st2->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
 $st2->execute();
 echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';
?><?php echo ObtenerPrecioPrenda($prenda);
 echo "";
?> <?php echo $Diminutivo?><?php echo ")";
?><?php echo '");
</script>';
 } else if($Objeto3 == 0) { $st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE Username= :usuario");
 $st->bindParam(':precio', $precioprenda, PDO::PARAM_INT);
 $st->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st->execute();
 $st2 = $con->prepare("INSERT INTO `prendas` (Propietario,Objeto,Slot) VALUES (:usuario,:prenda,'3')");
 $st2->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
 $st2->execute();
 echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';
?><?php echo ObtenerPrecioPrenda($prenda);
 echo "";
?> <?php echo $Diminutivo?><?php echo ")";
?><?php echo '");
</script>';
 } else if($Objeto4 == 0) { $st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE Username= :usuario");
 $st->bindParam(':precio', $precioprenda, PDO::PARAM_INT);
 $st->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st->execute();
 $st2 = $con->prepare("INSERT INTO `prendas` (Propietario,Objeto,Slot) VALUES (:usuario,:prenda,'4')");
 $st2->bindParam(':usuario', $User, PDO::PARAM_STR);
 $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
 $st2->execute();
 echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';
?><?php echo ObtenerPrecioPrenda($prenda);
 echo "";
?> <?php echo $Diminutivo?><?php echo ")";
?><?php echo '");
</script>';
 } else { echo '<script type="text/javascript">alert("No puedes comprar mas de 4 prendas.");
</script>';
 } } else { echo '<script type="text/javascript">alert("Error de prenda #1");
</script>';
 echo "<script>window.location='index.php';
</script>";
 } } else { echo '<script type="text/javascript">alert("No tienes los ';
?> <?php echo $Diminutivo?><?php echo ' necesarios (';
?><?php echo ObtenerPrecioPrenda($prenda);
?><?php echo ')");
</script>';
 } } else { echo '<script type="text/javascript">alert("Error de prenda #2");
</script>';
 echo "<script>window.location='index.php';
</script>";
 } } else { echo '<script type="text/javascript">alert("Tienes que estar desconectado para comprar una prenda.");
</script>';
 } } ?>

<form method="POST">
<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="imagenes/moneda_realx16.png"/></div>
<div style="height:22px;
font-weight:bold;
 font-size:14px;
text-shadow:0 1px 0 #FFFFFF;
color:#305B79;
padding-top:8px;
 margin-left:10px;
 margin-left:34px;
 margin-bottom:10px">Venta única desde el 01/12/2017 hasta el 31/01/2018</div>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
<div style="float:left;
width:220px;
 margin-bottom:10px;
margin-left: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18962.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18962'" id="btn18962"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="width: 220px;
 margin-bottom: 10px;
 float: left;
">
<div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19064.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">20 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=19064'" id="btn19064"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float: left;
 width: 220px;
 margin-bottom: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19078.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">30 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=19078'" id="btn19078"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
margin-left: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19010.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=19010'" id="btn19010"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19033.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=19033'" id="btn19033"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19009.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=19009'" id="btn19009"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
margin-left: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18913.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18913'" id="btn18913"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18912.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18912'" id="btn18912"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18916.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18916'" id="btn18916"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
margin-left: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18946.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18946'" id="btn18946"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18966.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18966'" id="btn18966"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18933.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18933'" id="btn18933"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
margin-left: 10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18964.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18964'" id="btn18964"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18976.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18976'" id="btn18976"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

<div style="float:left;
width:220px;
 margin-bottom:10px;
"><div style="width:81px; height:81px; background-image:url(imagenes/navidad_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18941.png"/></td></tr>
<tr><td bgcolor="#FFFFFF"><font size="2px">Costo: </td><td bgcolor="#FFFFFF"><font size="2px">25 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center">
<button class="verde-btn btn" type="button" onclick="location.href='comprar-prendas.php?u=18941'" id="btn18941"><font size="2px">Comprar</button>
<!--<input class="verde-btn btn" type="submit" name="submit" value="Comprar">-->
</td></tr>
</table>
</div>

</div>



</div>
</form>

<div id="menu-derecho"><style>.rounded-img{display:inline-block;
overflow:hidden;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:10px;
-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);
-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);
box-shadow:0 1px 3px rgba(0,0,0,.9);
}</style>

<div class="td">

<div class="icono-td">

<img src="./imagenes/dinero_p.png">

</div>

<div class="titulo-td">

Tu cuenta

</div>

</div>

<div class="bloque-monedas">

<div style="float:left;
 margin-left:170px;
 font-size:18px;
 color:#003366;
 margin-bottom:4px"><?php echo number_format($vz, 0, '', '.');
?>  <?php echo $Diminutivo?></div>

<div class="hr2"></div>

<div style="float:left;
 margin-left:170px;
 font-size:18px;
 color:#003366;
">$<?php echo number_format($dinerototal, 0, '', '.');
?></div>

<div class="hr2"></div>

<div style="float:left;
 margin-left:170px;
 font-size:18px;
 color:#003366;
"><?php echo $score;
?></div>

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
<a href="cuenta.php" class="actual1" title="Panel principal con informaci&oacute;
n de tu cuenta">&raquo;
 Panel principal</a>
<a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo;
 Comprar ropa</a>
<a href="comprar-vehiculos.php" class="panel-todo" title="Compra veh&iacute;
culos especiales">&raquo;
 Comprar veh&iacute;
culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo;
 Cambiar nombre</a>
<a href="<?php if($faccion == 0){echo "crear-banda.php";
}else{echo "tubanda.php";
}?>" class="panel-todo" title="<?php if($faccion == 0){echo "Crear banda";
}else{echo "Tu banda";
}?>">&raquo;
 <?php if($faccion == 0){echo "Crear banda";
}else{echo "Tu banda";
}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;
a">&raquo;
 Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia tu contrase&ntilde;
a">&raquo;
 Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo;
 Comprar membres&iacute;
a VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo;
 Invitar a un amigo</a>
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;
n">&raquo;
 Salir</a>
</div>
<hr>
<span style="background:url(./imagenes/totem.png) no-repeat center center;
 width: 300px;
 height: 320px;
" class="rounded-img"><a href="invitar-amigo.php" title="Click aqu&iacute;
 para m&aacute;
s informaci&oacute;
n"><span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center;
 width: 300px;
 height: 320px;
"><img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0;
 border:0"></span></a></span>

<?php if($activar_jc == 1) {?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/diario.png"/></div>
<div class="titulo-td">
Jugadores Conectados
</div>
</div>
<div class="bloque">
<span id="total" style="font-size:35px;
 color:#050;
text-shadow: 0 1px 0 #FFFFFF;
 margin-left:35%"><center><?php if(!empty($aInformation)){echo $aInformation['Players'];
}?></center></span>
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
<span style="font-weight:bold;
font-size:12px;
 color:#003366">Roleplay S1:&nbsp;
&nbsp;
&nbsp;
</span> <span style="font-size:12px;
 font-weight:bold;
 color:#305B79"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></span><span style="float:right;
 width:68px"><img src="./imagenes/en-linea.png" align="absmiddle" title="En linea"><span id="rols4" style="color:#030"><font size="2px"><?php if(!empty($aInformation)){echo $aInformation['Players'];
}?>/<?php if(!empty($aInformation)){echo $aInformation['MaxPlayers'];
}?></span></span>
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
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php echo $FacebookURL?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none;
 overflow:hidden;
 width:280px;
 height:68px;
" allowTransparency="true">
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
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
if(!d.getElementById(id)){js=d.createElement(s);
js.id=id;
js.src=p+"://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);
}}(document,"script","twitter-wjs");

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
<?php $carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 5");
 $carrera->execute();
 $counter = 0;
 if($row = $carrera->fetch(PDO::FETCH_ASSOC)) { do { $counter++;
 echo "".$counter.". ".$row["Username"]."<span style='float:right;
 font-size:11px;
'>".$row["PuntosCarrera"]." Puntos</span><div class='hr'></div>";
 } while($row = $carrera->fetch(PDO::FETCH_ASSOC));
 } ?>
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
?>