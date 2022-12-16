<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { echo "<script>window.location='cuenta.php';</script>"; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<title><?php echo $NombreServidor?> Roleplay - Recuperar contrase&ntildea</title>

<link rel="stylesheet" type="text/css" href="css/estilos3.css"/>

<link rel="stylesheet" href="./css/style.css"/>

<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tr>

<td width="997">

<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>

<div class="header-s3-">
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
<div class="botones-login"><img src="../imagenes/login.png"> <a href="../ingresar.php" title="Iniciar sesión" border="0">Iniciar sesión</a></div>
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>
</div>
</div>

<div id="menu-superior">                               
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="crear-cuenta"><a href="/nuevo.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>

<div class="invitaciones-pendientes">

</div>

</div>

<div id="contenido" style="position:relative; z-index:999;">

<div id="contenido-izquierdo">

<?php  $submit = $_POST['submit']; $correo = $_POST['correo']; if($submit) { if($correo) { $stmt = $con->prepare("SELECT * FROM usuarios WHERE Email = :correo"); $stmt->bindParam(':correo', $correo, PDO::PARAM_STR); $stmt->execute(); $num_rows = $stmt->rowCount(); if($num_rows == 1) { while($datos = $stmt->fetch()) { $usuariodelcorreo = $datos['Username']; $contraseñadelcorreo = $datos['Password']; $mensaje = "Usuario: ".$usuariodelcorreo."\nContraseña: ".$contraseñadelcorreo.""; $titulo = "Recordartorio de contraseña de ".$Diminutivo.":RP"; mail($correo, $titulo ,$mensaje); echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Contraseña enviada correctamente.</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No existe ninguna cuenta con ese correo.</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Debes completar todos los campos.</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Si no sabes el correo, y es tu cuenta, contacta a un administrador con pruebas claras.</strong></div>'; } ?>

<section class="elcontenedor">

<div class="login">

<h1>¿Olvidaste tu contraseña?</h1>

<form method="post">

<p><input type="text" name="correo" value="" placeholder="E-Mail de la cuenta."></p>

<p><input type="submit" name="submit" value="Enviar contraseña"></p>

</form>

</div>

</section>

</div>

<div id="menu-derecho"><div class="td-menu">

<div class="icono-td">

<img src="./imagenes/casa.png"/>

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
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="panel-todo" title="<?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
<a href="cc.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar contrase&ntilde;a</a>
<a href="cs.php" class="panel-todo" title="Cambia tu contrase&ntilde;a">&raquo; Cambiar de sexo</a>
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
<a href="ingresar.php" class="panel-todo" title="Ingresar">&raquo; Ingresar</a>
</div>

<?php if($activar_jc == 1) {?>
<hr>
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