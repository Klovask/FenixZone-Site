<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; try { $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $name = $datos['Username']; $money = $datos['Money']; $score = $datos['Nivel']; $fz = $datos['Moneda']; $ropa = $datos['Skin']; $platabanco = $datos['Banco']; $faccion = $datos['Faccion']; $vip = $datos['VIP']; $finano = $datos['FinAno']; $finmes = $datos['FinMes']; $findia = $datos['FinDia']; $razon = $datos['razon']; $ban = $datos['Baneado']; $Conexion = $datos['Conexion']; } } catch(PDOException $e) { echo 'Error: ' . $e->getMessage(); } } else echo "<script>window.location='ingresar.php';</script>"; $dinerototal = $money+$platabanco; if($Conexion == '1') { echo "<script>window.location='reg.php?u=2';</script>"; } ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Comprar membres&iacutea VIP</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

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
<div class="botones-superiores"><a href="https://www.facebook.com/EvertZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>


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

<?php if($vip == 1 || $vip == 2){echo '<font size=2><div class="actividad">Tu cuenta tiene activa la membresía <strong><span class="Estilo1">VIP2</span></strong> durante <strong><font color="red"><span id=tiempo></span></font></strong> más.</font></div>';} ?> <div class="td-gr">
<div class="icono-td"><img src="imagenes/info.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Comprar un mes VIP</div>

<table width="678" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
 
<tr bgcolor="#f4f4f4">
<td width="328" height="44" valign="middle"><strong>&nbsp;</strong><font size=2>Beneficio</font></td>
<td width="115" align="center" valign="middle"><span class="Estilo3"><font size=2>Com&uacute;n</font></span></td><td width="115" align="center" valign="middle" bgcolor="#efefef"><span class="Estilo1"><font size=2>VIP</font></span></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- L&iacute;mite de veh&iacute;culos propios</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size=2>2</font></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>4</font></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FBFBFB"><font size=2>&nbsp;- L&iacute;mite de intereses ganados en el banco</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size=2>$1.000</font></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>$3.000</font></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- L&iacute;mite de propiedades compradas a su nombre</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size=2>1</td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>2</td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- L&iacute;mite de plantas de marihuana</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size=2>2</td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>4</td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Aumento en ganancia de habilidad trabajando</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FBFBFB"><font size=2>&nbsp;- Tener dos trabajos simultáneamente</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Espacio en el baúl/maletero de los vehículos</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size=2>Normal</font></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>Normal +2</font></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FBFBFB"><font size=2>&nbsp;- Reducci&oacute;n de condena en prisi&oacute;n</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><font size=2>25%</font></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Camiones adicionales para el trabajo de camionero</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Trabajar de basurero sin el uniforme requerido</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Ganancia adicional trabajando de transportista</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Trabajo de ladrón sin requisitos previos</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF"><font size=2>&nbsp;- Asegurada la pesca de ejemplares de mayor peso</font></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="/imagenes/no.png"/></td><td width="120" align="center" valign="middle" bgcolor="#efefef"><img src="/imagenes/si.png"/></td>
</tr>
<tr>
<td width="313" height="30" align="right" valign="middle" bgcolor="#FBFBFB">&nbsp;</td>
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size=2>Gratis</td>
<td width="120" align="center" valign="middle" bgcolor="#efefef"><strong><font size=2>10 Vz</strong> <i>/ mes</font></i></td>
</tr>
<tr bgcolor="#f4f4f4">
<td width="313" height="44" valign="middle"></td>
<td width="120" align="center" valign="middle"></td>
<td width="120" align="center" valign="middle" bgcolor="#efefef"><a href="/comprar-vip.php?t=2"><strong><font size=2>Comprar</font></strong></a></td>
</tr>
</table>
</div>
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
<a href="vip.php" class="actual1" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
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