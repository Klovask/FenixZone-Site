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
<td width="410"><span style="font-size:12px;">Identificado como <strong><?php echo $name ?></strong></span><strong style="font-size:10px;"> - (<a href="../sapd/index.php?action=exit">Salir</a>)</strong></td>
</tr>
</tbody></table>
</div>


<div class="td-gr">
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/persona24.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
<font size="2px">Nómina policial
</div>
<div class="central-td2" style="padding: 10px;">
<table width="950" border="0" cellpadding="5" cellspacing="1" bgcolor="#062c54" class="tabline">
 
<tbody>
<tr class="primertd">
	<th width="150" height="18" valign="middle" class="min-tit" bgcolor="#00162d" align="left"><font size="2px">Nombre</th>
	<th width="100" align="center" valign="middle" class="min-tit" bgcolor="#00162d"><font size="2px">Rango</th>
	<th width="100" align="center" valign="middle" class="min-tit" bgcolor="#00162d"><font size="2px">Edad</th>
	<th width="200" align="center" valign="middle" class="min-tit" bgcolor="#00162d"><font size="2px">Registros de antecedentes</th>
	<th width="100" align="center" valign="middle" class="min-tit" bgcolor="#00162d"><font size="2px">Suspensiones</th>
	<th width="30" align="center" valign="middle" class="min-tit" bgcolor="#00162d"><font size="2px">Medalla</th>
</tr>

<?php 

$consulta = $con->prepare("SELECT * FROM usuarios WHERE Faccion='1' ORDER BY Rango DESC");
$consulta->execute();

while($filas = $consulta->fetch())
{
	$nombre=$filas['Username'];
	$edad=$filas['Edad'];
	$rango=$filas['Rango'];
	
	if($rango == 1) { $rangouser = "Cadete"; }
	if($rango == 2) { $rangouser = "Oficial"; }
	if($rango == 3) { $rangouser = "Cabo"; }
	if($rango == 4) { $rangouser = "Sargento"; }
	if($rango == 5) { $rangouser = "Teniente"; }
	if($rango == 6) { $rangouser = "Comisario"; }
	
	$i = 0;
	
	$consulta2 = $con->prepare("SELECT * FROM antecedentes WHERE Oficial = :nombre");
	$consulta2->bindParam(':nombre', $nombre, PDO::PARAM_STR);
	$consulta2->execute();

	while($filas2 = $consulta2->fetch())
	{
		$i++;
	}

?>

<tr>
	<td height="20" valign="middle" bgcolor="#00162d"><div class="cadena2"><a class="policia-link"><font size="2px"><?php echo $nombre; ?></a></div></td>
	<td align="center" valign="middle" bgcolor="#00162d"><font size="2px"><?php echo $rangouser; ?></td>
	<td align="center" valign="middle" bgcolor="#00162d"><font size="2px"><?php echo $edad; ?></td>
	<td align="center" valign="middle" bgcolor="#00162d"><font size="2px"><?php echo $i; ?></td>
	<td align="center" valign="middle" bgcolor="#00162d"><font size="2px">Ninguna</td>
	<td width="30" align="center" valign="middle" bgcolor="#00162d"><img src="imagenes/medallas/<?php echo $rango; ?>.png" height="16" width="20"></td>
</tr>

<?php 

}

?>

</tbody></table><div class="hr"></div> </div>
</div>

</div>
</td>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>