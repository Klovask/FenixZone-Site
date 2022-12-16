<?php

require_once "seguridad/sql_inject.php"; 
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect);  

session_start(); 
error_reporting(0); 

if(isset($_SESSION['User']))
{
	echo "<script>window.location='cuenta.php';</script>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>
<?php include_once('./kev/pdo.php'); 
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

} echo $NombreServidor?> Roleplay - Ingresa a tu cuenta</title>
<link rel="stylesheet" type="text/css" href="css/estilos3.css"/>
<link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tr>
<td width="997">

<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>

<div class="header-s3-">
<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></a></b>
</div>
<div class="botones-login"><img src="../imagenes/login.png"> <a href="../ingresar.php" title="Iniciar sesión" border="0">Iniciar sesi&oacuten</a></div>
<div class="botones-superiores"><a href="https://www.facebook.com/VortexZoneRP/" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank" border="0"></a>&nbsp;<a href="https://www.youtube.com/channel/UCOIg5mnijOLmW55gmm2ECzg" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank" border="0"></a></div>

</div>
</div>

<div id="menu-superior">
<ul>
<li id="principal"><a href="/">Pincipal</a></li>
<li id="foro"><a href="/foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="/cuenta.php">Tu cuenta</a></li>
<li id="crear-cuenta"><a href="/nuevo.php">Tu cuenta</a></li>
</ul>
<div class="invitaciones-pendientes">
</div>
</div>
<div id="contenido" style="position:relative; z-index:999;">
<div id="contenido-izquierdo">

<?php

$submit			= $_POST['submit'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$hashedPassword	= strtoupper(hash('whirlpool',$password)); 

if($submit)
{
    if($username)
    {
	   if($password)
	    {
			if($_SESSION['img_number'] == $_POST['numeros'])
			{
				try
				{
					$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
					$stmt->bindParam(':usuario', $username, PDO::PARAM_STR);
					$stmt->execute();
			
					$num_rows = $stmt->rowCount();

					if($num_rows == 1)
					{
						while($datos = $stmt->fetch())
						{
							$dbusername = $datos['Username'];
							$dbpassword = $datos['Password'];
						}
						//if($username == $dbusername && $hashedPassword == $dbpassword)
						if($username == $dbusername && $password == $dbpassword)
						{
							$_SESSION['User'] = $dbusername;
							echo "<script>window.location='cuenta.php';</script>";
						}
						else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Contrasena incorrecta</strong></div>';
					}
					else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No existe ninguna cuenta con los datos ingresados.</strong></div>';
				}
				catch(PDOException $e) 
				{
					echo 'Error: ' . $e->getMessage();
				}
			}
			else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>El c&oacutedigo de seguridad ingresado no es correcto.</strong></div>'; 
		}
		else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltó ingresar la contrase&ntilde;a.</strong></div>'; 
	}
	else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltó ingresar el nombre de usuario.</strong></div>'; 
}

if(isset($_POST['recordarme']))
{
	setcookie("NOLOG:USER", $_POST['username'], time()+3600*48);
}

?>

<section class="elcontenedor">
<div class="login">
<h1>Ingresa tus datos</h1>

<form method="post" accept-charset="UTF-8" autocomplete="off">

<p><input type="text" name="username" value="" placeholder="Nombre de usuario" autocomplete="off"></p>

<p><input type="password" name="password" value="" placeholder="Contrase&ntilde;a" autocomplete="off"></p>

<p>
<div style="padding:5px; margin-top:20px">
&nbsp;&nbsp;<img id="seg" src="./captcha/image.php"> <script>
function recarga()
{
	document.getElementById('seg').src='./captcha/image.php';
}
</script>
<a style="width:25px; height:25px;background-image:url('./imagenes/refresh.gif'); display:block; float:left; margin-right:1px" href="javascript:recarga();" title="Generar otra palabra" alt="S"></a>
</div>
</p>

<p><input type="text" name="numeros" value="" placeholder="Ingresa las letras de arriba"></p>

<p class="recordarme">
<label>
<input type="checkbox" name="recordarme" id="recordarme"/>Recordarme en este equipo.
</label>
</p>

<p class="submit"><input type="submit" name="submit" value="Entrar"></p>
</form>

</div>
<div class="login-ayuda">
<p>Â¿Olvidaste la contrase&ntildea? <a href="perdida.php">Click aqu&iacute; para recuperarla</a>.</p>
<p>Â¿No tienes cuenta? <a href="nuevo.php">Click aqu&iacute; para crearte una</a>.</p>
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

<hr>
<a href="/descargas.php" title="Descargas" style="padding-top: 5px;float: left;margin-bottom: 8px;border-top: #DEDEDE 1px solid;margin-top: 5px;border-bottom: #DEDEDE 1px solid;padding-bottom: 5px;"><img src="imagenes/descargas-boton.png"></a>
<hr/>


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