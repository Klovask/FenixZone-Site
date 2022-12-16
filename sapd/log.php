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
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/persona24.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
<font size="2px">Log / Registro (Antecedentes)
</div>

<div class="central-td2" style="padding: 10px;">

<?php 

$consulta = $con->prepare("SELECT * FROM antecedentes ORDER BY Id DESC Limit 30");
$consulta->execute();

while($filas = $consulta->fetch())
{ 
	$nombreoficial = $filas['Oficial'];
	$fecha = $filas['Fecha'];
	$idant = $filas['Id'];

	$query6 = $con->prepare("SELECT * FROM usuarios WHERE Id = :usuario");
	$query6->bindParam(':usuario', $filas[UserID], PDO::PARAM_STR);
	$query6->execute();

	while($row6 = $query6->fetch())
	{
		$nombre = $row6['Username'];
	}

?>

<strong><a class="policia-link"><font size="2px"><?php echo $nombreoficial; ?></a></strong> agregó el antecedente #<?php echo $idant; ?> al usuario <strong><a><?php echo $nombre; ?></a></strong> - <?php echo $fecha; ?></font><hr>

<?php 

}

?>

</div>


</div>
</td>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>