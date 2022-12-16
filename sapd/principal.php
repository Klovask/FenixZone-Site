<?php 

session_start(); 
error_reporting(0); 
include_once('./kev/pdo.php');

if(isset($_SESSION['k_username']))
{
	$query = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$query->bindParam(':usuario', $_SESSION[k_username], PDO::PARAM_STR);
	$query->execute();

	while($row = $query->fetch())
	{
		$name = $row['Username'];
		if($row['Faccion'] != 1)
		{
			session_destroy();
			echo '<script type="text/javascript">window.location="../index.php";</script>';
		}	
	}
}
else echo '<script type="text/javascript">window.location="../sapd/index.php";</script>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="./css/estilo.css" type="text/css" rel="stylesheet">
<title>Departamento de policía de San Andreas</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" width="998" cellspacing="1">
<tbody><tr>
<td background="./imagenes/fondo-top.png"><img src="./imagenes/logopoliciax100.png" align="absmiddle"> <span class="titulo-top">Departamento de Policía de San Andreas</span></td>
</tr>
<tr><td>
<div class="contenido">
<script src="./js/jquery-1.10.2.js"></script>
<div style="float:left; width:579px; margin-left:8px">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td height="24"><span style="font-size:12px;"><a href="./principal.php" class="boton-menu">Principal</a> | <a href="./antecedentes.php" class="boton-menu">Buscar antecedentes</a> | <a href="./vehiculos.php" class="boton-menu">Identificar vehículo</a> | <a href="./policias.php" class="boton-menu">Policías</a> | <a href="./log.php" class="boton-menu">Log</a></span></td>
</tr>
</tbody></table>
</div>
<div style="float:left; width:397px;">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td width="24"><img src="./imagenes/policia64.png" align="absmiddle" width="24" height="24"></td>
<td width="410"><span style="font-size:12px;">Identificado como <strong><?php echo $name; ?></strong></span><strong style="font-size:10px;"> - (<a href="../sapd/index.php?action=exit">Salir</a>)</strong></td>
</tr>
</tbody></table>
</div>
<div class="td-gr">
<div class="icono-td"><img src="imagenes/policia64.png" height="24" width="24"></div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;color:#305B79;padding-top:8px; line-height: 12px;
    padding-left: 34px;">
<a href="#"><font size="2px">Imagenes de datos S.A.P.D</a>
</div>
<div class="central-td2" style="padding: 10px;"><div align="center"><span style="font-size: 16pt;" class="bbc_size"><strong><span style="color: yellow;" class="bbc_color"><a href="#" class="bbc_link" target="_blank" id="linkbbc">La nueva imagenes de datos ya está aquí!</a></span></strong></span></div><br><font size="2px">Desde ahora podrán agregar 
antecedentes a los ciudadanos de San Andreas de forma mucho más práctica que con los antiguos ficheros estáticos de la comisaría, para ello nos hemos actualizado a la nueva plataforma <strong>BDCSA v1.4.5</strong> desarrollada en los laboratorios técnicos de Korea del Sur.<br><br>El procedimiento que deberán seguir para ingresar los datos de un arresto a la plataforma es el siguiente:<br><br>1- Ingresan al 
sistema desde cualquier medio que tenga conexión a la red (Patrulla, GPS policial) y ponen su código de seguridad en el campo cuando se les pida. (recuerden no poner sus códigos de seguridad en <strong>NINGÚN</strong> lugar ajeno a los sistemas de conexión estable y seguros de SAPD)<br><br>2- Buscan el expediente de la persona que está siendo arrestada en el formato "Nombre Apellido" haciendo click en la solapa 
"<strong>Buscar antecedentes</strong>".<br>
<center><img src="./imagenes/imagen1.png" width="700"></center>
<p><br>
  3- Aquí podrán ver los antecedentes del ciudadano y agregar nuevos, haciendo click en "<strong>Agregar antecedentes</strong>"</p>
<p align="center"><img src="./imagenes/imagen2.png" width="700"></p>
<p>  4- Al ingresar un nuevo antecedente pueden elegirlo de una larga lista de <strong>cargos imputables</strong>, recuerden seleccionar bien lo que haya echo la persona. Se pone la <strong>condena</strong> aproximada (de acuerdo al delito, los jueces cambiarán el tiempo de condena real) y los <strong>Datos adicionales</strong>, 
  una parte muy importante al ingresar nuevos datos ya que esto les servirá a futuro a quienes consulten los expedientes. Les recordamos que siempre deben agregar datos adicionales a una detención, en caso de que no tengan nada que decir es mejor no agregar nada al expediente ya que el arresto quedará guardado igual pero sin detalles.
</p>
<center><img src="./imagenes/imagen3.png"></center>
<br>
Próximamente estará listo el cambio de los archivos de servidor y la transcripción total de la base de datos por parte del<strong> 
Ministerio de Transportes </strong>por lo cual dispondremos de la facultad para buscar e identificar a los dueños de cualquier automóvil. También estará lista la función para imponer multas a estos vehiculos.<br>
<br>Esperamos que le den un buen uso a nuestro nuevo sistema y se sientan motivados de su aplicación, también me interesa informarles que la solapa <strong>"Principal"</strong> les llevará directamente a las <strong>últimas noticias</strong> del cuerpo policial en donde se publicarán anuncios frecuentemente y no siempre de carácter ultra secreto, para que no haya problemas con la gente que vea esta información en la pantalla de las patrullas, por ejemplo.<br><br><div style="text-align: right;">
Atte: <strong>Comisario Kropper</strong><br></div><div class="hr"></div>
</div>
</div> </div>
</td></tr>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>