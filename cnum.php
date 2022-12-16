<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = strtolower($_SESSION['User']); $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($row = $stmt->fetch()) { $name = $row['Username']; $money = $row['Money']; $score = $row['Nivel']; $fz = $row['Moneda']; $ropa = $row['Skin']; $platabanco = $row['Banco']; $razon = $row['razon']; $ban = $row['Baneado']; $name = $row['Username']; $money = $row['Money']; $email = $row['Email']; $exp = $row['Experiencia']; $idplayer = $row['ID']; $adm = $row['Admin']; $arrestado = $row['Registro']; $horasdejuego = $row['Sexo']; $numerotlf = $row['Numero']; $vida = $row['Vida'];
$Chaleco = $row['Chaleco']; $crack = $row['Crack']; $score = $row['Nivel']; $medicamentos = $row['Medicamentos']; $guia = $row['Agenda'];$piezas = $row['Materiales']; $repuestos = $row['Repuestos']; $radio = $row['Radio']; $totems = $row['totems']; $fz = $row['Moneda'];$pistola = $row['WP1']; $escopeta = $row['WP2']; $subfusil = $row['WP3']; $asalto = $row['WP4']; $rifle = $row['WP5']; $blanca = $row['WP6'];
$granada = $row['WP8']; $regalo = $row['WP7']; $expcamionero = $row['ExpCamionero']; $expbasurero = $row['ExpBasurero']; $exparmero = $row['ExpArmero']; $exppescador = $row['ExpPescador']; $expminero = $row['ExpMinero']; $expladron = $row['ExpLadron'];
$exptransportista = $row['ExpTransportista']; $nivelcamionero = $row['NivelCamionero']; $nivelbasurero = $row['NivelBasurero']; $nivelpescador = $row['NivelPescador']; $nivelminero = $row['NivelMinero']; $nivelarmero = $row['NivelArmero'];
$nivelladron = $row['NivelLadron']; $niveltransportista = $row['NivelTransportista']; $nivelpiloto = $row['NivelPiloto'];
$exppiloto = $row['ExpPiloto']; $fechaban = $row['fecha']; $razon = $row['razon']; $ban = $row['Baneado'];
$expfaltante = $row['expfaltante']; $ropa = $row['Skin']; $platabanco = $row['Banco']; $numerocuentabancaria = $row['CuentaB'];
$posibilidad = $row['changenamefree']; $EstadoKEY = $row['EstadoKEY']; $CodigoKEY = $row['CodigoKEY']; $CPendiente = $row['CPendiente']; $nuevocorreo = $row['nuevocorreo']; $FinDiaC = $row['FinDiaC']; $FinMesC = $row['FinMesC']; $FinAnoC = $row['FinAnoC'];
$auto1 = $row['Modelo']; $auto2 = $row['Modelo2']; $faccion = $row['Faccion'];
$CPendiente = $row['CPendiente']; $FinDiaC = $row['FinDiaC']; $FinMesC = $row['FinMesC']; $FinAnoC = $row['FinAnoC'];
$nuevocorreo = $row['nuevocorreo']; $LastOn = $row['LastOn']; $Conexion = $row['Conexion'];  $faccionjugador = $row['Faccion'];
$rangojugador = $row['Rango']; } $dinerototal = $money+$platabanco; } else echo "<script>window.location='ingresar.php';</script>"; ?>

<?php require("./conectados/samp_query.php"); try { $rQuery = new QueryServer( $serverIP, $serverPort ); $aInformation = $rQuery->GetInfo( ); $aServerRules = $rQuery->GetRules( ); $aBasicPlayer = $rQuery->GetPlayers( ); $aTotalPlayers = $rQuery->GetDetailedPlayers( ); $rQuery->Close( ); } catch (QueryServerException $pError) { } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Cambiar numero - <?php echo $NombreServidor?> Roleplay</title>

<link rel="stylesheet" type="text/css" href="./css/estilo.css"> <link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="./js/scripts.js"></script>

<script src="./js/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<style>
.alertas{
	float: left;margin-left: 660px;margin-top: 170px;position: absolute; background-color:#0081ff;border-radius: 3px; padding: 0.2em 0.4em 0.2em;color:#FFFFFF;font-weight: bold;
}
.alertas a{
	color:#FFF;	
}
.alertas:hover{
	background-color:#0068ce;
}
.alertas a:hover{
	color:#f0f0f0;
}
</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<body><tr>
<td width="997">
<div class="header">
<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php echo $serverIPPrefix ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php echo $serverIPPrefix ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></a></b>
</div>
<div class="botones-superiores"><a href="<?php echo $FacebookURL?>" title="Cuenta oficial de Facebook" class="facebook-boton" target="_blank">&nbsp;</a>&nbsp;<a href="<?php echo $YoutubeURL?>" title="Cuenta oficial de YouTube" class="youtube-boton" target="_blank">&nbsp;</a></div>

<div class="logged-usuario">
<font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo strtoupper('<font color="white">'.$quitargion.'</font>') ?>
</font><br><br><a href="./cuenta.php" title="Tu cuenta"><font size="2px;">&raquo; TU CUENTA</font></a>
</a><br><br><a href="./logout.php" title="Cerrar sesión - Salir"><font size="2px;">&raquo; SALIR</a>
</a>
</div>
<div class="img-usuario"><?php echo '<img src="./imagenes/Skin/'.$ropa.'.png">';?>
</div>
</div>

<div id="menu-superior">                                 <ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
<?php include_once('./invitaciones/invitacion.php'); ?> 
</div>

</div>
<div id="contenido">

<?php
if ($ban == 1):
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
<img src="./imagenes/alerta16.png" align="absmiddle"><font size=2> Tu direcci&oacute;n de correo <strong> '.$email.' </strong> no ha sido verificada todavía. (<a href="/enviar-verificacion.php">Enviar email de verificaci&oacute;n</a> / <a href="/cambiar-correo.php" title="Cambiar direcci&oacute;n de correo.">Cambiar direcci&oacute;n de correo</a>)
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

<td valign="middle" bgcolor="#FFFFCC" align="left" colspan="2"><img src="./imagenes/alerta16.png" align="absmiddle"><font size="2"> La dirección de correo electrónico de su cuenta se cambia, para <strong>'.$nuevocorreo.'</strong> el dia '.$FinDiaC.'/'.$FinMesC.'/'.$FinAnoC.' - <a href="./ccc.php?c=960610bfe733ca3888de20d3957de080" title="Cancelar cambio de correo electrónico."><strong>Cancelar cambio</strong></font></a></td>
</tr>
</font>
</tbody>

</table>';
}
?>
<div id="contenido-izquierdo">
<div style="background-color: #ae0505;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    left: 20px;
    padding: 4px;
    position: absolute;
    top: 20px;
    width: 640px; border:1px solid #880808;text-align:center; display:none;" id="error">Error</div>
<section class="elcontenedor">
<div class="login">
<h1>Cambio de número de teléfono</h1>
<div style="width:100%; text-align:center; font-size:24px;height: 55px;"><font color="#216b9a">
<?php if($numerotlf== 0){echo"No tiene";}else{echo $numerotlf;}?></font>&nbsp;<img src="./imagenes/flecha-derecha.png" align="absmiddle" />&nbsp;<span id="elnum">???</span></div>
<input name="nnum" type="text" maxlength="8" id="nvn" autocomplete="off" placeholder="Nuevo número de teléfono"/>
<div style="float:left; border:solid #C9C9C9 1px; margin-left:5px; padding:10px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12) inset; width:278px; font-weight:bold; background-color:#E7E7E7; margin-bottom:10px;margin-top: 10px; display:none" id="inpcost">Costo: <span style="float:right; color:green" id="fzn">10Fz</span></div>
<p style="display:none; color:green;font-size: 27px;margin-bottom: -15px;" id="disponible">¡Disponible!</p>
<p style="display:none" id="inppsw"><input name="nueva" type="password" maxlength="30" placeholder="Ingresa tu contraseña" id="psw" autocomplete="off" /></p>
<p id="cmp"><input type="submit" name="commit" value="Comprobar disponibilidad" id="comprobar-numero"><img src="./imagenes/spinner.gif" style="display:none; margin-top:15px;" id="cargando" /></p>
<p id="cmpe" style="display:none;"><input type="submit" name="commit" value="Comprar" id="comprar-numero"><img src="./imagenes/spinner.gif" style="display:none; margin-top:15px;" id="cargandocm" /></p>
</div>
</section>
</div>
<div id="menu-derecho"><style>
.rounded-img {
display: inline-block;
/*border: solid 1px #000;*/
overflow: hidden;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .9);
-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .9);
box-shadow: 0 1px 3px rgba(0, 0, 0, .9);
} 
</style>
<div class="td">
<div class="icono-td">
<img src="./imagenes/dinero_p.png" />
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

<a href="comprar-vz.php"><img src="./imagenes/comprar-vz.png" title="Comprar HZ" border="0"></a>

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
<a href="vip.php" class="panel-todo" title="Area VIP">&raquo; Comprar membres&iacute;a VIP</a>
<a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo; Invitar a un amigo</a>
<a href="comprar-prendas.php" class="panel-todo" title="Comprar prendas">&raquo; Comprar prendas</a>
<!--a href="./sapd" class="panel-todo" title="San Andreas Police Departament">&raquo; S.A.P.D</a>
<a href="./interiores" class="panel-todo" title="Todos los interiores de San Andreas">&raquo; Ver interiores</a--->
<a href="logout.php" class="panel-todo" title="Cerrar sesi&oacute;n">&raquo; Salir</a>
</div>
<hr />
<a href="./descargas.php" title="Descargas" style="padding-top: 5px;float: left;margin-bottom: 8px;border-top: #DEDEDE 1px solid;margin-top: 5px;border-bottom: #DEDEDE 1px solid;padding-bottom: 5px;"><img src="imagenes/descargas-boton.png"></a>
<hr />
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
<!---->

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
</script>
<hr />
<div class="td">
<div class="icono-td">
<img src="./imagenes/diario.png" height="16" width="16"/>
</div>
<div class="titulo-td">
Ultimos articulos periodisticos
</div>
</div>
<div class="bloque">
<a href="index.php" title="Leer art&iacute;culo" target="_blank">El gobierno de San Andreas adquiere nuevos trenes de pasajeros</a><div class="hr"></div><a href="index.php" title="Leer art&iacute;culo" target="_blank">Regresan las gaseosas mas polemicas (Sprunk)</a><div class="hr"></div><a href="index.php" title="Leer art&iacute;culo" target="_blank">Incendio en una pizzeria</a><div class="hr"></div><a href="index.php" title="Leer art&iacute;culo" target="_blank">Gobernacion confisca fabrica de bebidas Sprunk</a><div class="hr"></div><a href="index.php" title="Leer art&iacute;culo" target="_blank">S.A.P.D emite comunicado acerca de los bloqueos de transito</a><div class="hr"></div></div>
<hr>
<?php } ?>
<!---->

<?php if($activar_fb == 1) {?>

<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/facebook.png"></div>
<div class="titulo-td"><?php echo strtoupper($Diminutivo)?>:RP FaceBook</div>
</div>

<div class="bloque">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php echo $FacebookURL?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:68px;" allowTransparency="true">
</iframe>
</div>

<?php } ?>

<!---->

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
<?php $carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 5"); $carrera->execute(); $counter = 0; if($row = $carrera->fetch(PDO::FETCH_ASSOC)) { do { $counter++; echo "".$counter.". ".$row["Username"]."<span style='float:right; font-size:11px;'>".$row["PuntosCarrera"]." Puntos</span><div class='hr'></div>"; } while($row = $carrera->fetch(PDO::FETCH_ASSOC)); } else { echo "No se ha encontrado ningún registro"; } ?>
<center><a href="./torneo-carreras.php"><?php echo $Texto_Index_8;?></a></center>
</div>
</div>
<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; <?php echo $Año?></div> </td>
</tr>
</table>
</body>
<div id="lean_overlay"></div>
</html>
</table>
<div id="cambiarcorreo" style="display: none; position: fixed; opacity: 1; z-index: 11000; left: 50%; margin-left: -202px; top: 200px; ">
<div id="cargando-cambiar-correo" style="display:none; padding:20px;"><table width="384" height="260"><tr><td align="center" valign="middle"><img src="/imagenes/cargandox50.gif"/><br><br><strong>Carregando...</strong></td></tr></table></div>
<div id="cambiar-correo-ct" style="display:none">
</div>
</div>
</body>
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
<script>
$( "#ad" ).hide();
$( "#ad2" ).hide();
$("#nvn").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 27, 13]) !== -1 ||
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	var regExp = /^0[0-9].*$/
	  $( "#nvn" ).keyup(function() {
		  if($( "#nvn" ).val().length == 0){
			  $( "#elnum" ).text( "???" );
			  ActPrecio();
			  return;
		  }else if($( "#nvn" ).val().substring(0,1) == "0"){
			  $( "#error" ).text("El número no puede comenzar con 0.");
			  $( "#elnum" ).text( $( "#nvn" ).val() );
			  $( "#error" ).fadeIn();
			  ActPrecio();
			  return;
		  }else if($( "#nvn" ).val().length < 3){
			  $( "#error" ).text("El número tiene que tener al menos 3 dígitos.");
			  $( "#elnum" ).text( $( "#nvn" ).val() );
			  $( "#error" ).show();
			  ActPrecio();
			  return;
		  }else if($( "#nvn" ).val().length == 8){
			  if($( "#nvn" ).val().substring(0,1) == "5"){
				  $( "#error" ).text("El número de 8 dígitos no puede comenzar con 5.");
				  $( "#elnum" ).text( $( "#nvn" ).val() );
				  $( "#error" ).fadeIn();
				  ActPrecio();
				  return;
			  }else if($( "#nvn" ).val().substring(0,1) == "6"){
				  $( "#error" ).text("El número de 8 dígitos no puede comenzar con 6.");
				  $( "#elnum" ).text( $( "#nvn" ).val() );
				  $( "#error" ).fadeIn();
				  ActPrecio();
				  return;
			  }
		  }else if($( "#nvn" ).val().length > 8){
			 $( "#nvn" ).val($( "#nvn" ).val().substring(0,8) );
			 ActPrecio();
			 return;
		  }else if($( "#nvn" ).val() == "911" || $( "#nvn" ).val() == "555" || $( "#nvn" ).val() == "4825" || $( "#nvn" ).val() == "815"){
			  $( "#error" ).text("El número ingresado ya se encuentra ocupado.");
			  $( "#elnum" ).text( $( "#nvn" ).val() );
		      $( "#error" ).fadeIn();
			  ActPrecio();
			  return;
		  }else{
		  	$( "#elnum" ).text( $( "#nvn" ).val() );
		  }
		  $( "#elnum" ).text( $( "#nvn" ).val() );
		  $( "#error" ).hide();
		  ActPrecio();
		});
		function ActPrecio(){
			switch($( "#nvn" ).val().length){
				case 3:
					$( "#fzn" ).text("45<?php echo $Diminutivo?>");
					$( "#inpcost" ).fadeIn();
					break;
				case 4:
					$( "#fzn" ).text("35<?php echo $Diminutivo?>");
					$( "#inpcost" ).fadeIn();
					break;
				case 5:	
					$( "#fzn" ).text("20<?php echo $Diminutivo?>");
					$( "#inpcost" ).fadeIn();
					break;
				case 6:	
					$( "#fzn" ).text("10<?php echo $Diminutivo?>");
					$( "#inpcost" ).fadeIn();
					break;
				case 7:	
					$( "#fzn" ).text("$700.000");
					$( "#inpcost" ).fadeIn();
					break;
				case 8:	
					$( "#fzn" ).text("$400.000");
					$( "#inpcost" ).fadeIn();
					break;
				default:
					$( "#inpcost" ).hide();
					break;
			}
			$("#comprobar-numero").fadeIn();
			$("#cmpe").hide();
		}
	var Comprando = 0;
	$( "#comprar-numero" ).click(function() {
		if(Comprando == 0){
			$( "#error" ).hide();
			Comprando = 1;
			$("#cargandocm").show();
			$("#comprar-numero").hide();
			$.post("comprar-numero.php", { numero: $( "#nvn" ).val(), ps: $( "#psw" ).val() } , function(data) {
				if(data == 1){
					
				}else if(data == 45){
					$( "#error" ).html("La contraseña ingresada no corresponde a la de tu cuenta.");
					$( "#error" ).fadeIn();
					$("#comprar-numero").show();
					$("#cargandocm").hide();
				}else if(data == 46){
					$( "#error" ).html("Desconectate del juego y luego compra el nuevo número.");
					$( "#error" ).fadeIn();
					$("#comprar-numero").show();
					$("#cargandocm").hide();
				}else if(data == 50){
					if($( "#nvn" ).val().length < 7){
						$( "#error" ).html("No tienes los Fz necesarios para comprar este número.");
					}else{
						$( "#error" ).html("No tienes el dinero necesario para comprar este número.");
					}
					$( "#error" ).fadeIn();
					$("#comprar-numero").show();
					$("#cargandocm").hide();
				}else if(data == 15){
					$("#disponible").html("¡Cambio realizado!");
					$("#disponible").show();
					$("#inppsw").hide();
					$("#comprar-numero").hide();
					$("#nvn").hide();
					$("#inpcost").hide();
					$("#cargandocm").hide();
					$("#psw").val("");
				}
				Comprando = 0;
			});	
		}
	});		
	$( "#comprobar-numero" ).click(function() {
		if(Comprando == 0){
			if($( "#nvn" ).val().length >= 3){$( "#inpcost" ).fadeIn();
				Comprando = 1;
				$("#cargando").show();
				$("#comprobar-numero").hide();
				$("#disponible").hide();
				$("#inppsw").hide();
				$("#cmpe").hide();
				$.post("comprobar-numero.php", { numero: $( "#nvn" ).val() } , function(data) {
					if(data == 1){
						alert("ERROR: Inicia sesión nuevamente.");
						location.href='http://rol.fenixzone.com/entrar.php';
					}else if(data == 2){
						//$("#cmp").html("<center><strong><span style=\"color:green;\">Cambio realizado corractamente.</span></strong></center>");
						setTimeout(
							function(){
								window.location = 'http://rol.fenixzone.com/cuenta.php';
							},
						1000);
					}else if(data == 4){
						$("#cargando").hide();
						$("#comprobar-numero").fadeIn();
						$( "#error" ).html("El número <b>"+$( "#nvn" ).val()+"</b> ya se encuentra ocupado.");
						$( "#error" ).fadeIn();
					}else if(data == 9){
						$("#cargando").hide();
						$("#comprobar-numero").fadeIn();
						$( "#error" ).html("El número tiene que tener al menos 3 dígitos.");
						$( "#error" ).fadeIn();
					}else if(data == 1000){
						$("#disponible").show();
						$("#inppsw").show();
						$("#cmpe").show();
						$("#cargando").hide();
						$( "#error" ).hide();
						$( "#psw").focus();
					}else{
						$("#cargando").hide();
						$("#comprobar-numero").fadeIn();
					}
					Comprando = 0;
				});
			}
		}
	});
</script>
</body>
</html>
