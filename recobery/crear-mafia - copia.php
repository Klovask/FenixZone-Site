<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($row = $stmt->fetch()) { $name = $row['Username']; $money = $row['Money']; $score = $row['Nivel']; $fz = $row['Moneda']; $ropa = $row['Skin']; $platabanco = $row['Banco']; $faccion = $row['Faccion']; $online = $row['Online']; $razon = $row['razon']; $ban = $row['Baneado']; $Conexion = $row['Conexion']; } } else echo "<script>window.location='ingresar.php';</script>"; $dinerototal = $money+$platabanco; if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } if($faccion >= 1) { echo "<script>window.location='tubanda.php';</script>"; } require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="stylesheet" href="./css/style.css">
<title><?php echo $NombreServidor?> Roleplay - Crear Mafia</title>
<script src="./js/jquery-latest2.js"></script>
<style>DIV#loader.loading{background:url(./imagenes/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
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
</font><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="./logout.php" title="Cerrar sesi�n - Salir"><font size="2px;">&raquo; SALIR</font></a>
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

<div id="contenido-izquierdo">

<?php  function validarCadenaRango($cadena) { if(strlen($cadena) < 2 || strlen($cadena) > 20) { return false; } $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789 "; for ($i=0; $i<strlen($cadena); $i++) { if (strpos($permitidos, substr($cadena,$i,1))===false) { return false; } } return true; } function validarCadenaNombre($cadena) { if(strlen($cadena) < 2 || strlen($cadena) > 20) { return false; } $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789 "; for ($i=0; $i<strlen($cadena); $i++) { if (strpos($permitidos, substr($cadena,$i,1))===false) { return false; } } return true; } $nombrebanda = $_POST['nombrede']; $rango1 = $_POST['vale1']; $rango2 = $_POST['vale2']; $rango3 = $_POST['vale3']; $rango4 = $_POST['vale4']; $rango5 = $_POST['vale5']; $rango6 = $_POST['vale6']; $fecha=strftime( "%d/%m/%Y", time() ); if($_POST['submit']) { if($online == 0) { if($rango1 && $rango2 && $rango3 && $rango4 && $rango5 && $rango6 && $nombrebanda) { if(validarCadenaNombre($nombrebanda) == true && validarCadenaRango($rango1) == true && validarCadenaRango($rango2) == true && validarCadenaRango($rango3) == true && validarCadenaRango($rango4) == true && validarCadenaRango($rango5) == true && validarCadenaRango($rango6) == true) { if($faccion == 0) { if($dinerototal >= 500000) { $obj1 = $con->prepare("SELECT * FROM facciones WHERE Nombre = :nombrebanda"); $obj1->bindParam(':nombrebanda', $nombrebanda, PDO::PARAM_STR); $obj1->execute(); $num_rows = $obj1->rowCount(); if($num_rows == 1) { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Ya hay una banda con ese nombre</strong></div>'; } else { $obj3 = $con->prepare("INSERT INTO facciones (Nombre, Integrantes, Lider, Rango1, Rango2, Rango3, Rango4, Rango5, Rango6, tipobanda, fecha) VALUES (:nombrebanda, '1', :usuario, :rg1, :rg2, :rg3, :rg4, :rg5, :rg6, 'Mafia', :fecha)"); $obj3->bindParam(':nombrebanda', $nombrebanda, PDO::PARAM_STR); $obj3->bindParam(':usuario', $User, PDO::PARAM_STR); $obj3->bindParam(':rg1', $rango1, PDO::PARAM_STR); $obj3->bindParam(':rg2', $rango2, PDO::PARAM_STR); $obj3->bindParam(':rg3', $rango3, PDO::PARAM_STR); $obj3->bindParam(':rg4', $rango4, PDO::PARAM_STR); $obj3->bindParam(':rg5', $rango5, PDO::PARAM_STR); $obj3->bindParam(':rg6', $rango6, PDO::PARAM_STR); $obj3->bindParam(':fecha', $fecha, PDO::PARAM_STR); $obj3->execute(); $obj5 = $con->prepare("INSERT INTO `action_queue` (`status`, `Fecha`, `type`) VALUES ('0', NOW(), '5')"); $obj5->execute(); $obj2 = $con->prepare("SELECT * FROM facciones WHERE Lider = :usuario"); $obj2->bindParam(':usuario', $User, PDO::PARAM_STR); $obj2->execute(); while($row2 = $obj2->fetch()) { $IDBanda = $row2['id']; $obj4 = $con->prepare("UPDATE usuarios SET Money = Money-500000, Faccion = :idbanda, Rango = '6' WHERE Username = :usuario"); $obj4->bindParam(':idbanda', $IDBanda, PDO::PARAM_INT); $obj4->bindParam(':usuario', $User, PDO::PARAM_STR); $obj4->execute(); } echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Mafia creada correctamente</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Dinero insuficiente</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No puedes crear una banda si ya formas parte de una.</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Usaste algun caracter invalido - Error 9</strong></div>'; echo "<script>window.location='index.php';</script>"; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Debes completar todos los campos</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Tienes que estar desconectado</strong></div>'; } } else { echo '<div class="login" style="padding:5px;top:20px;background-color:#d6b534; color:#FFFFFF; width:560px; text-align:center;"><strong>Recuerda: Las bandas tienen un precio de $500.000$</strong></div>'; } ?>

<section class="elcontenedor">
<div class="login">
<h1>Ingresa los datos<br>Tipo de banda: Mafia</h1>
<form method="post" accept-charset="UTF-8">
<p><input type="text" name="nombrede" value="" placeholder="Nombre de la banda"></p>
<p><input type="text" name="vale1" value="" placeholder="Rango 1 (Nuevo)"></p>
<p><input type="text" name="vale2" value="" placeholder="Rango 2"></p>
<p><input type="text" name="vale3" value="" placeholder="Rango 3"></p>
<p><input type="text" name="vale4" value="" placeholder="Rango 4"></p>
<p><input type="text" name="vale5" value="" placeholder="Rango 5"></p>
<p><input type="text" name="vale6" value="" placeholder="Rango 6 (Lider)"></p>
<p class="submit"><input type="submit" name="submit" value="Crear"></p>
</form>
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
<a href="cuenta.php" class="actual1" title="Panel principal con informaci&oacute;n de tu cuenta">&raquo; Panel principal</a>
<a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo; Comprar ropa</a>
<a href="comprar-vehiculos.php" class="panel-todo" title="Compra veh&iacute;culos especiales">&raquo; Comprar veh&iacute;culos</a>
<a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo; Cambiar nombre</a>
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="actual1" title="<?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?>">&raquo; <?php if($faccion == 0){echo "Crear banda";}else{echo "Tu banda";}?></a>
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